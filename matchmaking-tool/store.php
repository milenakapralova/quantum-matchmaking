<?php
header("Content-Type: application/json; charset=utf-8");
header("Cache-Control: no-store");

$file = dirname(__DIR__) . "/tables.json";
$method = $_SERVER["REQUEST_METHOD"] ?? "GET";

function stamp($item) {
  $updated = isset($item["updated"]) ? (int) $item["updated"] : 0;
  $trashed = isset($item["trashed"]) ? (int) $item["trashed"] : 0;
  return max($updated, $trashed);
}

function blank_store() {
  return ["sessions" => [], "trash" => [], "purged" => []];
}

function read_store($file) {
  if (!is_file($file)) return blank_store();
  $data = json_decode(file_get_contents($file), true);
  if (!is_array($data)) return blank_store();
  $data["sessions"] = isset($data["sessions"]) && is_array($data["sessions"]) ? $data["sessions"] : [];
  $data["trash"] = isset($data["trash"]) && is_array($data["trash"]) ? $data["trash"] : [];
  $data["purged"] = isset($data["purged"]) && is_array($data["purged"]) ? $data["purged"] : [];
  return $data;
}

function take_items(&$map, $list) {
  if (!is_array($list)) return;
  foreach ($list as $item) {
    if (!is_array($item) || !isset($item["id"]) || !is_string($item["id"])) continue;
    if (strlen($item["id"]) < 1 || strlen($item["id"]) > 40) continue;
    $prev = isset($map[$item["id"]]) ? $map[$item["id"]] : null;
    if (!$prev || stamp($item) >= stamp($prev)) $map[$item["id"]] = $item;
  }
}

function merge_store($current, $incoming) {
  $map = [];
  take_items($map, $current["sessions"] ?? []);
  take_items($map, $current["trash"] ?? []);
  take_items($map, $incoming["sessions"] ?? []);
  take_items($map, $incoming["trash"] ?? []);
  $purged = [];
  foreach ([$current["purged"] ?? [], $incoming["purged"] ?? []] as $list) {
    if (!is_array($list)) continue;
    foreach ($list as $id => $when) {
      if (!is_string($id) || strlen($id) > 40) continue;
      $when = (int) $when;
      if (!isset($purged[$id]) || $when > $purged[$id]) $purged[$id] = $when;
    }
  }
  foreach ($purged as $id => $when) {
    if (isset($map[$id]) && $when >= stamp($map[$id])) unset($map[$id]);
  }
  $sessions = [];
  $trash = [];
  foreach ($map as $item) {
    if (!empty($item["trashed"])) $trash[] = $item;
    else $sessions[] = $item;
  }
  return ["sessions" => array_values($sessions), "trash" => array_values($trash), "purged" => $purged];
}

if ($method === "GET") {
  echo json_encode(read_store($file));
  exit;
}

if ($method !== "POST") {
  http_response_code(405);
  echo json_encode(["error" => "method"]);
  exit;
}

$raw = file_get_contents("php://input");
if ($raw === false || strlen($raw) > 2000000) {
  http_response_code(413);
  echo json_encode(["error" => "too large"]);
  exit;
}
$incoming = json_decode($raw, true);
if (!is_array($incoming)) {
  http_response_code(400);
  echo json_encode(["error" => "json"]);
  exit;
}

$fp = fopen($file, "c+");
if (!$fp) {
  http_response_code(500);
  echo json_encode(["error" => "store"]);
  exit;
}
flock($fp, LOCK_EX);
$existing = json_decode(stream_get_contents($fp), true);
if (!is_array($existing)) $existing = blank_store();
$merged = merge_store($existing, $incoming);
rewind($fp);
ftruncate($fp, 0);
fwrite($fp, json_encode($merged));
fflush($fp);
flock($fp, LOCK_UN);
fclose($fp);
echo json_encode($merged);

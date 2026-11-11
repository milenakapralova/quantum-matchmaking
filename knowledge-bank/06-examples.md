# Examples from practice

Booklet pp. 75–85. The document insists these are examples, not use cases or scenarios. Concrete applications are still in their infancy. Some call for action now. Others are explorations of possibilities that lie further out. Maturity of the underlying technology is in [07-quantum-primer.md](07-quantum-primer.md).

Two postures appear throughout. Some organizations are building quantum competence and asking how the technology can serve their goals. Larger ones often have teams for the opportunities and the harms of new technology. Others see quantum technology coming toward them and are preparing for negative effects, especially around encryption.

A TNO figure (figure 06) maps application ideas across sectors. Labels readable from the figure:

| Domain | Applications named |
|---|---|
| Marketing | Advertisement strategy, recommender systems, consumer behaviour |
| Industry | IC manufacturing and design, material and recycling management, supply-chain management |
| Defense | Cybersecurity, operations optimization, data processing |
| Material science | Aerospace material design, structural analysis, molecule simulation |
| Energy | Smart-grid optimization, oil-well optimization, seismic imaging |
| Medical and pharma | Catalyst and enzyme design, personalized medicines, genomic analysis |
| Automotive | E-charging optimization, autonomous driving |
| Finance | Portfolio optimization, fraud detection, trading strategies |
| Transport | Timetable design, ascending-phase simulation, load optimization |
| Logistics | Planning and scheduling, traffic routing, multi-model optimization |

The figure also places traffic simulation near the medical, automotive, and material-science cluster. Treat the table as a reading of a graphic, not as TNO’s own classification written out in prose.

## Water quality and quantum sensing

The Ministry of Infrastructure and Water Management follows quantum technology in two ways. First, scenarios for making government quantum-secure. Second, a dedicated team exploring quantum technology for monitoring surface water.

Surface-water quality is largely measured by taking samples and sending them to a laboratory, after which measures can be taken. Not every chemical compound can be measured. Timely and appropriate action is hard, especially when public health may be at risk.

Governments and water companies are responsible for water quality. Failure can threaten public health, reduce food production, block economic growth, and cause reputational damage. Dutch water quality is under pressure from intensive land use, high population density, and discharges such as PFAS. Manure and pesticides from agriculture are named as major sources that still have to be addressed. Contaminated water is unsuitable as drinking water, and making it suitable is difficult and costly.

The opportunity the ministry is exploring: quantum technology combined with artificial intelligence, including machine learning, plus sensors and simulations, to see what the pollution is and how it spreads. Scientists are working on hypersensitive quantum sensors that could measure, in real time, which substances or compounds are in a liquid. Machine learning is already used to model dispersion in surface water. Quantum computing is expected, eventually, to make that machine learning more powerful and faster. The hoped-for result is a much better picture of water quality while the costs of monitoring, treatment, and enforcement stay manageable.

## Secure communication at the Port of Rotterdam

The Port of Rotterdam is experimenting with quantum technology, above all for secure communication. The port authority wants to try a quantum network for communication with users such as harbour masters and customs, to reduce misuse of critical infrastructure. More secure communication systems are linked to the safety of seagoing vessels and to the economic traffic that depends on them.

Scale, as given: nearly 15 million sea containers a year, one of the largest ports in the world, economic added value of 8.2 percent of Dutch GDP (63 billion euros), and more than 500,000 people employed directly and indirectly. The authority manages critical infrastructure and crucial data for the safe transit of ships, people, and cargo, including water-level measurements. Tampering by hackers could be devastating.

The technical idea: quantum properties can reveal whether keys were intercepted in transit. Those keys encrypt at the sender and decrypt at the receiver. The encrypted payload still travels over the ordinary internet. The protocol is BB84, from 1984; practical application is placed in the last decade before the report. A selected set of parties would exchange data in a protected environment: the Port of Rotterdam Authority, Portbase (the digital link, shared with the port of Amsterdam, between companies and the ports), and several nautical service providers. The experiment’s purpose is to validate the technical capabilities. The setup’s stated strength is that it can be extended to many more users at relatively low cost.

## Quantum-secure encryption in government and finance

Many organizations meet quantum technology as a threat to current cryptography rather than as a tool they deploy. Quantum computing may eventually make the cryptography in many internet protocols inadequate. The response is quantum-secure cryptography: methods a quantum computer cannot break. Ordinary computers and phones can already run it. Quantum-secure encryption does not require a quantum computer.

NIST had, at the time of the report, selected encryption methods that a quantum computer cannot crack. They were being tested worldwide and were expected to become a standard.

Preparation is already underway, including in central government, against **store now, decrypt later**: an attacker stores encrypted confidential information now and decrypts it once a quantum computer can break the cipher. The government is working on a migration plan so that state secrets and other information that must stay protected for a long time are encrypted with quantum-secure methods. A government-wide plan aims at a quantum-secure government.

The Dutch Banking Association (NVB) works with banks on awareness of both possibilities and negative effects. A major focus is ATMs, because they last more than ten years and must be able to run quantum-secure encryption. The NVB holds seminars and has developed training for bank employees and managers, and it keeps contact with counterparts abroad because new standards need international cooperation.

## Exploration in the financial sector

Separate from the encryption work, the sector is building case studies on quantum computing itself.

- Quantum optimization algorithms to predict interest rates in stock trading more effectively.
- Optimization for portfolio management, and machine learning. The citation is Orús, Mugel, and Lizaso, “Quantum computing for finance: Overview and prospects,” *Reviews in Physics* 4 (2019).
- Much more accurate and faster atomic clocks and oscillators, enabling faster global trading.
- Quantum optimization and Monte Carlo simulation, potentially, for detecting suspicious transactions under anti-money-laundering law.
- Secure authentication and authorization: new encryption methods, as in the Rotterdam pilot, and new ways to establish that data is being exchanged with the right machine and that the right person is operating it.

## Telecom

Quantum technology reaches telecom through sensing, communication, computing, and encryption. The readiness levels below are the document’s, explained in the primer.

**Sensing.** New quantum sensors, atomic clocks in particular, will soon be part of the infrastructure. Atomic clocks are placed at TRL 6: an experiment in the relevant environment. More accurate equipment, higher clock speeds, and accurate synchronization increase transmission capacity. A major limit on today’s capacity is imprecise measurement of time. Devices and networks coordinate on clock pulses, and packets carry relatively imprecise timestamps. More exact pulses raise the frequency of command execution and the accuracy of timestamps. The document’s analogy: a town clock striking once an hour, then every fifteen minutes, then clocks accurate to the minute. Devices follow the same pattern. More precise time means more frequent pulses and tighter synchronization.

Sensitive quantum gravity sensors could map the subsurface much more accurately for infrastructure maintenance and construction. Those are placed at TRL 4.

A new generation of antennas may eventually be many times more sensitive and, later, simpler, cheaper, and more robust. That application is placed at TRL 1: the principle has been shown in a laboratory. Quantum sensors are expected to find a place in radio technology, the radio spectrum, and autonomous navigation. They are expected to be stronger and more accurate than current receivers because of greater range, and to strengthen existing uses across the radio spectrum, including GNSS positioning and mobile communication between devices. They might also replace existing radio applications or open new uses of frequency space.

Ultra-sensitive, low-energy quantum sensors measuring properties of air, water, and soil would create a telecom problem of their own: moving all of that data safely will take major investment.

**Communication.** Quantum key distribution offers more secure encryption and safer authentication and authorization, by sending quantum particles over fiber. Telecom providers have a role in building that infrastructure. Communication between quantum computers would eventually use the same kind of network. A footnote adds that the particles can also be sent through the air, by satellite, and in theory even physically. With a regulator such as the National Inspectorate for Digital Infrastructure (the Radiocommunications Agency until 1 January 2023), which watches the security and reliability of digital telecom infrastructure and the continuity of organizations that depend on IT, providers should at least follow the relevant developments. Geopolitical dependence on global players and large technology companies may require action while the technology is still developing.

**Computing.** Extra computing power can be applied to optimization: network load control, maintenance planning and prevention, and network design. Quantum machine learning can recognize patterns in large data sets that are currently hidden. A footnote stresses the real-time aspect: using real-time measurements for self-configuration of the network, for example with quantum machine learning. This presumes cooperative collaboration. Without precautions in the Netherlands, and perhaps across Europe, the document expects a winner-takes-all outcome: the provider with the most data becomes the largest and can offer the best services of this kind.

**Encryption.** Like government and finance, telecom providers will have to act over the next few years so that networks and equipment are quantum-secure a decade later. The encryption methods in use must be ones quantum computers cannot crack.

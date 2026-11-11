# Quantum technology in brief

Appendix 1, booklet pp. 89–99. The chapter’s main external source is *The impact of quantum* (Birch, July 2021), commissioned by Quantum Delta Nederland and InnovationQuarter Zuid-Holland.

The EQTA’s recurring question is how far along the technology is. Applications differ widely in maturity, so the document uses Technology Readiness Levels and then describes what the technology can do. It deliberately does not teach the physics.

## Technology readiness

TRL is NASA’s scale for maturity and is now widely used. The prose definition in the EQTA:

- TRL 1, the lowest: only the basic principle the application uses has been observed.
- One or two levels higher, feasibility is also examined.
- From level 4, the technology is actually developed.
- At levels 5 and 6 it is also demonstrated.
- From level 6 through 9, systems and subsystems are developed as well.
- TRL 9, the highest: the system has been tested and is ready to be implemented.

Figure 07 draws the ladder. Its labels are a graphic and do not spell out all nine levels in sentences. Use the prose scale above, and the specific levels the document assigns in the telecom examples: atomic clocks at TRL 6, gravity sensors at TRL 4, a new generation of antennas at TRL 1.

## What it is, and what the EQTA refuses to explain

Quantum technology rests on quantum mechanics: the laws that describe the behavior of particles at the scale of atoms, photons, electrons, and molecules. Decades of technical development, especially recent years, have made it increasingly possible not only to measure that behavior but to influence it on purpose. Being able to measure, control, and direct it is what produces the new applications, and it is why the EQTA was written.

The phenomena puzzled scientists for centuries. The laws describe them so they can be predicted. The document takes the 1927 Solvay Conference as the milestone for the first complete description by physicists, almost a century before the report.

A distinction the text insists on: describing, predicting, and even manipulating the smallest particles is not the same as understanding the behavior. Words such as entanglement and superposition are concepts for description and prediction. They are compared to the law of gravity, which says nothing about the mechanism of gravity and still lets us describe and predict how objects move. Once applications are familiar, the document expects that only scientists will still ask why.

Everyday verbal explanations are treated as a source of misunderstanding and of mystification. The phrases it sets aside: particles “in two places at once,” particles that “acquire properties only when observed,” and one entangled particle “communicating” with the other “faster than light.” The chapter refuses that kind of explanation. Most people also cannot explain how a phone builds complex functions out of the values 0 and 1, and that does not stop them using it. The EQTA therefore stays with functionality and limitations, not with an account of the laws.

## Three kinds of application, plus one society-wide issue

Measuring, controlling, and directing quantum particles leads to three kinds of application: quantum sensors, quantum networks, and quantum computers. Quantum-secure encryption is discussed separately because it affects the whole of society, whether or not an organization adopts quantum technology.

### Quantum sensors

A new generation of sensors can be very precise, robust, and perhaps more affordable. They can measure time, motion, acceleration, dimension, gravity, current, and voltage.

Using them lets organizations do things that are new, different, or better. That requires changes inside organizations and new collaborations between them. Measuring many properties quickly, easily, and very accurately also raises ethical and legal questions: what is desirable, what is necessary, and what safeguards are needed. The rest of the EQTA is the tool for those questions.

The size of the impact is hard to estimate, both for professional equipment and, if the sensors become cheap, for widespread use in electronics. The document expects professional equipment in healthcare, logistics, construction, and telecom. Examples of what that could mean:

- higher-resolution MRI;
- a better picture of the subsurface from very small differences in gravity;
- more accurate motion and acceleration, so objects can be located in space much more precisely, including without GPS;
- more accurate and energy-efficient lasers, because small numbers of reflected light particles can be registered, with consequences for recognizing properties of liquids and materials faster and more cheaply;
- more precise time, and therefore noticeably faster applications: GPS many times more accurate, faster clock pulses, faster execution inside processors, faster exchange inside computers, phones, and other devices;
- better synchronization and therefore faster exchange on wired and wireless telecom networks;
- possibly still smaller chips;
- possibly a new generation of sensitive antennas that are technically much simpler and more robust.

Timeline in the document: development is moving very quickly. Some applications, such as quantum clocks, are already coming to market. Many sensors that measure other properties are still in laboratories. The citation is Roland Ortt, *De Technologie-monitor 2020 Quantumtechnologie* (Stichting Toekomstbeeld der Techniek, The Hague, 2020).

### Quantum networks

Over the next few decades, new security and communication functions will be added to networks that already exist, over fiber, through the air, or by satellite. The aim is more secure exchange of highly confidential information. The current focus is confidential exchange of encryption keys: quantum key distribution.

Quantum networks also offer authentication and authorization: greater certainty about the identity of sender and receiver and of the machines they use.

Confidential transport and stronger identity are not, by themselves, enough to keep an exchange confidential. Quantum technology adds newer, more robust measures inside a set of measures that is already complex.

Eventually, quantum communications can connect quantum computers into a larger computer and enable distributed quantum computing.

Timeline in the document: secure-exchange applications, meaning quantum key distribution, will come to market in the next few years or are at an experimental stage, TRL 4 to 6. Standardization of secure key exchange is at an advanced stage. Linking the processors of quantum computers over networks will take longer.

### Quantum computers

The promise is that a number of specific problems can be solved much faster than on classical computers. Four kinds of application are commonly identified.

**Simulating atoms.** Simulating even the simplest atoms quickly becomes too complex for current computers. Quantum computers could simulate molecules and atoms, for drug and material development and for chemical and biological processes.

**Solving particular problems faster.** Optimization problems with many possible solutions, each of which must be computed: traffic, logistics, finance, and healthcare are the examples. Searching large unstructured data sets may also be faster.

**Breaking encryption of digital communications.** Common encryption algorithms draw their strength from computational problems that cannot be solved efficiently without the key. Some of those problems will be solvable by quantum computers. A number of the encryption and authentication algorithms in common use will then no longer be secure.

**Machine learning.** In AI, machine learning will benefit. The citation is Neumann, Phillipson, and Versluis, “Machine learning in the quantum era,” *Digitale Welt* (2019).

Timeline, tied to figure 08, source Birch (2021). The figure is illustrative. Its headline claim is that more than 10,000 qubits are needed for simple applications. The axis runs from 1998 through 2001, 2019, 2020, and 2023 toward beyond 2030, with qubit counts from the single digits up through 53, 65, 100, and 1,121 toward 10,000 and 1,000,000. Callouts name IBM factoring on a 7-qubit computer, Google’s supremacy claim on Sycamore, IBM Hummingbird, and IBM’s roadmap goal Condor. The layout is a chart, so this bank does not assign a qubit count to a year beyond those labels.

The accompanying prose: small quantum computers are available for experiments and for learning their behavior. Major breakthroughs are still required before serious applications are viable, in computing power and in basics such as quantum memory and data storage. The electronics that drive and embed a quantum computer are still in development. Algorithms and software are being worked on worldwide.

That picture is immediately qualified. A quantum computer can also be used heuristically: a practical way to reach a result quickly without computing every solution through. That kind of application is more likely to be within reach.

### Quantum-secure encryption

Even though the document expects at least a decade before quantum computers are fit for purpose, society should anticipate them now. They have been shown to be able to break encryption methods in common use. Quantum computing power is not needed to use quantum-secure encryption. The weaknesses can be fixed without quantum computers.

Information that must stay confidential for longer than ten years therefore has to be quantum-securely encrypted now. Machines with a lifespan over ten years already have to carry quantum-secure methods. The examples are ATMs, bridges and locks in public space, and archives.

NIST’s standardization of quantum-secure public-key encryption is described as at the conceptual stage, with the methods entering services and products over the following years. That is the document’s 2023 statement. Later NIST publications are outside this bank.

The transition is a major concern. Some organizations expect to have to work with others in their sector. Around ATMs, public-space equipment, and archives, best practices and guidelines need to be set quickly. Other organizations need to encrypt in a form that can be securely re-encrypted when the time comes. Knowledge and resources will not be available in every organization, so much of this requires closer collaboration.

The same point returns in the government, banking, and telecom examples in [06-examples.md](06-examples.md): store now, decrypt later; long-lived equipment; migration plans; international standards.

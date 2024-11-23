<?php
    /*
    Concept: High-level modules should not depend on low-level modules. Both should depend on abstractions. 
    Also, abstractions should not depend on details; details should depend on abstractions.

    Real-World Analogy: Like using a standard power socket in your home – it doesn’t need to know what type of 
    device will be plugged in (the high-level policy). The devices (low-level modules) are designed to fit the socket.

    In Practice: A class should receive its dependencies from the outside rather than creating them itself. 
    This can be achieved using interfaces or abstract classes, making the code more flexible and easier to test.

    Example: To follow the Dependency Inversion Principle, we should depend on abstractions rather than 
    concrete classes:
    */


    class ConexionBD{
        protected $adapter;


    }
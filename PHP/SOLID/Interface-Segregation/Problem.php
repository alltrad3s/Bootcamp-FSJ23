<?php
    /*
        Concept: Clients should not be forced to depend on interfaces they do not use.

        Real-World Analogy: It’s like having a universal remote control with so many buttons, 
        most of which you never use. Instead, you would prefer a simpler remote with only the buttons you need.

        In Practice: Instead of creating a large interface with many methods, create smaller, 
        more specific interfaces for each type of functionality (e.g., Switchable for turning on/off, Timer for setting a timer). This ensures that classes only implement the methods they actually need, making the code more modular and easier to maintain.

        Example: To follow the Interface Segregation Principle, we should create specific interfaces 
        for each type of functionality:

    */
    interface Ave{
        function comer();
        function dormir();
        function volar();
        function caminar();
    }

    class Torogoz implements Ave{
        function comer(){}
        function dormir(){}
        function volar(){}
        function caminar(){}
    }

    class Dodo implements Ave{
        function comer(){}
        function dormir(){}
        function volar(){
            return new Exception("No puedo volar");
        }
        function caminar(){}
    }

    class Pinguino implements Ave{
        function comer(){}
        function dormir(){}
        function volar(){
            return new Exception("No puedo volar");
        }
        function caminar(){}
        function nadar(){}
    }
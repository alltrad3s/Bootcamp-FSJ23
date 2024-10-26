<?php
    /* What is OOP?
    A way of coding
        Thinking on -> represent real life objects
        Molds -> classes that are going to be the molds of our objects
        Objects -> Are created/instanced through a class
    
    4 Pilars
        - Encapsulation -> Access modificators -> Limit access to attributes and methods
        - Data Abstraction -> GETTERS/SETTERS -> Provide the option to interact with attributes/methods
        - Inheritance -> Inherits child classes or subclasses to obtain methods or propertied from the parent class.
        - Polymorphism -> Using the same method we change the behavior of the subclasses
    */

    class Car {
        // What is a car? -> Features -> Properties/Attrivutes
        private $make;
        public $model;
        public $year;
        public $color;

        //A constructor is a reserved method to assign values to the properties when an object is created
        function __construct($makeParam, $modelParam, $yearParam, $colorParam)
        {
            $this->make = $makeParam;
            $this->model = $modelParam;
            $this->year = $yearParam;
            $this->color = $colorParam;
        }

        function getMake(){
            return $this->make;
        }

        function setMake($makeParam) {
            $this->make = $makeParam;
        }
    }

    //Instance of a class -> Create object
    $car = new Car("Chevrolet", "Suburban", 2024, "Black");

    //Change or set values to it's properties/attrivutes
    $car->setMake("Ford");

    print_r($car);

    //Inheritance
    class Motorcicle extends Car{
        private $tankCapacity;

        function __construct($makeParam, $modelParam, $yearParam, $colorParam,$tankCapacity)
        {
            //Inherits the parent contructor
            parent::__construct($makeParam, $modelParam, $yearParam, $colorParam);
            $this->tankCapacity = $tankCapacity;
        }

        //Reserved word to get attributes/methods from the parent
        function getMake() {
            return "Moto Make is " .parent::getMake();
        }

    }

    $moto = new Motorcicle("Suzuki","GSXR",2022,"Azul",20);
    print_r($moto);
    //Polimorfism using the methods from parent/child and having a different result
    print_r($moto->getMake()."\n");
    print_r($car->getMake()."\n");
?>
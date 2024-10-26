<?php

// Single line comments
/* 

Multi line comments

*/

//Variables
//Declare variables
    $variableName;

    $variableName = "Hola";

    $numero = 37;

    $decimalNumber = 35.1;

    $boolean = true;

// Print data
    echo $variableName;

    //Line jump
    echo "\n";

    print($numero);

// Operators
    $addition = 3 + 3;
    print($addition); 

// Concat
    $contactString = "Jorge " . "Diaz";
    print($contactString);

// Template Strings
    $nombre = "Jorge";
    echo "Hi, are you {$nombre}";

// Funciones
    function functionName(){
        echo "I am function";
    }

    functionName();

    function paramFunction($paramName){
        print($paramName);
    }

    paramFunction("Jorge");

    function funcReturn(){
        return "Hi";
    }

    funcReturn();

// Anonymous Functions
    $anonFunc = function(){
        echo "I am an anon function";
    };

    $anonFunc();

// Arrow functions
    $arrowFunction = fn($a, $b) => ($a 
    + $b);

    echo $arrowFunction(3,3);
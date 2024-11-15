<?php

    /*
        Concept: A class should have only one reason to change, 
        meaning it should have only one job or responsibility.

        Real-World Analogy: Like a chef in a restaurant, 
        who is responsible only for cooking and not for taking orders or serving food.

        In Practice: If you have a class called OrderProcessor, 
        it should only process orders, not handle database storage or error logging.
    */

    class MenuTienda{
        function mostrarLista(){}
        function agregarOpcionMenu(){}
        function agregarProductoCarrito(){}
        function eliminarOpcionMenu(){}
        function pagarCarrito(){}

        function logIn(){}
        function logOut(){}
    }
<?php 

    //Arrays

    //
    //Declaracion de array
    //
    $arraycito = [];

    //Metodos de Array

    //
    //Ingresar un dato al final del array
    //
    array_push($arraycito,3);
    array_push($arraycito,5);

    print_r($arraycito);

    //
    //Eliminar el ultimo dato de un array
    //
    array_pop($arraycito);
    print_r($arraycito);

    //
    //Ingresar un dato al inicio de un array
    //
    array_unshift($arraycito,4);
    print_r($arraycito);
    
    //
    //Eliminar el primer dato de un array
    array_shift($arraycito);
    //
    print_r($arraycito);

    //
    //Array_unique obtener 2 arrays, genera un array unico sin datos repetidos
    //
    //Array Function method
    $input = array("a" => "green", "red", "b" => "green", "blue", "red");
    $result = array_unique($input);
    print_r($result);

    //Manual Method
    function array_unique_manual($array1, $array2) {
        // Concatenamos los dos arrays
        $combinedArray = array_merge($array1, $array2);
        
        // Creamos un nuevo array para almacenar los elementos únicos
        $uniqueArray = array();
        
        // Iteramos sobre el array combinado
        foreach ($combinedArray as $item) {
            $isDuplicate = false;
            
            // Comprobamos si el elemento ya existe en $uniqueArray
            foreach ($uniqueArray as $uniqueItem) {
                if ($item === $uniqueItem) {
                    $isDuplicate = true;
                    break;
                }
            }
            
            // Si no es un duplicado, lo añadimos a $uniqueArray
            if (!$isDuplicate) {
                $uniqueArray[] = $item;
            }
        }
        
        return $uniqueArray;
    }
    
    // Ejemplo de uso
    $array1 = array(1, 2, 3, 4, 5);
    $array2 = array(4, 5, 6, 7, 8);
    $resultado = array_unique_manual($array1, $array2);
    print_r($resultado);

    //
    //Array_merge obtener 2 arrays, genera un array con  datos repetidos
    //
    function array_merge_manual($array1, $array2) {
        for ($i = 0; $i < count($array2); $i++) $array1[] = $array2[$i];
        return $array1;
    }
    
    // Ejemplo de uso
    $resultado = array_merge_manual([1, 2, 3], [3, 4, 5]);
    print_r($resultado);

    //
    //  // Con spread operator
    //
    function array_merge_spread($array1, $array2) {
        return [...$array1, ...$array2];
    }
    
    // Ejemplo de uso
    $resultado = array_merge_spread([1, 2, 3], [3, 4, 5]);
    print_r($resultado);

    //
    //Array_reduce reduce todo el array a un solo dato sumando todos los valores
    //
    function array_reduce_manual($array) {
        $result = 0;
        for ($i = 0; $i < count($array); $i++) {
            $result += $array[$i];
        }
        return $result;
    }
    
    // Ejemplo de uso
    $numeros = [1, 2, 3, 4, 5];
    $suma = array_reduce_manual($numeros);
    echo "La suma de los elementos del array es: " . $suma;

    //
    //Array_search Busca un dato en especifico en el array
    //
    function array_search_manual($needle, $haystack) {
        for ($i = 0; $i < count($haystack); $i++) {
            if ($haystack[$i] === $needle) {
                return $i;
            }
        }
        return false;
    }
    
    // Ejemplo de uso
    $frutas = ['manzana', 'banana', 'naranja', 'uva', 'pera'];
    $buscar = 'naranja';
    $resultado = array_search_manual($buscar, $frutas);
    
    if ($resultado !== false) {
        echo "'{$buscar}' se encontró en el índice: {$resultado}";
    } else {
        echo "'{$buscar}' no se encontró en el array";
    }

    //
    //Array_slice Corta un array tomando como refencia una posicion
    //
    function array_slice_manual($array, $offset, $length = null) {
        $result = [];
        $size = count($array);
        
        // Ajustar offset negativo
        if ($offset < 0) {
            $offset = max(0, $size + $offset);
        }
        
        // Determinar el índice final
        $end = ($length === null) ? $size : $offset + $length;
        $end = min($end, $size);
        
        // Copiar elementos al nuevo array
        for ($i = $offset; $i < $end; $i++) {
            $result[] = $array[$i];
        }
        
        return $result;
    }
    
    // Ejemplo de uso
    $frutas = ['manzana', 'banana', 'naranja', 'uva', 'pera', 'melocotón'];
    $resultado = array_slice_manual($frutas, 2, 3);
    print_r($resultado);
    
    // Ejemplo con offset negativo
    $resultado2 = array_slice_manual($frutas, -3);
    print_r($resultado2);

    //
    //Array_reverse Da vuelta los valores de un array
    //
    function array_reverse_manual_improved($array) {
        $reversed = [];
        $keys = array_keys($array);
        for ($i = count($keys) - 1; $i >= 0; $i--) {
            $key = $keys[$i];
            $reversed[$key] = $array[$key];
        }
        return $reversed;
    }
    
    // Ejemplo de uso con array indexado numéricamente
    $numeros = [1, 2, 3, 4, 5];
    $invertidoNumeros = array_reverse_manual_improved($numeros);
    echo "Array numérico invertido:\n";
    print_r($invertidoNumeros);
    
    // Ejemplo con array asociativo
    $frutas = [
        'a' => 'manzana',
        'b' => 'banana',
        'c' => 'naranja'
    ];
    $frutasInvertidas = array_reverse_manual_improved($frutas);
    echo "\nArray asociativo invertido:\n";
    print_r($frutasInvertidas);
    
    // Ejemplo con array vacío
    $vacio = [];
    $invertidoVacio = array_reverse_manual_improved($vacio);
    echo "\nArray vacío invertido:\n";
    print_r($invertidoVacio);

    //
    //Array_map Recorre el array y ejecuta una funcion por cada posicion
    //
    function array_map_manual($callback, $array) {
        $result = [];
        for ($i = 0; $i < count($array); $i++) {
            $result[] = $callback($array[$i]);
        }
        return $result;
    }
    
    // Función de ejemplo para duplicar un número
    function duplicar($n) {
        return $n * 2;
    }
    
    // Ejemplo de uso con una función nombrada
    $numeros = [1, 2, 3, 4, 5];
    $duplicados = array_map_manual('duplicar', $numeros);
    echo "Números duplicados:\n";
    print_r($duplicados);
    
    // Ejemplo de uso con una función anónima
    $cuadrados = array_map_manual(function($n) {
        return $n * $n;
    }, $numeros);
    echo "\nNúmeros al cuadrado:\n";
    print_r($cuadrados);
    
    // Ejemplo con un array de strings
    $nombres = ['alice', 'bob', 'charlie'];
    $nombresMayusculas = array_map_manual(function($nombre) {
        return strtoupper($nombre);
    }, $nombres);
    echo "\nNombres en mayúsculas:\n";
    print_r($nombresMayusculas);
?>
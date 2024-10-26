<?php

// Que es un algoritmo?
// Una serie de instrucciones ordenadas para resolver un problema.

// 10 -> Pasos para agarrar el celular
/*
1 - Ubicarlo
2 - Confirmar si esta cerca
3 - Proceder a acercarse
4 - externder el brazo
5 - Abrir la mano 
6 - Sujetarlo
7 - Contraer el brazo
8 - Verificar la pantall
9 - Desbloquearlo
10 - Realizar subproceso (Verificar el telefono o aplicacion)
*/

// BubbleSort -> Ordenamiento Tipo Burbuja
function bubbleSort($array) {

    $length = count($array);

    if($length <= 1) return "No puedo ordernar";

    for($i = 0; $i < $length; $i++) {//Recorre el array en su totalidad -> I
        
        print("Soy I y estoy en {$array[$i]} \n");//Imprime array

        for($j = 0; $j < $length - 1; $j++){// Recorre el array en su totalidad -> J
            print("Soy J y estoy en dato {$array[$j]} \n");
            print("Soy J y el dato siguiente es {$array[$j + 1]} \n");

            if($array[$j] < $array[$j+1]){ // El < ordena de mayor a menor, si lo cambiamos por > ordena de menor a mayor
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j+1] = $temp;
            }
        }
    }
    return $array;
}

print_r(bubbleSort([1,2,3]));

//Insertion Sort
function insertionSort($array){

    if(count($array) <= 1) return "No puedo ordenar algo tan pequeño";

    for($i = 1; $i<count($array); $i++){ 
        //print("Este es el dato de I = {$array[$i]} \n");
        //print("Este es el dato de J = {$array[$i-1]} \n");
        $key = $array[$i];
        $j = $i - 1 ;

        while($j >= 0 && $array[$j]>$key){
            $array[$j+1] = $array[$j];
            $j--;
        }     
        $array[$j+1] = $key;
    }
    return $array;
}

print_r(insertionSort([4,3,2,1,-1,-3]));
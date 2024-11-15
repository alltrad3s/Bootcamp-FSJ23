<?php
//Detectar duplicados en un array numerico
//Utilizando insertionSort o BulbbleSort

function bubbleSort($array){
    if (count($array) <= 1) return $array;

    for ($i = 0; $i < count($array); $i++){
        //print("Posicion i ={$array[$i]} \n");
        for($j = 0; $j < count($array)-1; $j++){
            //print("Posicion j ={$array[$j]} \n");
            //print("- Posicion Siguiente ={$array[$j + 1]} \n");

            if($array[$j] < $array[$j + 1]){
                $temp = $array[$j];
                $array[$j] = $array[$j+1];
                $array[$j+1] = $temp;
            }
        }
    }

    return $array;
}

print_r(bubbleSort([3,2,1,4]));

function duplicados($array){
    $arrayOrdenado = bubbleSort($array);

        for($j = 0; $j < count($arrayOrdenado)-1; $j++){
            if($arrayOrdenado[$j] == $arrayOrdenado[$j+1]){
                return("Existe Duplicado");
            }
            //print("{$arrayOrdenado[$j]} y la siguiente {$arrayOrdenado[$j+1]} \n");
        }
        return("No existen duplicados");
}

print(duplicados([4,3,4,1,2]));

?>
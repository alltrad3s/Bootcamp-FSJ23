<?php

// Listas Enlazadas
class Nodo {
    public $valor;
    public $siguiente;

    public function __construct($dato) {
        $this->valor = $dato;
        $this->siguiente = null;
        }
    }

    $nodito = new Nodo(3);
    //print_r($nodito);

    class ListaEnlazada {
        public $cabeza;

        function __construct()
        {
            $this->cabeza = null;
        }

        function agregarNodo($dato){
            $nuevoNodo = new Nodo($dato);

            if($this->cabeza===null){
                $this->cabeza = $nuevoNodo;
                return $nuevoNodo;
            }else{
                $nodoActual = $this->cabeza;

                while($nodoActual->siguiente != null){
                    $nodoActual = $nodoActual->siguiente;
                }

                $nodoActual->siguiente = $nuevoNodo;
                return $nuevoNodo;
            }
        }
    }

    $listita = new ListaEnlazada(1);
    $listita->agregarNodo(3);
    $listita->agregarNodo(5);
    $listita->agregarNodo(10);
    $listita->agregarNodo(15);
    print_r($listita);


// Arbol binario
// Clase que representa un nodo en el árbol binario
class Node {
    public $value;   // Valor almacenado en el nodo
    public $left;    // Puntero al nodo hijo izquierdo
    public $right;   // Puntero al nodo hijo derecho

    // Constructor que inicializa el nodo con un valor
    function __construct($data) {
        $this->value = $data;
        $this->left = null;    // Inicialmente, el hijo izquierdo es null
        $this->right = null;   // Inicialmente, el hijo derecho es null
    }
}

// Clase que representa el árbol binario
class BinaryTree {
    public $root;   // Nodo raíz del árbol

    // Constructor que inicializa el árbol como vacío
    function __construct() {
        $this->root = null;   // Inicialmente, el árbol está vacío (sin raíz)
    }

    // Función para insertar un nuevo nodo en el árbol
    function insert($data) {
        // Verificación de que el dato sea numérico
        if (!is_numeric($data)) return "Necesitamos un dato numérico";

        // Creación de un nuevo nodo con el valor proporcionado
        $newNode = new Node($data);

        // Si el árbol está vacío, el nuevo nodo se convierte en la raíz
        if ($this->root === null) {
            $this->root = $newNode;
            return $newNode; // Termina la función después de insertar la raíz
        }

        // Variable temporal para recorrer el árbol desde la raíz
        $currentNode = $this->root;

        // Bucle para encontrar la posición correcta donde insertar el nuevo nodo
        while (true) {
            // Si el valor ya existe, no se permite la inserción de duplicados
            if ($data === $currentNode->value) {
                return "Valor duplicado no permitido";
            }

            // Verificar si el valor del nuevo nodo es menor al nodo actual
            if ($newNode->value < $currentNode->value) {
                // Si el hijo izquierdo está vacío, insertar aquí
                if ($currentNode->left === null) {
                    $currentNode->left = $newNode;
                    return $newNode; // Termina la función después de insertar el nodo
                }
                // Avanza al siguiente nodo a la izquierda
                $currentNode = $currentNode->left;
            } else {
                // Si el hijo derecho está vacío, insertar aquí
                if ($currentNode->right === null) {
                    $currentNode->right = $newNode;
                    return $newNode; // Termina la función después de insertar el nodo
                }
                // Avanza al siguiente nodo a la derecha
                $currentNode = $currentNode->right;
            }
        }
    }
}

// Creación de un nuevo árbol binario
$arbolito = new BinaryTree();
$arbolito->insert(5);    // Inserta el valor 5 como raíz del árbol
$arbolito->insert(10);   // Inserta el valor 10 en la posición correcta
$arbolito->insert(3);    // Inserta el valor 3 en la posición correcta
$arbolito->insert(15);   // Inserta el valor 15 en la posición correcta
$arbolito->insert(1);    // Inserta el valor 1 en la posición correcta
$arbolito->insert(4);    // Inserta el valor 4 en la posición correcta
$arbolito->insert(10);   // Intento de insertar un valor duplicado (10)

print_r($arbolito); // Muestra la estructura del árbol binario en la consola
<?php
/*
Esta implementación en PHP ilustra el principio de sustitución de Liskov (LSP), que establece que las clases derivadas deben ser reemplazables por sus clases base sin alterar la funcionalidad del programa.

Desglose del código:
Clase abstracta Persona:

Representa una entidad genérica que tiene métodos comunes (comer, dormir, correr, trabajar) que todas las subclases pueden heredar.
Define un método abstracto getDui, lo que significa que cualquier clase derivada debe implementar este método, pero no define cómo funciona en la clase base.
Clase Adulto:

Extiende la clase Persona.
Implementa el método getDui, aunque está vacío en este ejemplo. En una implementación real, este método devolvería el número de DUI (Documento Único de Identidad) del adulto.
Clase Bebe:

También extiende Persona, pero un bebé no puede tener un DUI directamente.
Para resolver esto, se incluye una dependencia hacia un objeto Adulto mediante el constructor.
Cuando se llama al método getDui en la clase Bebe, en realidad se utiliza el método getDui de su tutor (un objeto Adulto asociado).
Constructor de Bebe:

Recibe un objeto Adulto como tutor y lo almacena en la propiedad $tutor.
Esto establece la relación entre un bebé y su tutor.
Principio de sustitución de Liskov:
El código sigue el principio de Liskov porque:

Intercambiabilidad:

Tanto Adulto como Bebe pueden ser utilizados donde se espera un objeto de tipo Persona, ya que ambos implementan el método abstracto getDui.
Aunque Bebe delega la obtención del DUI al tutor, sigue cumpliendo el contrato definido por la clase base Persona.
Compatibilidad de comportamiento:

El método getDui funciona de manera coherente con la idea de un "DUI", independientemente de si el objeto es un Adulto o un Bebe.
Ejemplo práctico:
php
Copiar código
$adulto = new Adulto();
$bebe = new Bebe($adulto);

// Llamadas a métodos de Persona, que son polimórficos
echo $adulto->getDui(); // Implementado en la clase Adulto
echo $bebe->getDui();   // Delegado al tutor (Adulto)
Beneficios de esta implementación:
Flexibilidad:

Permite tratar a Adulto y Bebe como tipos de Persona, lo que facilita la extensibilidad del sistema.
Reutilización:

La lógica para manejar el DUI de un bebé se deriva de su tutor, evitando duplicación de lógica en las subclases.
Cumplimiento de LSP:

Las clases derivadas (Adulto y Bebe) respetan el contrato definido por la clase base Persona
asegurando que pueden ser usadas de manera intercambiable sin introducir errores en el sistema.
*/
abstract class Persona{
    function comer(){}

    function dormir(){}

    function correr(){}

    function trabajar(){}

    abstract function getDui();
}

class Adulto extends Persona{
    function getDui(){
        
    }
}

class Bebe extends Persona{
    public $tutor;

    function __construct(Adulto $tutorParam)
    {
        $this->tutor = $tutorParam;
    }

    function getDui()
    {
        return $this->tutor->getDui();
    }
}


// Ejemplo en linea
// Clase base Bird
class Bird {
    // Método común para el movimiento de los pájaros
    public function move() {
        return "Moving";
    }
}

// Clase Sparrow que extiende la clase Bird
class Sparrow extends Bird {
    // Método sobrescrito para el movimiento específico de un gorrión
    public function move() {
        return "Flying";
    }
}

// Clase Penguin que extiende la clase Bird
class Penguin extends Bird {
    // Método sobrescrito para el movimiento específico de un pingüino
    public function move() {
        return "Swimming";
    }
}

// Ejemplo de uso
$birds = [new Sparrow(), new Penguin()];
foreach ($birds as $bird) {
    echo $bird->move() . "\n"; // Llamada al método move de cada objeto
}
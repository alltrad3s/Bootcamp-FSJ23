console.log("/***************************/");
console.log("/*       EJERCICIO 1       */");
console.log("/***************************/");
// Esta clase demuestra un buen diseño al encapsular las propiedades y métodos relacionados con la cabecera de una página
class CabeceraPagina {
    // Las propiedades son privadas, lo que demuestra encapsulación
    private titulo: string;
    private color: string;
    private fuente: string;
    private alineacion: 'centrado' | 'derecha' | 'izquierda';
  
    // Métodos con nombres descriptivos y que realizan una única tarea
    obtenerPropiedades(titulo: string, color: string, fuente: string): void {
      this.titulo = titulo;
      this.color = color;
      this.fuente = fuente;
    }
  
    establecerAlineacion(alineacion: 'centrado' | 'derecha' | 'izquierda'): void {
      this.alineacion = alineacion;
    }
  
    // El método imprime correctamente todas las propiedades como se solicitó
    imprimirPropiedades(): void {
      console.log(`Título: ${this.titulo}`);
      console.log(`Color: ${this.color}`);
      console.log(`Fuente: ${this.fuente}`);
      console.log(`Alineación: ${this.alineacion}`);
    }
  }
  
  // Ejemplo de uso
  const cabecera = new CabeceraPagina();
  cabecera.obtenerPropiedades('Mi Página', 'azul', 'Arial');
  cabecera.establecerAlineacion('centrado');
  cabecera.imprimirPropiedades();

console.log("/***************************/");
console.log("/*       EJERCICIO 2       */");
console.log("/***************************/");
// Esta clase demuestra un buen diseño al agrupar operaciones matemáticas relacionadas
class Calculadora {
  // Cada método abstrae una operación matemática compleja en una interfaz simple

  // Métodos con nombres descriptivos y que realizan una única tarea
  sumar(a: number, b: number): number {
    return a + b;
  }

  restar(a: number, b: number): number {
    return a - b;
  }

  multiplicar(a: number, b: number): number {
    return a * b;
  }

  // Manejo de errores para casos especiales como la división por cero
  dividir(a: number, b: number): number {
    if (b === 0) {
      throw new Error("No se puede dividir por cero");
    }
    return a / b;
  }

  potencia(base: number, exponente: number): number {
    return Math.pow(base, exponente);
  }

  // Uso de recursividad para el cálculo del factorial
  factorial(n: number): number {
    if (n < 0) {
      throw new Error("No se puede calcular el factorial de un número negativo");
    }
    if (n === 0 || n === 1) {
      return 1;
    }
    return n * this.factorial(n - 1);
  }
}

// Ejemplo de uso
const calc = new Calculadora();
console.log(calc.sumar(5, 3));
console.log(calc.factorial(5));

console.log("/***************************/");
console.log("/*       EJERCICIO 3       */");
console.log("/***************************/");
// Esta clase demuestra un buen diseño al representar una canción con sus propiedades y métodos relevantes
class Cancion {
  // El atributo autor es privado y se accede a través de getters y setters
  private _autor: string;

  // Constructor que inicializa las propiedades principales
  constructor(public titulo: string, public genero: string) {
    this._autor = "";
  }

  // Implementación correcta de getters y setters
  get autor(): string {
    return this._autor;
  }

  set autor(value: string) {
    this._autor = value;
  }

  // Método para mostrar los datos de la canción
  mostrarDatos(): void {
    console.log(`Título: ${this.titulo}`);
    console.log(`Género: ${this.genero}`);
    console.log(`Autor: ${this._autor}`);
  }
}

// Ejemplo de uso
const miCancion = new Cancion("Bohemian Rhapsody", "Rock");
miCancion.autor = "Queen";
miCancion.mostrarDatos();

console.log("/***************************/");
console.log("/*       EJERCICIO 4       */");
console.log("/***************************/");
// Esta clase representa una cuenta bancaria con propiedades y métodos relevantes
class Cuenta {
  // La propiedad cantidad es privada para proteger el saldo de la cuenta
  constructor(
    public nombre: string,
    private cantidad: number,
    public tipoCuenta: string,
    public numeroCuenta: string
  ) {}

  // Métodos con nombres descriptivos y validaciones adecuadas
  depositar(valor: number): void {
    if (valor < 5) {
      console.log("El valor a depositar debe ser mayor a $5.00");
    } else {
      this.cantidad += valor;
      console.log(`Se ha depositado correctamente $${valor}`);
    }
  }

  // Manejo correcto de las condiciones de retiro y actualización del saldo
  retirar(valor: number): void {
    if (this.cantidad < 5 || valor > this.cantidad) {
      console.log("No hay suficiente efectivo en la cuenta");
    } else if (valor < 5) {
      console.log("El valor a retirar debe ser mayor a $5.00");
    } else {
      this.cantidad -= valor;
      console.log(`Ha retirado $${valor}. Su nuevo saldo es $${this.cantidad}`);
    }
  }

  mostrarDatos(): void {
    console.log(`Nombre: ${this.nombre}`);
    console.log(`Tipo de cuenta: ${this.tipoCuenta}`);
    console.log(`Número de cuenta: ${this.numeroCuenta}`);
  }
}

// Ejemplo de uso
const miCuenta = new Cuenta("Juan Pérez", 1000, "Ahorro", "123456789");
miCuenta.mostrarDatos();
miCuenta.depositar(50);
miCuenta.retirar(200);

console.log("/***************************/");
console.log("/*       EJERCICIO 5       */");
console.log("/***************************/");
// Diseño de una clase abstracta Persona y una clase Empleado que hereda de ella
// Persona es una clase abstracta que define la estructura básica
abstract class Persona {
  constructor(
    protected nombre: string,
    protected apellido: string,
    protected direccion: string,
    protected telefono: string,
    protected edad: number
  ) {}

  // Método concreto en la clase abstracta
  verificarMayoriaEdad(): void {
    if (this.edad >= 18) {
      console.log(`${this.nombre} es mayor de edad`);
    } else {
      console.log(`${this.nombre} es menor de edad`);
    }
  }

  // Método abstracto que debe ser implementado por las clases hijas
  abstract mostrarDatosPersonales(): void;
}

// Empleado hereda de Persona
class Empleado extends Persona {
  private sueldo: number = 0;

  // Métodos específicos para la clase Empleado
  cargarSueldo(sueldo: number): void {
    this.sueldo = sueldo;
  }

  imprimirSueldo(): void {
    console.log(`Sueldo: $${this.sueldo}`);
  }

  // Implementación del método abstracto de la clase padre
  mostrarDatosPersonales(): void {
    console.log(`Nombre: ${this.nombre}`);
    console.log(`Apellido: ${this.apellido}`);
    console.log(`Dirección: ${this.direccion}`);
    console.log(`Teléfono: ${this.telefono}`);
    console.log(`Edad: ${this.edad}`);
    this.imprimirSueldo();
  }
}

// Ejemplo de uso
const empleado = new Empleado("Beto", "Ulloa", "La Libertad, El Salvador", "12345678", 37);
empleado.cargarSueldo(2000);
empleado.verificarMayoriaEdad();
empleado.mostrarDatosPersonales();
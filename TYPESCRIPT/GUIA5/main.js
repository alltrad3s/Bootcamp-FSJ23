var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (Object.prototype.hasOwnProperty.call(b, p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        if (typeof b !== "function" && b !== null)
            throw new TypeError("Class extends value " + String(b) + " is not a constructor or null");
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
console.log("/***************************/");
console.log("/*       EJERCICIO 1       */");
console.log("/***************************/");
// Esta clase demuestra un buen diseño al encapsular las propiedades y métodos relacionados con la cabecera de una página
var CabeceraPagina = /** @class */ (function () {
    function CabeceraPagina() {
    }
    // Métodos con nombres descriptivos y que realizan una única tarea
    CabeceraPagina.prototype.obtenerPropiedades = function (titulo, color, fuente) {
        this.titulo = titulo;
        this.color = color;
        this.fuente = fuente;
    };
    CabeceraPagina.prototype.establecerAlineacion = function (alineacion) {
        this.alineacion = alineacion;
    };
    // El método imprime correctamente todas las propiedades como se solicitó
    CabeceraPagina.prototype.imprimirPropiedades = function () {
        console.log("T\u00EDtulo: ".concat(this.titulo));
        console.log("Color: ".concat(this.color));
        console.log("Fuente: ".concat(this.fuente));
        console.log("Alineaci\u00F3n: ".concat(this.alineacion));
    };
    return CabeceraPagina;
}());
// Ejemplo de uso
var cabecera = new CabeceraPagina();
cabecera.obtenerPropiedades('Mi Página', 'azul', 'Arial');
cabecera.establecerAlineacion('centrado');
cabecera.imprimirPropiedades();
console.log("/***************************/");
console.log("/*       EJERCICIO 2       */");
console.log("/***************************/");
// Esta clase demuestra un buen diseño al agrupar operaciones matemáticas relacionadas
var Calculadora = /** @class */ (function () {
    function Calculadora() {
    }
    // Cada método abstrae una operación matemática compleja en una interfaz simple
    // Métodos con nombres descriptivos y que realizan una única tarea
    Calculadora.prototype.sumar = function (a, b) {
        return a + b;
    };
    Calculadora.prototype.restar = function (a, b) {
        return a - b;
    };
    Calculadora.prototype.multiplicar = function (a, b) {
        return a * b;
    };
    // Manejo de errores para casos especiales como la división por cero
    Calculadora.prototype.dividir = function (a, b) {
        if (b === 0) {
            throw new Error("No se puede dividir por cero");
        }
        return a / b;
    };
    Calculadora.prototype.potencia = function (base, exponente) {
        return Math.pow(base, exponente);
    };
    // Uso de recursividad para el cálculo del factorial
    Calculadora.prototype.factorial = function (n) {
        if (n < 0) {
            throw new Error("No se puede calcular el factorial de un número negativo");
        }
        if (n === 0 || n === 1) {
            return 1;
        }
        return n * this.factorial(n - 1);
    };
    return Calculadora;
}());
// Ejemplo de uso
var calc = new Calculadora();
console.log(calc.sumar(5, 3));
console.log(calc.factorial(5));
console.log("/***************************/");
console.log("/*       EJERCICIO 3       */");
console.log("/***************************/");
// Esta clase demuestra un buen diseño al representar una canción con sus propiedades y métodos relevantes
var Cancion = /** @class */ (function () {
    // Constructor que inicializa las propiedades principales
    function Cancion(titulo, genero) {
        this.titulo = titulo;
        this.genero = genero;
        this._autor = "";
    }
    Object.defineProperty(Cancion.prototype, "autor", {
        // Implementación correcta de getters y setters
        get: function () {
            return this._autor;
        },
        set: function (value) {
            this._autor = value;
        },
        enumerable: false,
        configurable: true
    });
    // Método para mostrar los datos de la canción
    Cancion.prototype.mostrarDatos = function () {
        console.log("T\u00EDtulo: ".concat(this.titulo));
        console.log("G\u00E9nero: ".concat(this.genero));
        console.log("Autor: ".concat(this._autor));
    };
    return Cancion;
}());
// Ejemplo de uso
var miCancion = new Cancion("Bohemian Rhapsody", "Rock");
miCancion.autor = "Queen";
miCancion.mostrarDatos();
console.log("/***************************/");
console.log("/*       EJERCICIO 4       */");
console.log("/***************************/");
// Esta clase representa una cuenta bancaria con propiedades y métodos relevantes
var Cuenta = /** @class */ (function () {
    // La propiedad cantidad es privada para proteger el saldo de la cuenta
    function Cuenta(nombre, cantidad, tipoCuenta, numeroCuenta) {
        this.nombre = nombre;
        this.cantidad = cantidad;
        this.tipoCuenta = tipoCuenta;
        this.numeroCuenta = numeroCuenta;
    }
    // Métodos con nombres descriptivos y validaciones adecuadas
    Cuenta.prototype.depositar = function (valor) {
        if (valor < 5) {
            console.log("El valor a depositar debe ser mayor a $5.00");
        }
        else {
            this.cantidad += valor;
            console.log("Se ha depositado correctamente $".concat(valor));
        }
    };
    // Manejo correcto de las condiciones de retiro y actualización del saldo
    Cuenta.prototype.retirar = function (valor) {
        if (this.cantidad < 5 || valor > this.cantidad) {
            console.log("No hay suficiente efectivo en la cuenta");
        }
        else if (valor < 5) {
            console.log("El valor a retirar debe ser mayor a $5.00");
        }
        else {
            this.cantidad -= valor;
            console.log("Ha retirado $".concat(valor, ". Su nuevo saldo es $").concat(this.cantidad));
        }
    };
    Cuenta.prototype.mostrarDatos = function () {
        console.log("Nombre: ".concat(this.nombre));
        console.log("Tipo de cuenta: ".concat(this.tipoCuenta));
        console.log("N\u00FAmero de cuenta: ".concat(this.numeroCuenta));
    };
    return Cuenta;
}());
// Ejemplo de uso
var miCuenta = new Cuenta("Juan Pérez", 1000, "Ahorro", "123456789");
miCuenta.mostrarDatos();
miCuenta.depositar(50);
miCuenta.retirar(200);
console.log("/***************************/");
console.log("/*       EJERCICIO 5       */");
console.log("/***************************/");
// Diseño de una clase abstracta Persona y una clase Empleado que hereda de ella
// Persona es una clase abstracta que define la estructura básica
var Persona = /** @class */ (function () {
    function Persona(nombre, apellido, direccion, telefono, edad) {
        this.nombre = nombre;
        this.apellido = apellido;
        this.direccion = direccion;
        this.telefono = telefono;
        this.edad = edad;
    }
    // Método concreto en la clase abstracta
    Persona.prototype.verificarMayoriaEdad = function () {
        if (this.edad >= 18) {
            console.log("".concat(this.nombre, " es mayor de edad"));
        }
        else {
            console.log("".concat(this.nombre, " es menor de edad"));
        }
    };
    return Persona;
}());
// Empleado hereda de Persona
var Empleado = /** @class */ (function (_super) {
    __extends(Empleado, _super);
    function Empleado() {
        var _this = _super !== null && _super.apply(this, arguments) || this;
        _this.sueldo = 0;
        return _this;
    }
    // Métodos específicos para la clase Empleado
    Empleado.prototype.cargarSueldo = function (sueldo) {
        this.sueldo = sueldo;
    };
    Empleado.prototype.imprimirSueldo = function () {
        console.log("Sueldo: $".concat(this.sueldo));
    };
    // Implementación del método abstracto de la clase padre
    Empleado.prototype.mostrarDatosPersonales = function () {
        console.log("Nombre: ".concat(this.nombre));
        console.log("Apellido: ".concat(this.apellido));
        console.log("Direcci\u00F3n: ".concat(this.direccion));
        console.log("Tel\u00E9fono: ".concat(this.telefono));
        console.log("Edad: ".concat(this.edad));
        this.imprimirSueldo();
    };
    return Empleado;
}(Persona));
// Ejemplo de uso
var empleado = new Empleado("Beto", "Ulloa", "La Libertad, El Salvador", "12345678", 37);
empleado.cargarSueldo(2000);
empleado.verificarMayoriaEdad();
empleado.mostrarDatosPersonales();

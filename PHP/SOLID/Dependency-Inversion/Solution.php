<?php
interface IAdaptador{
    function conexion();
}

class ConexioBD{
    protected $adaptador;

    function __construct(IAdaptador $adaptadorParam)
    {
        $this->adaptador = $adaptadorParam;
    }

    function conectarBD(){
        $this->adaptador->conexion();
    }
}

class MySQL implements IAdaptador{
    function conexion()
    {
        //Forma de Conextar a MySQL
    }
}

class MongoDB implements IAdaptador{
    function conexion()
    {
        //Forma conectar a MySQL
    }
}
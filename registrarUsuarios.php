<?php

    include("BaseDatos.php");

    if(isset($_POST["botonEnvio"])){
        
        //1. Recibo datos del formulario
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $descripcion=$_POST["descripcion"];
        $genero=$_POST["genero"];

        //2. Crear un objeto(COPIA) de la clase BaseDatos
        $transaccion=new BaseDatos();

        //3.Construir una consulta SQL para insertar datos
        $consultaSQL="INSERT INTO usuarios(nombre) VALUES ('$nombre','$apellido','$descripcion','$genero')";
        
        //4. Utilizar el metodo agregarDatos() de la clase BaseDatos
        $transaccion->agregarDatos($consultaSQL);

    }




?>
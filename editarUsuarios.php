<?php

    include("BaseDatos.php");

    if(isset($_POST["botonEditar"])){

        //0.Recibir el id del registro a editar
        $id=$_GET["id"];

        //1.Recibir los datos
        $nombre=$_POST["nombreEditar"];
        $descripcion=$_POST["descripcionEditar"];

        //2. Crear una copia de la clase BaseDatos
        $transaccion= new BaseDatos();

        //3. Crear una consulta SQL para actualizar registros
        $consultaSQL="UPDATE usuarios SET nombre='$nombre',descripcion='$descripcion' WHERE idUsuario='$id'";

        //4. Ejecutar el metodo editarDatos de la clase BaseDatos
        $transaccion->editarDatos($consultaSQL);


    }







?>
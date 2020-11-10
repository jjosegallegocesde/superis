<?php 

    //1. Para usar una clase es incluir el archivo donde la clase fue programada
    include("Sopa.php");

    //2. Crear un objeto de la clase Sopa (Es lo mismo que decir Intancia de la clase Sopa)
    // TODO OBJETO ES UNA VARIABLE(Usted le pone el nombre que desee)
    $ajiaco= new Sopa();

    //3. ACCEDER A UN ATRIBUTO DE LA CLASE:
    $ajiaco->cantidadAgua="2Litros"; //asignar un valor a un atributo
    echo($ajiaco->cantidadAgua);

    //4. ACCDER A UN METODO DE LA CLASE
    $ajiaco->prepararSopa();








?>
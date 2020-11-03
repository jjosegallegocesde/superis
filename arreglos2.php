<?php 

   
    //Arreglo indexado
    $frutas=array("uvas","manzana","peras");
    print_r($frutas);
    echo("<br>");
    echo($frutas[0]);

    //Arreglos asociativos
    $frutasConNombreAsociados=array("producto1"=>"uvas","producto2"=>"manzana");
    echo("<br>");
    echo("<br>");
    print_r($frutasConNombreAsociados);
    echo("<br>");
    echo($frutasConNombreAsociados["producto1"]);

    //Ciclo FOR (repetir acciones y recoorer arreglos)
    echo("<br>");
    echo("<br>");
    for($i=0; $i<2; $i++){

        echo("frutas[".$i."]=");
        echo($frutas[$i]);
        echo("<br>");
    }

    //CICLO FOREACH
    echo("<br>");
    echo("<br>");
    foreach($frutasConNombreAsociados as $fruta){

        echo("HOLA MUNDO");
        echo("<br>");
        echo("..........");

    }

    
  





?>


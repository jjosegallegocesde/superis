<?php 

//ESCAPARATES=ARREGLOS=ARRAY=VECTORES=CAJONERAS

//arreglos indexados
$nombres=array("arroz","salchichas","azucar");
print_r($nombres);
echo("<br>");
echo($nombres[0]);

//arreglos asociativos
$nombresAsociativos=array("producto1"=>"arroz","producto2"=>"salchichas","producto3"=>"azucar");
echo("<br>");
echo("<br>");
print_r($nombresAsociativos);
echo("<br>");
echo($nombresAsociativos["producto1"]);
echo("<br>");
echo("<br>");

//Estructuras de control repetitivas
//Bucles-Loops

//CICLO FOR
for($centinela=0; $centinela<10; $centinela++){ 

    echo($centinela);
    echo("<br>");

}







?>
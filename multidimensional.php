<?php 

//arreglos de 1 sola dimension:

//arreglos indexados:
$nombres=array("arroz","salchichas","azucar","aceite");
$precios=array(1600,5000,2500,7000);
$marca=array("Diana","Zenú","Incauca","Premier");

//arreglos multidimensionales(matriz)(caja de cajas)
$productos=array(
    "producto1"=>array("nombre"=>"arroz","precio"=>1600,"marca"=>"Diana"),
    "producto2"=>array("nombre"=>"salchichas","precio"=>5000,"marca"=>"Zenú"),
    "producto3"=>array("nombre"=>"azucar","precio"=>2500,"marca"=>"incauca"),
    "producto4"=>array("nombre"=>"aceite","precio"=>7000,"marca"=>"Premier")
    
);

print_r($productos);
echo("<br>");
echo("<br>");


foreach($productos as $producto){

    print_r($producto["nombre"]);
    echo("<br>");

}



?>
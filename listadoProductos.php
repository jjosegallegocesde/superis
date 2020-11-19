<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

    <main>

        <?php 
            //consulta a la BD
            $productos=array(
                array("nombre"=>"arroz","precio"=>1600,"marca"=>"Diana","foto"=>"https://jumbocolombiafood.vteximg.com.br/arquivos/ids/3510549-750-750/7702511000991.jpg?v=637273105665030000"),
                array("nombre"=>"salchichas","precio"=>5000,"marca"=>"Zenú","foto"=>"https://jumbocolombiafood.vteximg.com.br/arquivos/ids/225648-1000-1000/7701101245903.jpg?v=636306142935430000"),
                array("nombre"=>"azucar","precio"=>2500,"marca"=>"incauca","foto"=>"https://jumbocolombiafood.vteximg.com.br/arquivos/ids/158589-1000-1000/7702059505026-1.jpg?v=636082723719600000"),
                array("nombre"=>"aceite","precio"=>7000,"marca"=>"Premier","foto"=>"https://metrocolombiafood.vteximg.com.br/arquivos/ids/227842-1000-1000/7701018073156.jpg?v=636858691475630000")  
            );
        ?>

        <div class="container">
        
            <div class="row row-cols-1 row-cols-md-3">

                <?php foreach($productos as $producto):?>

                    <div class="col mb-4">
                        <div class="card h-100">
                            <img src="<?php echo($producto["foto"]) ?>" class="card-img-top" alt="imagen">
                            <div class="card-body">
                                <h2 class="card-title"><?php echo($producto["nombre"]) ?></h2>
                                <h4 class="card-title"><?php echo($producto["marca"]) ?></h4>
                                <h4 class="card-title">$<?php echo($producto["precio"]) ?></h4>
                                <a href="" class="btn btn-info">Añadir</a>
                            </div>
                        </div>
                    </div>

                <?php endforeach?>

            </div>
        
        </div>
    
    
    </main>


 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>   
</body>
</html>
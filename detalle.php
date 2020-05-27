<?php
include'global/config.php';
include'global/conexion.php';
include'carrito.php';
include'templates/cabecera.php';

?>

 <!--IMG Header-->
     <title> Dusfont | Detalles</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

 <!--Estilos-->
    <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="css/stylesa.css">
    <link rel="stylesheet" href="font.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/aos.css">

    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css"> 
    <script src="https://kit.fontawesome.com/aeea908061.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</head>
<body>
  
   <!--Contenido-->
    <br>
    <br>
    <div class="container text-center">

    <div class="page-header">
        <h1><font color="#A21F43"><i class="fa fa-shopping-cart "></i></font> Detalle del producto</h1>
    </div>
    
  
    
</head>

<body>
<?php
$sentencia=$pdo->prepare("SELECT * FROM `tblproductos` WHERE ID=".$_GET['id']);
$sentencia->execute();
$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
//print_r($listaProductos);
?>
<?php foreach ($listaProductos as $producto) { ?>

    <div class="row">
    <div class="col-md-6">
    <div class="product-block">
        <img title="<?php echo $producto['Nombre'];?>"
alt="<?php echo $producto['Nombre'];?>"
class="card-img-top portafolio-img"
src="<?php echo $producto['Imagen'];?>"

height="370px">
    </div>
    </div>
    <div class="col-md-6">
        <font face="Raleway"  >
            <br>
            
            <font size="6.8px"color="#A21F43" face="Poiret One, cursive">
    <div class="product-block text-left" >
        <?php echo $producto['Nombre']?><hr></font>
        
        <font size="4px">
        <div class="product-info panel" >
           <?php echo $producto['Descripcion']?></font><br><br>
           <font size="3.5px">
        <div class="product-info panel" ><font color="#970707"><b>Peso:</b></font>
           <?php echo $producto['tipo']?><br>
        <div class="product-info panel" ><font color="#970707"><b>Forma:</b></font>

           <?php echo $producto['forma']?></font>
           <br>
           <br>
           <font color="#E72A38">
            <h3>$<?php echo $producto['Precio']?></h3>
            </font>
            <font size="1.8px"><p>Cada pieza puede presentar leves diferencias al tratarse de un artículo original artesanal.</p></font>
            <form action="" method="post">
    <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">
    <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY);?>">
    <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY);?>">
    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY);?>">



    <br>
            <p>
                <!-- Le puse carrito de compras en "href" porque se supone que ahí te debe mandar, tu le pones la dirección correcta -->
               
<button class="btn btn-danger btn-lg btn-block"
name="btnAccion"
value="Agregar"
type="submit" 
>
<i class="fa fa-cart-plus fa-2x"></i></button>
            </p>
            </form>
        </div>
        </div>
        </font>
        </div>
    </div><hr>

    
<?php } ?>
   
</div>
    <!--Fin de contenido-->
<br>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"  >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner " >
    <div class="carousel-item active">
      <img class="d-block " height="350px" width="100%"src="img/pg.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block " height="350px"width="100%"src="img/ol.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block "height="350px"width="100%" src="img/olll.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
    
<?php
include 'templates/pie.php';
?>

</div>
</div>
</section>
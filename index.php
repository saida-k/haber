<?php
include'global/config.php';
include'global/conexion.php';
include'carrito.php';
include'templates/cabecera.php';

?>

 <!--IMG Header-->
     <title> Dusfont | Inicio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

 <!--Estilos-->
 <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/lumen/bootstrap.min.css" rel="stylesheet" integrity="sha384-VMuWne6iwiifi8iEWNZMw8sDatgb6ntBpBIr67q0rZAyOQwfu/VKpnFntQrjxB5W" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">



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
    <!--Social bar-->
       <div class="g"> <div class="social-bar">
            <a href="https://www.facebook.com/Dusfont-103228351292051"class="icon icon-facebook" target="_blank"></a>
            <a href="https://www.facebook.com/Dusfont-103228351292051"class="icon icon-twitter" target="_blank"></a>
            <a href="https://www.facebook.com/Dusfont-103228351292051"class="icon icon-instagram" target="_blank"></a>
            <a href="mailto:dusfont.bisuteria@gmail.com"class="icon icon-mail2" target="_blank"></a>
        </div></div>
    <!--Ir arriba-->
    <div class="go-top">
        <span >
         <i class="fas fa-angle-up"></i>
        </span>
    </div>
   
<hr class="my-0 bg-danger">
    <div class="img-header">
        <div class="welcome">
            <div class="w"><h1>Bienveniados a Dusfont</h1> </div>
            <hr>
            <p>Bisuteria artesanal</p>
            <button id="abajo">Ver abajo</button>
        </div>
    </div>
    <div class="skew-abajo">

    </div>
    <?php if ($mensaje!="") {?>
<div class="alert alert-primary">
    <?php echo $mensaje; ?>
    <a href="mostrarCarrito.php" class="badge badge-primary">Ver Carrito</a>
</div>

<?php }?>
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

    <!--acerca de nsotros-->

    <section class="our-projects">
        <div class="skew-arriba"></div>
        <div class="deg-background"></div>

        <div class="ejeZproject">
            <div class="container-project">
                <div class="project-title">
                    <h2>Acerca de Nosotros</h2>
                    <hr>

                </div><br>
                    <br><font face="Raleway" size="4px" >
                <div class="info text-white text-center "> Somos una empresa fundada en 2020 especializada en la fabricacion de bisuteria artesanal. 
Contamos con una gran variedad de surtido en piezas de pet, aluminio
tela, semillas, madera y mucho mas.
Todos nuestros moldes, piezas y creaciones son elaborados por gente altamente capacitada para realizar un proceso y acabado limpio.
Con nosotros es posible darle una exclusividad a tus ideas, plasmando tus ideas o nombre de tu marca en placas y dijes. Unete a nuestra extensa lista de clientes!. </div></font>

            </div>
        </div>

  
        <div class="skew-abajo"></div>
    </section>


<!--variedad-->
<section class="our-projects1">
        <div class="skew-arriba"></div>
        <div class="deg-background"></div>

        <div class="ejeZproject">
            <div class="container-project">
                <div class="project-title">
                    <h2>Encuentra una Gran Variedad de Productos</h2>
                    
                </div>
<br>


<div class="row4 ">


<div class="col-xs-12 col-sm-6 col-md-4 product1">
<div class="card3">
<section class="portafolio-item1">
<img src="img/lin.jpg" alt="ARETES" class="portafolio-img1">
<section class="portafolio-textv">
<button><a href="aretes.php">ARETES</a><p>ver mas</p></button>
</section>
</section>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-4 product1">
<div class="card3">
<section class="portafolio-item1">
<img src="img/ass.jpg" alt="Anillos" class="portafolio-img1">
<section class="portafolio-textv">
<button><a href="anillos.php">ANILLOS</a><p>ver mas</p></button>
</section>
</section>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-4 product1">
<div class="card3">
<section class="portafolio-item1">
<img src="img/p3.jpg" alt="pulseras" class="portafolio-img1">
<section class="portafolio-textv">
<button><a href="pulseras.php">PULSERAS</a><p>ver mas</p></button>
</section>
</section>
</div>
</div>



</div>

</section>



<!--publicidad-->
 <section class="our-projects">
        <div class="skew-arriba"></div>
        <div class="deg-background"></div>

        <div class="ejeZproject">
            <div class="container-project">
                <div class="project-title">
                    <h2>¡Conocenos!</h2>
                    <hr>
                </div>

                

<!--video-->
            <div class="about-gallery v">
                <video controls width="90%" height="300px">
                    <source src="img/KIZOA-Movie-Maker-esj1f9np.mp4" type="video/mp4">
                    </video>
            </div>
            </div>
        </div>

  
        <div class="skew-abajo"></div>
    </section>

<!--OFERTAS-->
<section class="our-projects1">
        <div class="skew-arriba"></div>
        <div class="deg-background"></div>

        <div class="ejeZproject">
            <div class="container-project">
                <div class="project-title">
                    <h2>Producto en Oferta</h2>
                   
                </div>
              
<br>


<div class="row ">
<?php
$sentencia=$pdo->prepare("SELECT * FROM `tblproductos`  WHERE `subcategoria`=1");
$sentencia->execute();
$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
//print_r($listaProductos);
?>
<?php foreach ($listaProductos as $producto) { ?>

<font  face="Raleway" size="6px" color="#A21F43">
<div class="col-4">
<div class="card bg-light">
   <section class="portafolio-item">
<img 
title="<?php echo $producto['Nombre'];?>"
alt="<?php echo $producto['Nombre'];?>"
class="card-img-top portafolio-img"
src="<?php echo $producto['Imagen'];?>"

height="300px"
></section>
<div class="card-body text-center " >
<span  size="15px"><?php echo $producto['Nombre'];?></span>
<hr>

</font>
<font  face="Raleway" size="3px">
    <h8 class="text-dark" ><?php echo $producto['Descripcion'];?></h8>
    </font>
    <br>

<font face="Raleway" size="5px" color="#A21F43">
<h5 >$<?php echo $producto['Precio'];?></h5>
</font>

<form action="" method="post">
    <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">
    <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY);?>">
    <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY);?>">
    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY);?>">
<font face="Raleway" size="2px" color="#A21F43" >
 
   <a href="./detalle.php?id=<?php echo $producto['ID'];?>"class="btn" > <font face="Raleway"  color="#A21F43"><b>Detalles</b></font></a>

</font>
<button class="btn btn-danger btn-lg btn-block"
name="btnAccion"
value="Agregar"
type="submit" 
>Agregar al carrito
</button>
</form>
</div>
</div>

</div>
<?php } ?>
</div>
<script>
    $(function(){
$('[data-toggle="popover"]').popover()
    });
</script>
<?php
include 'templates/pie.php';
?>
</div>
</div>
</section>





<!--footer-->

<!--Scripts-->




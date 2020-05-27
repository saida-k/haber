<!DOCTYPE html>
<html lang="es" class="animated pulse">
<head>
    <!--Icono-->
    <link rel="icon" type="image/jpg" href="img/logoo.png">
 <!--Menu de navegacion-->
    <header id="header">
        <font  face="Raleway"  >
    <nav class="menu">
    <div class="logo-box">
        <h1><a href="#">DUSFONT  <img src="img/logoo.png" size="50px" alt="ARETES" ></a></h1>
        <span class="btn-menu"><i class="fas fa-bars"></i></span>

    </div>
    <div class="list-container">
        <ul class="lists">
            <li><a href="index.php">Inicio</a></li>
             
            <li><a href="#" >Catalogo</a>
    <ul class="list-d">
     <li><a href="aretes.php" >aretes</a></li>
     <li><a href="anillos.php" >anillos</a></li>
     <li><a href="pulseras.php" >pulseras</a></li>


</ul>
</li>
            <li><a href="#">Foro</a></li>
            <li><a href="http://localhost/php-login/index.php">Registrate</a></li>
            <li><a href="mostrarCarrito.php"class="nav-link activo"><i class="fa fa-shopping-cart"></i> Carrito(<?php 
echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
                ?>)</a></li>
        </ul>
    </div>
    
    </nav>
</font>
   

    </header>
<hr class="my-0 bg-danger">


<?php
include'global/config.php';
include'carrito.php';
include'templates/cabecera.php';

?>
 <!--Estilos-->
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
<hr class="my-0 bg-danger">
<br>


<h3 class="list-container bg-danger text-center text-white "colspan="3">LISTA DEL CARRITO</h3><br>
<h4 class="list-container  text-center  "colspan="1">Los productos son de edición limitada !!</h4><br>
<hr class="my-0 bg-danger">
<br>
<?php if(!empty($_SESSION['CARRITO'])) {?>
<table class="table  table-hover table-bordered">
	<tbody>
		<tr>
			
	
			<th width="40%">Descripción</th>
			<th width="15%" class="text-center">Cantidad</th>
			<th width="20%" class="text-center">Precio</th>
			<th width="20%" class="text-center">Total</th>
			<th width="5%"> </th>
		</tr>
<?php $total=0; ?>
		<?php  foreach($_SESSION['CARRITO']  as $indice=>$producto){?>
		<tr>
			
			<td width="40%"><?php echo $producto['NOMBRE']?></td>
			<td width="15%" class="text-center"><?php echo $producto['CANTIDAD']?></td>
			<td width="20%" class="text-center"><?php echo $producto['PRECIO']?></td>
			<td width="20%" class="text-center"><?php echo number_format($producto['PRECIO']*$producto['CANTIDAD'],2);?></td>
			<td width="5%">

            
             <form action="" method="post">

              <input type="hidden" 
              name="id" 
              id="id" 
              value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">

             	<button 
             	class="btn btn-danger" 
             	type="submit"
             	name="btnAccion"
             	value="Eliminar" 
             	>Eliminar</button>	
             </form>
                
				
			</td>
		</tr>
			<?php $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);?>
		<?php }?>
		<tr>
			<td colspan="3" align="right"><h3>Total</h3></td>
			<td align="right"><h3>$<?php echo number_format($total,2);?></h3></td>
			<td colspan="3" align="right"><h3></h3></td>
			
		</tr>
<form action="pagar.php" method="post">
<tr>
	
		<td colspan="6">

	<div class="form-group">
		<label for="my-input">Correo de Contacto:</label>
		<input type="email" id="email" name="email" class="form-control" placeholder="Por favor escribe tu correo" required>

	</div>
<small id="emailHelp"
class="form-text text-muted" 
>Tu compra será enviada a este correo</small>
</td>

</tr>
<tr><td colspan="3">
	<div class="form-group">
		<label for="my-input">Nombre de Usuario:</label>
		<input type="text" id="nombre" name="nombre" class="form-control"placeholder="Por favor escribe tu Nombre" required>

	</div>

</td>
<td colspan="3">
	<div class="form-group">
		<label for="my-input">Telefono:</label>
		<input type="number_format" id="telfono" name="telfono" class="form-control"placeholder="Por favor escribe tu Telefono" required>

	</div>


</td>
</tr>
<tr>
<td colspan="6">
<div class="form-group">
	<button class="btn btn-danger btn-lg btn-block" type="submit" value="proceder" name="btnAccion">Proceder a pagar >> 
	</button>
</div>
</td>
</tr>

</form>

	</tbody>
</table>


<?php }else{?>
<div class="alert alert-success">
	No hay productos en el carrito
</div>
<?php }?>

<?php include 'templates/pie.php'; ?>
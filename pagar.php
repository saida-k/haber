<?php
include'global/config.php';
include'global/conexion.php';
include'carrito.php';
include'templates/cabecera.php';

?>

<hr class="my-0 bg-danger">
<?php
if ($_POST) {
	$SID=session_id();
	$Correo=$_POST['email'];
	$total=0;
 foreach ($_SESSION['CARRITO'] as $indice=>$producto) {

$total=$total+($producto['PRECIO']*$producto['CANTIDAD']);

}

$sentencia=$pdo->prepare("INSERT INTO `tventas` (`ID`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `status`) 
	VALUES (NULL,:ClaveTransaccion , '', NOW(), :Correo, :Total, 'pendiente'); ");

    $sentencia->bindParam(":ClaveTransaccion",$SID); 
    $sentencia->bindParam(":Correo",$Correo); 
    $sentencia->bindParam(":Total",$total); 
    $sentencia->execute();
    $idVenta=$pdo->lastInsertId();

 foreach ($_SESSION['CARRITO'] as $indice=>$producto) {

    
$sentencia=$pdo->prepare("INSERT INTO
 `tbldetalleventa` (`ID`, `IDVENTA`, `IDPRODUCTO`, `PRECIOUNITARIO`, `CANTIDAD`, `DESCARGADO`) 
	VALUES (NULL, :IDVENTA, :IDPRODUCTO, :PRECIOUNITARIO, :CANTIDAD, '0');");
    $sentencia->bindParam(":IDVENTA",$idVenta); 
    $sentencia->bindParam(":IDPRODUCTO",$producto['ID']); 
    $sentencia->bindParam(":PRECIOUNITARIO",$producto['PRECIO']); 
    $sentencia->bindParam(":CANTIDAD",$producto['CANTIDAD']); 
    $sentencia->execute();

}

 //echo "<h3>".$total."</h3>";
}
?>
<!-- Include the PayPal JavaScript SDK -->
 <script src="https://www.paypalobjects.com/api/checkout.js"></script>


    <style>
        /* Media query for mobile viewport */
        @media screen and (max-width: 400px) {
            #paypal-button-container {
                width: 100%;
            }
        }
        
        /* Media query for desktop viewport */
        @media screen and (min-width: 400px) {
            #paypal-button-container {
                width: 250px;
                display: inline-block;
            }
        }
    </style>

<div class="jumbotron text-center">
	<h1 class="display-4">¡Este es el paso final de tu compra !</h1>
	<p class="lead">Estas a punto de pagar con Paypal
		<hr class="my-4">
<p>La cantidad de:</p>

<h4>$<?php echo number_format($total,2);?></h4>
	   <div id="paypal-button-container"></div>
	</p>
	<!-- Set up a container element for the button -->
 
	<p>Tu(s) productos seran enviados una vez que se procese el pago
		<p><strong>Para dudas o aclaraciones acerca de tu compra: dufont.bisuteria@gmail.com</strong></p></p>

</div>


  
    

    <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Button.render({
env: 'sandbox',
style: {

	label: 'checkout',
	size: 'responsive',
	shape:'pill',
	color:'blue'
},
client: {

	sandbox:'AWzlpH9kt1GjsymJEceU5IFVelNDdlg68y_pfgBhe6bPtDyaW88YSL4xTStNtd-W_GNsvw4d5C6ps-bG',
	production:''
},
payment: function(data,actions){
return actions.payment.create({

	payment:{
		transactions: [
{

	amount: {total: '<?php echo $total;?>', currency:'MXN'},
    description:"Compra de Produstos a dusfont:$<?php echo number_format($total,2);?>",
    custom:"<?php echo $SID;?>#<?php echo openssl_encrypt($idVenta,COD,KEY);?>"
}
		]
	}
});

},
        	
onAuthorize:function(data,actions){
	return actions.payment.execute().then(function(){
		console.log(data);
	});
}        	
        },
         '#paypal-button-container');
    </script>
 <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            style: {
                color:  'blue',
                shape:  'pill',
                label:  'pay',
                height: 40
            }

        }).render('#paypal-button-container');
    </script>
    


<?php
include 'templates/pie.php';
?>
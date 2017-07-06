<html lang="es">
<head>
	  <!--Importar Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Importar materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

	  <link rel="stylesheet" type="text/css" href="../css/estilos.css">

      <!--Optimizado para mobiles, QUIZA.-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta charset="utf-8"/>
	<title>Tienda Farmatodo</title>

</head>
<body>
<?php
session_start();
include "../conexion.php";
    $arreglo=$_SESSION['carrito'];
    
    $numeroventa=0;
    $re=mysql_query("select * from compras order by numeroventa DESC limit 1");
    while ( $f=mysql_fetch_array($re)) {
        $numeroventa=$f['numeroventa'];
    }
    if($numeroventa==0){
        $numeroventa=1;
    }else{
        $numeroventa=$numeroventa+1;
    }
    for($i=0; $i<count($arreglo);$i++){
        mysql_query("insert into compras(numeroventa, imagen,nombre,precio,cantidad,subtotal) values(
            ".$numeroventa.",
            '".$arreglo[$i]['Imagen']."',
            '".$arreglo[$i]['Nombre']."',
            '".$arreglo[$i]['Precio']."',
            '".$arreglo[$i]['Cantidad']."',
            '".($arreglo[$i]['Precio']*$arreglo[$i]['Cantidad'])."'
            )")or die(mysql_error());
    }

    $total=0;
		$tabla='<table border="1">
			<tr>
			<th>Nombre</th>
			<th>Cantidad</th>
			<th>Precio</th>
			<th>Subtotal</th>
			</tr>';
		for($i=0;$i<count($arreglo);$i++){
			$tabla=$tabla.'<tr>
				<td>'.$arreglo[$i]['Nombre'].'</td>
				<td>'.$arreglo[$i]['Cantidad'].'</td>
				<td>'.$arreglo[$i]['Precio'].'</td>
				<td>'.$arreglo[$i]['Cantidad']*$arreglo[$i]['Precio'].'</td>
				</tr>
			';
			$total=$total+($arreglo[$i]['Cantidad']*$arreglo[$i]['Precio']);
		}
		$tabla=$tabla.'</table>';
		//echo $tabla;
		$nombre="Aarón Montoya";
		$fecha=date("d-m-Y");
		$hora=date("H:i:s");
		$asunto="Compra en Plataforma Farmatodo Alto Barinas";
		$desde="localhost por ahora:)";
		$correo="aaronelf@gmail.com";
		$comentario='
			<div container style="
				border:1px solid #d6d2d2;
				border-radius:5px;
				padding:10px;
				width:800px;
				heigth:300px;
			">
            <div class="center-align">
			<center>
				<img src="http://i.imgur.com/fyuu7ZQ.png" width="300px" heigth="250px">
				<h2>¡Muchas gracias por comprar en nuestra plataforma!</h2>
			</center>
			<p>Hola '.$nombre.' muchas gracias por comprar aquí tienes los detalles de tu compra</p>
			<p>Lista de Artículos<br>
				'.$tabla.'
				<br>
				Total del pago es: <b>'.$total.'</b><br>
                Su numero de factura es: <b>'.$numeroventa.'</b><br>
                Por favor dirigase a nuestra tienda con su numero de factura para retirar su pedido, nos vemos pronto!
			</p>
			</div>
            </div>

		';

		echo $comentario;
        
        
        unset($_SESSION['carrito']);

?>
</body>
</html>
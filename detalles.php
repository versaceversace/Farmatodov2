<!DOCTYPE html>
<html lang="es">
<head>
	<!--Importar Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Importar materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	  <link rel="stylesheet" type="text/css" href="css/estilos.css">


      <!--Optimizado para mobiles, QUIZA.-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta charset="utf-8"/>
	<title>Detalles - Farmatodo</title>
	
</head>
<body>
	<header>
		<nav>
    <div class="nav-wrapper blue darken-3">
      <a href="index.php" class="brand-logo"><img src="imagenes/logo.png"></a>
	  <a href="index.php" class="brand-logo center">Detalles de Producto</a>
      <ul class="right hide-on-med-and-down">
       <li><form>
        <div class="input-field">
          <input id="search" type="search" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
        </form></li>
        <li><a href="carritodecompras.php" title="ver carrito de compras"><img src="imagenes/carrito.png"</a></li>
      </ul>
    </div>
       </nav>
	   </a>
	</header>
	<div class="container center-align">
	<section>
		
	<?php
		include 'conexion.php';
		$re=mysql_query("select * from productos where id=".$_GET['id'])or die(mysql_error());
		while ($f=mysql_fetch_array($re)) {
		?>
			
			<div class="card white hoverable center-align">
			<center>
			<div class="card-image">
				<img src="./productos/<?php echo $f['imagen'];?>"><br>
			</div>
				<span class="card-title"><?php echo $f['nombre'];?></span><br>
				<span><?php echo $f['descripcion'];?></span><br>
				<span>Precio: <?php echo $f['precio'];?></span><br>
				<a href="./carritodecompras.php?id=<?php  echo $f['id'];?>">Añadir al carrito de compras</a>
			</center>
			</div>
			
		
	<?php
		}
	?>
		
		

		
	</section>
	</div>
	  <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
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
	<title>Tienda Farmatodo</title>

</head>
<body>
	<nav>
    <div class="nav-wrapper blue darken-3">
      <a href="index.php" class="brand-logo"><img src="imagenes/logo.png"></a>
      <ul class="right hide-on-med-and-down">
       <li><form>
        <div class="input-field">
          <input id="search" type="search" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
        </form></li>
        <li><a href="carritodecompras.php" title="ver carrito de compras"><img src="imagenes/carrito.png"></a></li>
				<li><a href="login.php">Log In</a></li>
      </ul>
    </div>
       </nav></a>



<div class="slider">
    <ul class="slides">
      <li>
        <img src="imagenes/card1.png"> <!-- random image -->
      </li>
      <li>
        <img src="imagenes/carrousel2.png"> <!-- random image -->
        
      </li>
      <li>
        <img src="imagenes/carrousel3.png"> <!-- random image -->
        
      </li>
    </ul>
  </div>
      





		<h1 class="center">Tienda Farmatodo</h1>
		<h3 class="center flow-text">Catálogo de Productos</h3>
	
	<div class="container">
		<div class="row">
			<div class="col s12 m12">

	<?php
		include 'conexion.php';
		$re=mysql_query("select * from productos")or die(mysql_error());
		while ($f=mysql_fetch_array($re)) {
		?>
		<div class="card white hoverable producto">
			<div class="card-image">
				<img src="./productos/<?php echo $f['imagen'];?>">
			</div>
			<center>
				<span class="card-title"><strong><?php echo $f['nombre'];?></strong></span>
			</center>
			<div class="card-action">
				<center>
				<a href="./detalles.php?id=<?php  echo $f['id'];?>">Ver Detalles</a>
				</center>
			</div>
		</div>
	<?php
		}
	?>
	
		</div>
		</div>
	</div>


	      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	  <script type="text/javascript"  src="js/scripts.js"></script>
</body>
</html>
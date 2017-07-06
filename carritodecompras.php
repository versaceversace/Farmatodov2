<?php
	session_start();
	include './conexion.php';
	if(isset($_SESSION['carrito'])){
		if(isset($_GET['id'])){
					$arreglo=$_SESSION['carrito'];
					$encontro=false;
					$numero=0;
					for($i=0;$i<count($arreglo);$i++){
						if($arreglo[$i]['Id']==$_GET['id']){
							$encontro=true;
							$numero=$i;
						}
					}
					if($encontro==true){
						$arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
						$_SESSION['carrito']=$arreglo;
					}else{
						$nombre="";
						$precio=0;
						$imagen="";
						$re=mysql_query("select * from productos where id=".$_GET['id']);
						while ($f=mysql_fetch_array($re)) {
							$nombre=$f['nombre'];
							$precio=$f['precio'];
							$imagen=$f['imagen'];
						}
						$datosNuevos=array('Id'=>$_GET['id'],
										'Nombre'=>$nombre,
										'Precio'=>$precio,
										'Imagen'=>$imagen,
										'Cantidad'=>1);

						array_push($arreglo, $datosNuevos);
						$_SESSION['carrito']=$arreglo;

					}
		}




	}else{
		if(isset($_GET['id'])){
			$nombre="";
			$precio=0;
			$imagen="";
			$re=mysql_query("select * from productos where id=".$_GET['id']);
			while ($f=mysql_fetch_array($re)){
				$nombre=$f['nombre'];
				$precio=$f['precio'];
				$imagen=$f['imagen'];
			}
			$arreglo[]=array('Id'=>$_GET['id'],
							'Nombre'=>$nombre,
							'Precio'=>$precio,
							'Imagen'=>$imagen,
							'Cantidad'=>1);
			$_SESSION['carrito']=$arreglo;
		}
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Carrito de Compras/ Farmatodo</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


     <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<header>
	<nav>
    <div class="nav-wrapper blue darken-3">
      <a href="index.php" class="brand-logo"><img src="imagenes/logo.png"></a>
	  <a href="carritodecompras.php" class="brand-logo center">Carrito de Compras</a>
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
	</header><!--ADD SERVER SIDE INCLUDE IN HERE- WATCH OUT -->
	</a>

	<section class="container">
		<?php
			$total=0;
			if(isset($_SESSION['carrito'])){
			$datos=$_SESSION['carrito'];

			$total=0;
			for($i=0;$i<count($datos);$i++){

	?>
				<div class="producto card white hoverable">
					<center>
					<div class="card-image">
						<img src="./productos/<?php echo $datos[$i]['Imagen'];?>"><br>
					</div>
						<span class="card-title"><?php echo $datos[$i]['Nombre'];?></span><br>
						<span>Precio: <?php echo $datos[$i]['Precio'];?></span><br>
						<span>Cantidad:
						<input type="text" value="<?php echo $datos[$i]['Cantidad'];?>"
						data-precio="<?php echo $datos[$i]['Precio'];?>"
						data-id="<?php echo $datos[$i]['Id'];?>"
						class="cantidad">
						</span><br>

						<span class="card-action"><a href="#!" class="eliminar" data-id="<?php
						echo $datos[$i]['Id']?>">Eliminar</a></span>

					</center>
				</div>
			<?php
				$total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;
			}

			}else{
				echo '<center><h2>No has añadido ningun producto</h2></center>';
			}
			echo '<center><h2 id="total">Total: '.$total.' Bs.F</h2></center>';
		?>
		<center> <button class="btn waves-effect waves-light pulse" type="submit" name="action"><a href="compras/compras.php" style="color:white">Comprar</a>
    <i class="material-icons right">done_all</i>
  </button>
		<a class="waves-effect waves-light btn" href="index.php">
		<i class="material-icons right">assignment_return</i>Ver catalogo</a></center>




	</section>
	      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
	  <script type="text/javascript" src="js/detalles.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>

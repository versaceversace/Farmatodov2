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
        <li><a href="carritodecompras.php" title="ver carrito de compras"><img src="imagenes/carrito.png"</a></li>
      </ul>
    </div>
       </nav></a>


<div class="container center-align login">
    <div class="row">
 <form class="col s12" id="formulario" method="post" action="./login/verificar.php">
        <?php
        if(isset($_GET['error'])){
            echo '<center><h3>Datos No Validos</h3></center>';
        }
        ?>
        <div class="input-field col s6">
        <i class="material-icons prefix">account_circle</i>
        <input type="text" id="usuario" name="Usuario" placeholder="Usuario" >
        </div>
        
        <div class="input-field col s6">
        <i class="material-icons prefix">lock</i>
        <input type="password" id="password" name="Password" placeholder="password" >
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="action"><input type="submit" name="aceptar" value="Aceptar" class="aceptar">    <i class="material-icons right">send</i>
</button>
     
 </form>
 </div>
</div>

       	      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	  <script type="text/javascript"  src="js/scripts.js"></script>
</body>
</html>
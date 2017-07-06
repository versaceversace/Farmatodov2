<!DOCTYPE html>
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
	<nav>
    <div class="nav-wrapper blue darken-3">
      <a href="../index.php" class="brand-logo"><img src="../imagenes/logo.png"></a>
      <ul class="right hide-on-med-and-down">
       <li><form>
        <div class="input-field">
          <input id="search" type="search" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
        </form></li>
				
      </ul>
    </div>
       </nav></a>

<ul id="slide-out" class="side-nav">
    <li><div class="user-view">
      <div class="background">
        <img src="../imagenes/dashboardbg.jpg">
      </div>
      <a href="#!user"><img class="circle" src="../imagenes/users.png"></a>
      <a href="#!name"><span class="white-text name">Aaron Montoya</span></a>
      <a href="#!email"><span class="white-text email">aaronelf@gmail.com</span></a>
    </div></li>
    <li><a href="../index.php"><i class="material-icons">home</i>Inicio</a></li>
    <li><a href="agregarproducto.php">Agregar Productos</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Desconectar</a></li>
    <li><a class="waves-effect" href="../login/cerrar.php">Salir</a></li>
  </ul>
  <a href="#" data-activates="slide-out" class="button-collapse btn-floating btn-large waves-effect waves-light red"><i class="material-icons medium">menu</i></a>
        
<div class="container">
    <center><h1>Agregar un nuevo producto</h1></center>
    <form action="altaproducto.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <b>Nombre</b>
            <input type="text" name="nombre">
        </fieldset>
        <fieldset>
            <b>Descripción</b>
            <input type="text" name="descripcion">
        </fieldset>
        <fieldset>
            <b>Imagen</b><br>
            <input type="file" name="file">
        </fieldset>
        <fieldset>
            <b>Precio</b>
            <input type="text" name="precio">
        </fieldset><center>
        <button class="btn waves-effect waves-light" type="submit" name="action"><input type="submit" name="accion" value="Enviar" class="aceptar">
        </button></center>
    </form>
</div>








       
       	      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>
	  <script type="text/javascript"  src="../js/scripts.js"></script>
</body>
</html>
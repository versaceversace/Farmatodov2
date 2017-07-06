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

      <a href="admin.php" class="brand-logo center">Admin<i class="material-icons right">vpn_key</i></a>

    </div>
       </nav></a>

<ul id="slide-out" class="side-nav">
    <li><div class="user-view">
      <div class="background">
        <img src="imagenes/dashboardbg.jpg">
      </div>
      <a href="#!user"><img class="circle" src="imagenes/users.png"></a>
      <a href="#!name"><span class="white-text name">Aaron Montoya</span></a>
      <a href="#!email"><span class="white-text email">aaronelf@gmail.com</span></a>
    </div></li>
    <li><a href="index.php"><i class="material-icons">home</i>Inicio</a></li>
    <li><a href="admin.php">Ultimas Compras</a></li>
    <li><a href="admin/agregarproducto.php">Agregar Productos</a></li>
    <li><a href="admin/modificar.php">Modificar Productos</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Desconectar</a></li>
    <li><a class="waves-effect" href="./login/cerrar.php">Salir</a></li>
  </ul>
  <a href="#" data-activates="slide-out" class="button-collapse btn-floating btn-large waves-effect waves-light red"><i class="material-icons medium">menu</i></a>
        






<div class="container">
   <div class="center-align"><h2>Últimas compras</h2></div>

 <table class="striped">
        <thead>
          <tr>
              <th>Imagen</th>
              <th>Nombre</th>
              <th>Precio</th>
              <th>Cantidad</th>
              <th>Total</th>
          </tr>
        </thead>
        <tbody>
<?php
session_start();
include './conexion.php';
  if(isset($_SESSION['Usuario'])){

  }else{
    header("Location: ./index.php?Error=Acceso denegado");
  }
    @$re=mysql_query("select * from compras") or die(mysql_error());
    $numeroventa=0;
    while ($f=mysql_fetch_array($re)) {
        if($numeroventa !=$f['numeroventa']){
            echo '<tr><td>Compra Número: '.$f['numeroventa'].'</td></tr>';
        }
        $numeroventa=$f['numeroventa'];
        echo '<tr>
            <td><img src="./productos/'.$f['imagen'].'" width="100px" height="50px"/></td>
            <td>'.$f['nombre'].'</td>
            <td>'.$f['precio'].'</td>
            <td>'.$f['cantidad'].'</td>
            <td>'.$f['subtotal'].'</td>

        </tr>';
    }
?>
        </tbody>
      </table>


    </div>







       	      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	  <script type="text/javascript"  src="js/scripts.js"></script>
</body>
</html>

<?php
 
$conexion = mysqli_connect("127.0.0.1","root","");
mysqli_select_db($conexion,"stocktiendaderopa");
 
  $tipo_prenda = $_POST ['tipoprenda'];
  $marca = $_POST['marca'];
  $talle = $_POST['talle'];
  $precio = $_POST['precio'];
 
  $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

 
$consulta = "INSERT INTO ropa (id,tipoprenda,marca,talle,precio,imagen)
        VALUES ('','$tipo_prenda','$marca','$talle','$precio','$imagen')";

  mysqli_query($conexion,$consulta);

  header('location: listarconcard.php');
?>

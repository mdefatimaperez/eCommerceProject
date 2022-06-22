<?php
 
$conexion = mysqli_connect("127.0.0.1","root","");
mysqli_select_db($conexion,"stocktienda");
 
  $tipo_producto = $_POST ['tipoproducto'];
  $nombre = $_POST['nombre'];
  $precio = $_POST['precio'];
 
  $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

 
$consulta = "INSERT INTO ropa (id,tipoprenda,marca,talle,precio,imagen)
        VALUES ('','$tipo_producto','$nombre','$precio','$imagen')";

  mysqli_query($conexion,$consulta);

  header('location: cliente.php');
?>

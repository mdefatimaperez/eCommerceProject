<?php


$tipo_prenda=$_POST['tipoprenda'];
$marca=$_POST['marca'];
$talle=$_POST['talle'];
$precio=$_POST['precio'];
$imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$conexion=mysqli_connect("127.0.0.1","root","");
 mysqli_select_db($conexion,"stocktiendaderopa");

 $consulta = "UPDATE ropa SET tipoprenda='$tipo_prenda', marca='$marca', talle='$talle', precio='$precio', imagen='$imagen' WHERE id=$id";

mysqli_query($conexion,$consulta);

header('location:index.html');
 ?>

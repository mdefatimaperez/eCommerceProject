<?php

$conexion = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "stocktienda");

$id = $_GET["id"];

$consulta = "DELETE FROM productos WHERE id=$id";

mysqli_query($conexion, $consulta);

header("location:cliente.php");
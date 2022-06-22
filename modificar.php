<?php

$conexion=mysqli_connect("127.0.0.1","root","");
 mysqli_select_db($conexion,"stocktienda");

$id = $_GET['id'];

$consulta = "SELECT * FROM productos WHERE id=$id";

$repuesta=mysqli_query ($conexion, $consulta);

$datos=mysqli_fetch_array($repuesta);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>🌱 Gardenia</title>
    <link rel="stylesheet" href="style.css">
   
    </head>
    <body>
       
       <!-------------------------------------NAV------------------------------------------------------------------------------------------->
<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
    <span class="navgardenia">Gardenia</span>  
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Productos
          </a>
          <ul class="dropdown-menu bg-light" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="cristales.php">Cristales</a></li>
            <li><a class="dropdown-item" href="plantas.php">Plantas</a></li>
     
          </ul>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
       
   <!----------------------------------------------------------------------modificar------------------------------------------------------------------------------------------->     
       <?php
      
        $tipo_producto=$datos["tipodeproducto"];
        $nombre=$datos["nombre"];
        $precio=$datos["precio"];
        $imagen=$datos['imagen'];?>
        <h2>Modificar</h2>
        <p>Ingrese los nuevos datos del producto</p>
        <form action="" method="post" enctype="multipart/form-data">
            <label>Tipo de producto</label>
            <input type="text" name="tipodeproducto" placeholder="Tipo de Producto" value="<?php echo "$tipo_producto"; ?>">
            <label>Nombre</label>
            <input type="text" name="nombre" placeholder="Nombre" value="<?php echo "$nombre"; ?>">
          
            <label>Precio</label>
            <input type="text" name="precio" placeholder="Precio" value="<?php echo "$precio"; ?>">
            <label>Imagen</label>
            <input type="file" name="imagen" placeholder="imagen">
            <input type="submit" name="guardar_cambios" value="Guardar Cambios">
            <button type="submit" name="Cancelar" formaction="listarconcard.php">Cancelar</button>
        </form>
        <?php
        
        if(array_key_exists('guardar_cambios',$_POST)){
           
            $tipo_producto=$_POST['tipodeproducto'];
            $nombre=$_POST['nombre'];
            $precio=$_POST['precio'];
            $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
           
             $consulta = "UPDATE productos SET tipodeproducto='$tipo_producto', nombre='$nombre', precio='$precio', imagen='$imagen' WHERE id=$id";
            
            mysqli_query($conexion,$consulta);
            
            header('location:cliente.php');
          } ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>

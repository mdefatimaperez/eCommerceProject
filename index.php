<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>🌱 Gardenia</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
 <!-------------------------------------NAV------------------------------------------------------------------------------------------->

 <nav class="navbar navbar-expand-lg ">
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
            <li><a class="dropdown-item" href="#">Cristales</a></li>
            <li><a class="dropdown-item" href="#">Plantas</a></li>
     
          </ul>
        </li>
         
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.html">Login</a>
        </li>
     
      </ul>
    </div>
  </div>
</nav>
   
   <!-------------------------------------------CAROUSEL----------------------------------------------------------------------------->
 
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <button type="button" class="btnunirme"><a href="contactob.html">Unirme</a></button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> 

<!---------------------------------------------------------------------------------MAIN------------------------------------------------------------------------------------------------>
<main id="main">
<!---------------------------------------------------------------------------------CARDS------------------------------------------------------------------------------------------------>
<div class="container">
  <div class="row">
   
<?php
  
  $conexion = mysqli_connect("127.0.0.1", "root", "");

  $consulta='SELECT * FROM productos';

  mysqli_select_db($conexion, "stocktienda"); 
  $datos= mysqli_query($conexion, $consulta);

  while ($reg = mysqli_fetch_array($datos)) {?>
  <div class="card col-sm-12 col-md-6 col-lg-3">
      <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen'])?>" alt="" width="200px" height="200px")>

        <h3 class="card-title" style="width: 100%; font-size:25px;"><?php echo ucwords($reg['nombre']) ?></h3>
        <span>$ <?php echo $reg['precio']; ?></span>
        
       
    </div>
    <?php } ?>  
  </div>
  </div>
</main>
<!-------------------------------------------------------FOOTER----------------------------------------------------------->
<footer>

<div class="container">
<div class="row">
<div class="col-md-4">

<h4>Legales</h4>
<p>No me demanden no tengo abogado</p>
</div>


<div class="col-md-4">
 <h4> Design by 
 <a href="https://github.com/mdefatimaperez" target="_blank">Fatima</a></h4>
 <img class="carpincho" src="img/carpinch.jpg" alt="carpincho" />

</div>

<div class="col-md-4">
  <h4>Photos by <a href="https://ar.pinterest.com/estrellitayeah/gatitos/"target="_blank">Photographer</a></h4>
</div>
</div>
</div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
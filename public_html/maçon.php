<!DOCTYPE html>
<html lang="FR">
<head>
   <title>Maçon</title>
<?php
 include 'includes/head.php';         
 include 'includes/navbar.php';
 ?>
 <link rel="stylesheet" href="macon.css">
</head>
<body>
    <header>
       <section id = imgMacon>
          <div id = "imageMaconPrincipal" class="container">
      <h1><img src="media/dessinMacon.jfif" alt="">Maçonnerie <img src="media/dessinMaconR.jfif" alt=""></h1>

<br></br>
<div id = "pt"></div>
<br></br>
</div>
</section>
</header>
<section id = "compMacon">
   <div class="container" id ="pose">
   <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="#ok">Maçonnerie</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Carrelage</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Plâtrerie</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Demolition</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Demolition</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="infosCalcul.php">Info Utiles</a>
  </li>
</ul><div id="ok"></div>
   <h1><img src="media/marteauR.jpg" alt="">  Maçon  <img src="media/marteau.jpg" alt=""></h1>
   <div  class ="prestations">
      <div class ="imgComp">
         <h4>Pose De Briques</h4>
         <img  src="media/PoseDeBrique.jfif" alt="Error404">
      </div>
      <div class ="imgComp">
          <h4>Pose De Parpaing</h4>
         <img src="media/PoseDeParpaing.jfif" alt="Error404">
      </div><div class ="imgComp">
         <h4>Beton cellulaire</h4>
         <img src="media/cell.jfif" alt="Error404">
      </div>
      <div class ="imgComp">
      <h4>Rejointoiement De Brique</h4>
      <img src="media/Rejointoiement.jfif" alt="Error404">
      </div>
      <div class ="imgComp">
         <h4>Réseau d'évacuation</h4>
         <img src="media/rEvacu.jpg" alt="Error404">
      </div>
      <div class ="imgComp">
         <h4>Dalle béton</h4>
         <img src="media/betonA.jfif" alt="Error404">
      </div>  
   </div> 
   <?php include "includes/calcul.php";?>
 
   <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="media/PoseDeBrique.jfif" class="d-block w-50" alt="...">
    </div>
    <div class="carousel-item">
      <img src="media/PoseDeParpaing.jfif" class="d-block w-50" alt="...">
    </div>
    <div class="carousel-item">
      <img src="media/cell.jfif" class="d-block w-50" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> 
 </section>
<?php include 'includes/footer.php'; ?>
</body>
</html>
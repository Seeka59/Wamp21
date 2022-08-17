<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="../index/index.php">SeeKa</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dev</a>
    <ul class="dropdown-menu">
     
      <li><a class="dropdown-item" href="#">PageInternet</a></li>
      <li><a class="dropdown-item" href="#">Appli</a></li>
      <li><a class="dropdown-item" href="#">Games</a></li>
      <li><a class="dropdown-item" href="../testeApi/kak.php">Api</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">Separated link</a></li>
    </ul>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Plantes</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Graines</a></li>
      <li><a class="dropdown-item" href="#">Plantes</a></li>
      <li><a class="dropdown-item" href="#">Conseil</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">Separated link</a></li>
    </ul>
  </li>
  
<li class="nav-item">
  <a href="../lucileFriterie/index.php" class ="nav-link">Friterie</a>
</li>
  
  <li class ="nav-item">
    <button><a class="nav-link" href="../cultures/culture.php">Mes Cultures</a></button>
  </li>

 <li class="nav-item">
   <a class="nav-link" href="../index/addImg.php">Marchée</a>
 </li>
  <li class="nav-item">
    <a class="nav-link" href="../dForum/forum.php">Forum</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled">Disabled</a>
  </li>
<?php 
// bug data ao?t  2022 //

session_start();
require('../actions/loginAction.php');
if(!empty($_SESSION['user']))
{
  ?>
  <li class="nav-item">
    <a class="nav-link" href=""> <?php echo ("Salut {$_SESSION['user']}") ?> </a>
  </li> 
  <li class="nav-item">
    <a class="nav-link" href="../actions/logoutAction.php">Logout</a>
  </li>
  <?php
}
 else {
   require('../actions/loginAction.php')?>
  <form method="POST">
    
  <li class="nav-item">
     <label>Pseudo</label>
     <input class="nav-item" type="text" name="user_name" placeholder="djkekev">
  </li>
  <li class="nav-item">
     <label>Password</label>
     <input class="nav-item" type="password" name="user_password" placeholder="jaimelesiop">
  </li>
  <input type="submit"name="user_valider" value ="valider">
  </form>
  
  <?php
}?>
<li class="nav-item"></li>

<li class="nav-item"><a class="nav-link" href="">
  <?php       
            setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
            echo strftime('%A %d %B %Y %I:%M:%S'). '<br>';
        ?></a>
</li>

</ul>
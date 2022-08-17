<?php
require('../actions/cultureAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="meteo.css">
</head>
<body>
    <br><br>

    <br><br>
    <?php 
         if(!empty($_SESSION["user"]))
 {
        ?>
    <form  method="post">
        <label>Nom De La Plantation</label>
        <input type="text" name="type" placeholder="Radis">

        <label>Date De Plantation</label>
        <input type="datetime-local" name="date">

        <label>Nombre de Jours Avant Recolte</label>
        <input type="number" name="jrsDePousse" id="">
        
        <input type="submit" value="Planter"name="valider"> 
    </form>

    <br><br>
    
 <?php

 
 while($cultureUser = $checkRequest->fetch())
 {?>
 <form action="../cultures/info.php" method="post">
    <button name="btnCultureUser" value="<?=$cultureUser['id']?>">
  
<h3 id="<?=$cultureUser['type']?>"><?=$cultureUser['type']?></h3>
 <h5 id="<?=$cultureUser['type']?>">c°</h5>
 
 <?php
 $expectEaster = date_create_from_format('Y-m-d H:i:s',$cultureUser['date'], new DateTimeZone('Europe/Berlin'));
 ?>
 <h5>
     <?=('Planter Le '.$expectEaster->format('d-m-Y H:i.s')."\n");?>
 </h5> 
 <?php
 
 $day = $cultureUser['jdp'];
 $interval = new DateInterval('P'.$day.'D');
 //$expectEaster->sub($interval);
 //echo('avant '.$expectEaster->format('Y-m-d H:i:s')."\n");
 $expectEaster->add($interval);
 
 ?>
 <h5>
     <?=
     ('Recolte Le '.$expectEaster->format('d-m-Y H:i.s')."\n");?>
 </h5>                                         

 </button> 
 </form>


<section>
    <div >
         <?php }
}
include('meteo.php');
?>
    
    <div style="overflow:scroll; border:#000000 1px solid; width: 500px; height: 500px;">
    <?php
    while($allCultureUsers = $requestAllCultures->fetch())
    {?>
<div id="divPlante">
    <h5><?= $allCultureUsers['user']?></h5>
         <h3><?=$allCultureUsers['type']?></h3>
        <h5 id="<?=$allCultureUsers['type']?>">c°</h5>
<div id ="barre">0%</div>
       </div> 
        <?php
    }?>
    
    </div>
</div>
</section>


<script src="culture.js"></script>
<script src="meteo.js"></script>


</body>
</html>
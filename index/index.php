<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Seeka</title>
    <?php 
    include '../includes/nav.php';
    include '../actions/signupAction.php';
    ?>  
    
</head>
<body>
<br><br><br>
<?php 
require('../actions/getIpAction.php');
getIp();
if(!empty($_SESSION['user'])){?>
<h5><?php echo ("Bienvenue {$_SESSION['user']}") ?></h5>
<br><br><br>
<header>
    <div>
        <a href="../index/addImg.php"><button>
               <h4>Marchée Web</h4>
      <img src="../imgWeb/imgMarcheA.jpg" alt="Marchée">  
        </button></a>
    </div>
    <div>
        <a href="../cultures/culture.php"><button>
               <h4>Culture Web</h4>
      <img src="../imgWeb/cultureP.jpg" alt="Marchée">  
        </button></a>
    </div>
</header>
        <br><br>
<?php
}
else{
?>
 <link rel="stylesheet" href="keke.css">
  <header>
    <h3>Prenez Un</h3>
    <h3 id="target"></h3>
   
</header>
<div>
    <h1> SEEKA SECURITY</h1>
</div>
<div class="clickEvent">

    <button onclick="myFunctiona()" id="btn">Appuyer Pour Acceder Au Site</button>
    <br>
    <img src="troll.jpg" alt="errorG29" id ="img">
     
</div>
<br><br>
<section id ="secuQuestion">
  <label>ECRIRE VINVIN POUR DEBLOQUER LA SECURITER</label> 
    <input  id ="secu"  type="text" placeholder="VINVIN" value = "">
    <button onclick="myFunction()" id ="btnSecu">Ok</button>
    <script>
        let i = 0
function myFunction() {
            const color = ["red",'black',"white","beige","blue"]
          document.body.style.backgroundColor = color[i];
          i++; 
            if(i==5)
            {
                i=0;
            }
           setTimeout(() => {myFunction();},50);
}
function myFunctiona() {
          
          document.body.style.backgroundColor = "red";
       
}
</script>
</section>
<br><br>
<section id = "secuQ">

</section> 


<a href="../form/sub.php">S'inscrire</a>
<?php
}
?>

   
</body>
<?php
require('../includes/footer.php');
?>
</html> <script src="index.js"></script>
<script src="indexA.js"></script>
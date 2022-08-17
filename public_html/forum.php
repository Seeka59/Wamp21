<?php require('actions/securityAction.php');  ?>
<!DOCTYPE html>
<html lang="FR">
<head>
<?php include 'includes/head.php';?>
    <?php include 'includes/navbar.php';?>
    <title>Forum</title>
    <link rel="stylesheet" href="macon.css">
</head>
<body>
    <br></br>
    <br></br>
    <?php 
    if(isset($_SESSION['email']))
    {
         echo "Connnecter en Tant que :" . $_SESSION['email'];
    }else {
        echo " Non Connecter" ;
    }
     ?>
    <br></br></br><br>


<div class="container">
    <div>
    <ul><a href="publish_question.php"><h1>Publier</h1></a></ul>
    </div>
    <div>
        <ul><a href="myquestions.php"><h1>Voir Mes Publication</h1></a></ul>
    </div>
    <div>
        <ul><a href="article.php"><h1>Toute Publication</h1></a></ul>
    </div>
    <br></br>
    <br></br>
</div>
</body>
</html>
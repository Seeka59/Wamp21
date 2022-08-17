<?php require('actions/signupAction.php');?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Inscription</title>
        <?php include 'includes/head.php'; ?>
        <?php include 'includes/navbar.php';?>
    </head>
<body>
    <br></br><br></br>
<form class="container" method="POST">
    <?php if(isset($errorMsg)){echo '<p>'.$errorMsg.'</p>';}?>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="Email" class="form-control" name="email">
  </div>
    <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" name="nom">
    </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prenom</label>
            <input type="text" class="form-control" name="prenom">
        </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control"name="password">
     </div>
    <button type="submit" class="btn btn-primary" name="validate">S'inscrire</button>
    <br></br>
    <a href="login.php"><p>J'ai deja un compte, je me connecte</p></a>
</form>

</body>
</html>
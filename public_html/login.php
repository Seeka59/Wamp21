<?php require('actions/loginAction.php'); ?>
<!DOCTYPE html>
<html lang="FR">
    <head>
    <title>Connection</title>
<?php include 'includes/head.php'; ?>
<?php include 'includes/navbar.php';?>
<link rel="stylesheet" href="macon.css">
</head>
<body>
<br></br><br></br>
<h4>Se Connecter</h4>
<form class="container" method="POST">

    <?php if(isset($errorMsg)){echo '<p>'.$errorMsg.'</p>';}?>

<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="Email" class="form-control" name="email">
  </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control"name="password">
     </div>
    <button type="submit" class="btn btn-primary" name="validate">Se connecter</button>
    <br></br>
    <a href="signup.php"><p>Je n'ai pas de compte, je m'inscris</p></a>
</form>
</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
<
   <?php
   include '../includes/nav.php';
   include 'forumAction.php';
   ?>
   <link rel="stylesheet" href="forum.css">
</head>
<body>
    <br><br>
<h5 id="target  "></h5>
    <section>
        <?php
        while($requestData = $form_data->fetch())
        {?>
        <section>
<div>
    <label>Pseudo</label>
    <a><p><?= $requestData["form_name"]?> </p>  </a>
    
    <label>Message</label>
    <p><?= $requestData["form_message"]?> </p>
</div> 
</section>
        <?php }
        ?>
       
    </section> 
    <script src="../dForum.letterMove.js"></script>
</body>
<footer>
<form method="POST">
    <label>Pseudo</label>
        <input type="text"placeholder="Pseudo" name="form_name">
        <label>Votre Message</label>
        <textarea placeholder="Ecrire Votre Message" name="form_message" id="" cols="30" rows="10"></textarea>
        <input type="submit" name="form_submit"value="Valider">
</form>

</footer>
</html> 
<?php
try
{
  require('../actions/secu/db.php');
   $bdd = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
}catch(Exception $e){
die('Une erreur a été trouvée : ' . $e->getMessage());
}
?>
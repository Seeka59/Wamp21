<?php
try
{
    $serveur = "localhost";
    $dbname = "xeqazgfe_message";
    $user = "xeqazgfe_keke";
    $pass = "5EG@ZGYW7nBniXk";
   $bdd = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
}catch(Exception $e){
die('Une erreur a été trouvée : ' . $e->getMessage());
}
?>
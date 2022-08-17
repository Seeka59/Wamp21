<?php

if(isset($_POST['delete']))
{
    if(!empty($_POST['vDelete'])&& $_POST['vDelete'] == "YES")
    {
      $refProduit = $_POST['delete'];

      $deleteProduit = $bdd->prepare('DELETE FROM produit WHERE ref =?');
      $deleteProduit->execute(array($refProduit));
      header('Location: ../friterie/listProduit.php');
    }else{$msgError="Error404";}
}
?>
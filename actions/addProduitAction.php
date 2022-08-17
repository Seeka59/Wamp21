<?php
require('../actions/database.php');


if(isset($_POST['ajouter']))
{
    if(!empty($_POST['name'])){
        if(!empty($_POST['type'])){
             if(!empty($_POST['price'])&& $_POST['price'] > 0.00)
                { 
                    $name = htmlspecialchars($_POST['name']);
                    $type = htmlspecialchars($_POST['type']);
                    $price = htmlspecialchars($_POST['price']);
                
                    $AjouterProduit = $bdd->prepare('INSERT INTO produit(name,type,price) VALUES(?,?,?)');
                    $AjouterProduit->execute(array($name,$type,$price));
                    header('Location: ../friterie/listProduit.php');
                }else{$msgError ="Price Not Define";}

        }else{$msgError ="Type Not Define";}

    }else{$msgError ="Name Not Define";}




}
?>  
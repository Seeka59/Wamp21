<?php
require('../actions/database.php');

$listProduits = $bdd->prepare('SELECT * FROM produit');
$listProduits->execute();

?>
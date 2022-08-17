<?php

require('actions/database.php');

$getAllQuestions = $bdd->prepare('SELECT id, titre, description, contenu FROM questions  ORDER BY id DESC');
$getAllQuestions->execute(array());
 ?>
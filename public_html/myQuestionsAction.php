<?php 
require('actions/database.php');

$getAllQuestions = $bdd->prepare('SELECT * FROM questions');
$getAllQuestions->execute(array());
$allQuestions = $getAllQuestions->fetch();
       ?>
 
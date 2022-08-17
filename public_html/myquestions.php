<?php 
    require('actions/securityAction.php');
    require('actions/myQuestionsAction.php'); 
?>
<!DOCTYPE html>
<html lang="FR">
  <head>
  <title>question</title>
    <?php include 'includes/head.php'; ?>
     <?php include 'includes/navbar.php'; ?>
     <link rel="stylesheet" href="myquestions.css">
</head>
<body>
    <br></br>
    <div id ='imgP'>
      <h1>Vos Questions</h1>
    </div>
    <div class="container">

        <?php 
            while($question = $getAllMyQuestions->fetch()){
                ?>
                <div >QUESTION N°<?= $question['id']; ?>
                <div class="card">
                    <h5 class="card-header">
                        <a href="article.php?id=<?= $question['id']; ?>">
                         <?= $question['titre']; ?>
                        </a>
                    </h5>
                    <div class="card-body">
                        <p class="card-text">
                           <h5 class="headQ">DESCRIPTION</h5> 
                           <?= $question['description']; ?>
                        </p>
                        </div>
                        <div class="card">
                        <p class="card-text">
                        <h5 class="headQ">CONTENUE</h5>
                            <?= $question['contenu']; ?>
                        </p>
                    </div>
                </div>
                </div>
                <br></br>
                <?php
            }

        ?>

    </div>

</body>
</html>
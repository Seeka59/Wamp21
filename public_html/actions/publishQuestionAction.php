<?php

require('actions/database.php');

//Valider le formulaire
if(isset($_POST['validate'])){

    //Vérifier si les champs ne sont pas vides
    if(!empty($_POST['title']) &&!empty($_POST['description']) && !empty($_POST['content'])){
        
        //Les données de la question
        $question_title = htmlspecialchars($_POST['title']);
        $question_description = htmlspecialchars($_POST['description']);
        $question_content = htmlspecialchars($_POST['content']);
        $question_date = date('d/m/Y');
        $question_id_auteur = $_SESSION['email'];


        //Insérer la question sur la question
        $insertQuestionOnWebsite = $bdd->prepare('INSERT INTO questions(titre, description, contenu, date_publication ,id_auteur)VALUES(?, ?, ?, ?, ?)');
        $insertQuestionOnWebsite->execute(
            array(
                $question_title, 
                $question_description, 
                $question_content,
                $question_date, 
                $question_id_auteur
            )
        );
        
        $successMsg = "Votre question a bien été publiée sur le site";
        
    }else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }

}


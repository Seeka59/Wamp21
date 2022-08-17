<?php

require('../actions/database.php');

if(!empty($_SESSION['user']))
{
    if(isset($_POST['valider']))
    {
        if
        (
        !empty($_POST['nomPlante'])
        &&
        !empty($_POST['placPlante'])
        &&
        !empty($_POST['tempPlante'])
        &&
        !empyt($_POST['maladiePlante'])
        &&
        !empty($_POST['infoPlante'])
        &&
        !empty($_POST['eauPlante'])
        )
        {
            
            $nomPlante = htmlspecialchars($_POST['nomPlante']); 
            $placPlante = htmlspecialchars($_POST['placPlante']);
            $tempPlante = htmlspecialchars($_POST['tempPlante']);
            $maladiePlante = htmlspecialchars($_POST['maladie']);
            $eauPlante = htmlspecialchars($_POST['eauPlante']);
            $infoComp = htmlspecialchars($_POST['infoPlante']);

            $prepareRequete = $bdd->prepare('INSERT INTO infoplantes(nom,placement,temperature,maladie,eau,infocomplementaire) VALUES (?,?,?,?,?,?)');
            $prepareRequete->execute(array($nomPlante,$placPlante,$tempPlante,$maladiePlante,$eauPlante,$infoComp));


        }
    }
}
else{
    echo('Error Connection');
}



?>
<?php
require('../actions/database.php');
if(isset($_POST['Fvalider']))
{
    if(!empty($_POST['Fpseudo']))
    {
        if(!empty($_POST['Femail']))
        {
            
            if(!empty($_POST['Fcontent']))
            {
            $pseudo = htmlspecialchars($_POST['Fpseudo']);
            $email = htmlspecialchars($_POST['Femail']);
            $content = htmlspecialchars($_POST['Fcontent']);
          
                $messageFooter = $bdd->prepare('INSERT INTO footer(pseudo,email,content) VALUES (?,?,?)');
                $messageFooter->execute(array($pseudo,$email,$content)); 
            }else{$msgError ="Veuillez Entrez Une Message";}

            
        }else{$msgError ="Veuillez Entrez Une Adresse Email";}
    }else{$msgError ="Veuillez Entrez Un Pseudo";}
}
?>
<?php
require("../actions/database.php");

$erreur = "";
if(isset($_POST["user_valider"]))
{
    if(!empty($_POST['user_name']) && !empty($_POST['user_password']))
    {
        $_user = htmlspecialchars($_POST['user_name']);
        $_user_password=htmlspecialchars($_POST['user_password']);

        $checkPasswordElReadyExists = $bdd -> query("SELECT * FROM users WHERE user = '$_user' limit 1");
    
        if ($checkPasswordElReadyExists -> rowCount() > 0) 
        {
            $_users = $checkPasswordElReadyExists->fetch();
            if(password_verify($_user_password,$_users['_password']))
            {
            $_SESSION['user'] = $_users['user'];
            $_SESSION['auth'] = true;
            echo("okCo");  
            }
            else{
                $_users = null;
                echo("Error");
            }
           
         } 
            else
            $erreur = "Mauvais login ou mot de passe!";
        return 0;
        }
       
        else{echo("nul");}

    }

?>
<?php
if(isset($_POST['valide']))
{
    if(isset($_POST['password']) && isset($_POST['user']))
    {
        if(!empty($_POST['password']) && !empty($_POST['user']))
        {
            $password=htmlspecialchars($_POST['password']);
            $utilisateur=htmlspecialchars($_POST['user']);
            echo "<h2> Bonjour <b> $utilisateur </b><div> Votre Password :<b> $password</b></div></h2>";
        }
    }
}
else
    {
        echo "<h2>Error</h2>";
    }
?>
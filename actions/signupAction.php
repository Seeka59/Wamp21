<?php

require('../actions/database.php');

if(isset($_POST['user_valider']))
{
    if(!empty($_POST['user_name']) && !empty($_POST['user_password']) && !empty($_POST['user_email']))
    {
        if($_POST['user_password'] = $_POST['confirmPassword'])
        {
             $user = htmlspecialchars($_POST['user_name']);
             $user_email = htmlspecialchars($_POST['user_email']);
             $user_password=password_hash($_POST['user_password'], PASSWORD_DEFAULT);


             $checkUserElReadyExists = $bdd -> prepare('SELECT user FROM users WHERE user = ?');
             $checkUserElReadyExists->execute(array($user));

                if($checkUserElReadyExists->rowCount() == 0)
                {
                    session_start();
                    $insertRequest = $bdd -> prepare('INSERT INTO users(user,email,_password)VALUES(?,?,?)');
                    $insertRequest->execute(array($user,$user_email,$user_password));
                    
                    $checkRequist = $bdd -> prepare('SELECT * FROM users WHERE user = ?');
                    $checkRequist->execute(array($user));

                        $usersInfos = $checkRequist->fetch();

                        $_SESSION['auth'] = true;
                        $_SESSION['id']=$usersInfos['id'];
                        $_SESSION['user']=$usersInfos['user'];
                        $_SESSION['email']=$usersInfos['email'];

            header('Location: ../index/index.php');
                    
                }else{$errorMsg = "L'utilisateur existe deja sur le site" ;}
       

     
        
        }

    }
}
?>
<?php require('actions/database.php');
session_start();
if(isset($_POST['validate']))
{
    if(!empty($_POST['email'])&&!empty($_POST['password']))
    {
        $user_email=htmlspecialchars($_POST['email']);
        $user_password=htmlspecialchars($_POST['password']);
// Verifie si l'utilisteur existe
        $checkIdUserExists =$bdd->prepare('SELECT * FROM users WHERE email =? ');
        $checkIdUserExists->execute(array($user_email));

        if($checkIdUserExists->rowCount() > 0){

            $usersInfos= $checkIdUserExists->fetch();
// verif mdp
            if(password_verify($user_password,$usersInfos['mdp']))
            {
                $_SESSION['auth'] = true;
                $_SESSION['id']=$usersInfos['id'];
                $_SESSION['nom']=$usersInfos['nom'];
                $_SESSION['prenom']=$usersInfos['prenom'];
                $_SESSION['email']=$usersInfos['email'];
                header('Location: forum.php');

            }else{$errorMsg = "Votre Mot de passe est incorrecte";}

        }else{$errorMsg = "Votre email est incorrecte";}
    
    }else{$errorMsg ="Veuillez compléter tous les champs ...";}
}

?>
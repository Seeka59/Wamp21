<?php

require('actions/database.php');

if(isset($_POST['validate']))
{
    if(!empty($_POST['email'])&&!empty($_POST['nom'])&&!empty($_POST['prenom'])&&!empty($_POST['password']))
    {
        $user_email=htmlspecialchars($_POST['email']);
        $user_nom=htmlspecialchars($_POST['nom']);
        $user_prenom=htmlspecialchars($_POST['prenom']);
        $user_password=password_hash($_POST['password'], PASSWORD_DEFAULT);

        $checkIfUserAlReadyExists = $bdd->prepare('SELECT email FROM users WHERE email =?');
        $checkIfUserAlReadyExists->execute(array($user_email));

        if($checkIfUserAlReadyExists->rowCount() == 0)
        {
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO users(email, nom, prenom, mdp)VALUES(?,?,?,?)');
            $insertUserOnWebsite ->execute(array($user_email, $user_nom, $user_prenom,$user_password));

            $getInfoOfThisUserReq = $bdd->prepare('SELECT id,nom,prenom FROM users WHERE nom = ? AND prenom =? AND email');
            $getInfoOfThisUserReq->execute(array($user_nom,$user_prenom,$user_email));

            $usersInfos = $getInfoOfThisUserReq->fetch();

            $_SESSION['auth'] = true;
            $_SESSION['id']=$usersInfos['id'];
            $_SESSION['nom']=$usersInfos['nom'];
            $_SESSION['prenom']=$usersInfos['prenom'];
            $_SESSION['email']=$usersInfos['email'];

            header('Location: index.php');

        }else{$errorMsg = "L'utilisateur existe deja sur le site" ;}

    }else{$errorMsg ="Veuillez compléter tous les champs ...";}
}
 ?>
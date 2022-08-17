<?php
if(isset($_POST['valider']))
{
    if(isset($_POST['user_name']) && isset($_POST['user_email']) && isset($_POST['user_message']))
    {
        if(!empty($_POST['user_name']) && !empty($_POST['user_email']) && !empty($_POST['user_message']))
        {
            $name=htmlspecialchars($_POST['user_name']);
            $email=htmlspecialchars($_POST['user_email']);
            $message=htmlspecialchars($_POST['user_message']);
            ///
            $serveur = "localhost";
            $dbname = "xeqazgfe_message";
            $user = "xeqazgfe_keke";
            $pass = "5EG@ZGYW7nBniXk";
            
            $nom = $name;
            $mail = $email;
            try{
                //On se connecte à la BDD
                $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
                //On insère les données reçues
                $sth = $dbco->prepare("
                    INSERT INTO `message`(nom, email, message)
                    VALUES(:nom, :email, :message)");
                $sth->bindParam(':nom',$nom);
                $sth->bindParam(':email',$mail);
                $sth->bindParam(':message',$message);
                $sth->execute();
                
                //On renvoie l'utilisateur vers la page de remerciement
                echo "<h2> Bonjour <b> $name </b><div> Votre Email :<b> $email </b></div></h2>
                 <h2>votre message :: <b> $message </b> </h2>";
            }
            catch(PDOException $e){
                echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
            }
      
        
        }
    }else{
        echo "<h2>Error</h2>";
    }
}
else
    {
        echo "<h2>Error</h2>";
    }
?>
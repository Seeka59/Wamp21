<?php

require '../actions/database.php';

if(isset($_FILES['file'])){
    $tmpName = $_FILES['file']['tmp_name'];
    $name = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];

    $tabExtension = explode('.', $name);
    $extension = strtolower(end($tabExtension));

    $extensions = ['jpg', 'png', 'jpeg', 'gif'];
    $maxSize = 400000;

    if(in_array($extension, $extensions) && $size <= $maxSize && $error == 0){

        $uniqueName = uniqid('', true);
        //uniqid génère quelque chose comme ca : 5f586bf96dcd38.73540086
        $file = $uniqueName.".".$extension;
        //$file = 5f586bf96dcd38.73540086.jpg

        move_uploaded_file($tmpName, '../upload/'.$file);

        if(!empty($_POST['produit']))
        {
        $produit = htmlspecialchars($_POST['produit']);
        $description = htmlspecialchars($_POST['description']);
        $prix = $_POST['prix']; 
        }
        

        $req = $bdd->prepare('INSERT INTO file (name,produit,description,prix) VALUES (?,?,?,?)');
        $req->execute(array($file,$produit,$description,$prix));

        echo "Image enregistrée";
    }
    else{
        echo "Une erreur est survenue";
    }
}
?>

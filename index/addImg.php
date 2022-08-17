<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel="stylesheet" href="index.css">
    <?php
    require('../actions/addImgAction.php');
    include "../includes/nav.php"; 
    ?>
    </head>
<body>
    <h2>Ajouter Un Produit</h2>
    <form method="POST" enctype="multipart/form-data">

        <label>Nom Du Produit</label>
        <input type="text" name="produit" placeholder="Fraise">

        <label>Description Du Produit</label>
        <input type="text" name="description" placeholder="Fraise des bois , Calibrée : 1,00 , .... ">

        <label>Prix Du Produit</label>
        <input type="float" name="prix" placeholder="....">

        <label for="file">Image Du Produit(jpg, png, jpeg, gif)</label>
        <input type="file" name="file">

        <button type="submit">Enregistrer</button>
    </form>

    <h2>Les Ventes Actuelle</h2>
    <?php 
        $req = $bdd->query('SELECT * FROM file');
        while($data = $req->fetch()){?>
        <br>
        <div>
          <form action="">
            <h3>Nom Du Produit : <?=$data['produit']?></h3>
            <h4>Description :<?=$data['description']?></h4>
            <h5>Prix Au Kilo : <?=$data['prix']?><br><br><input type="nbr"placeholder="2"><span>Kg</span><br><br><input type="button" value="Commander"><br>   </h5>

           <img src='../upload/<?=$data['name']?>' width='300px' >  <br> 
        </form>  
        </div>
        
        
        <?php 
        }
        ?>
        
    
</body>
</html>
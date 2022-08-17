<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    require('../actions/addDataCultureAction.php');
    require('../includes/nav.php');
    ?>
    <link rel="stylesheet" href="addDataStyle.css">
</head>
<body>
    <form action="" method="post">
        <label for="">Nom De La Plante</label>
        <input name="nomPlante" type="text" placeholder="Radis">
        <br>
        <label for="">Placement De La Plante</label>
        
        <select name="placPlante" id="">
            <option value="ombre">Ombre</option>
            <option value="semi">Ombre/Soleil</option>
            <option value="semi">Soleil/Ombre</option>
            <option value="semi">Soleil</option>
        </select>
        <br>
        <label for="">Temperature Moyen de la Plante</label>
        <input name="tempPlante"type="nbr" placeholder="10">
        <br>
        <label for="">Maladies</label>
        <input name="maladiePlante" type="text" placeholder="Midjou"> 
        <br>
        <label for="">Ressource En Eau</label>
        <select name="eauPlante" id="">
            <option value="faible">Faible En Eau</option>
            <option value="moyen">Moyen En Eau</option>
            <option value="forte">Forte Demande En Eau</option>
        </select>
        <br>
        <label for="">Information Complementaires</label><br>
        <textarea name="infoPlante" id="" cols="30" rows="10" placeholder="Plante qui réagie mal en cas de Canicul">
        </textarea>
        <br>
        <input name ="valider" type="submit" value="valider">
    </form>
</body>
</html>
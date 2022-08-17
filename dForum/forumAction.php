<?php
require("../actions/database.php");

// form actu a setTime ^^ //

$form_data = $bdd -> prepare('SELECT * FROM messageTable');
$form_data->execute();

// formulaire envoie//

if(isset($_POST['form_submit']))
{
if(!empty($_POST['form_name'] && !empty($_POST['form_message'])))
{
    $form_name = htmlspecialchars($_POST['form_name']);
    $form_message = htmlspecialchars($_POST['form_message']);

    $prepareTable = $bdd -> prepare('INSERT INTO messageTable(form_name,form_message)VALUES(?,?)');
    $prepareTable->execute(array($form_name,$form_message));
    echo("Envoie Form Ready");
}
}



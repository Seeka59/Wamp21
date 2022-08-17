<?php

require('../actions/database.php');
require('../includes/nav.php');

$requestAllCultures = $bdd->prepare("SELECT * FROM cultures");
$requestAllCultures->execute();

  if(!empty($_SESSION['user']))
    {
        $Kuser = htmlspecialchars($_SESSION['user']);
        $checkRequest=$bdd->prepare("SELECT * FROM cultures WHERE user = ?");
        $checkRequest->execute(array($Kuser));
    }  else {
        echo("");
    }


    if(isset($_POST['valider']))
    {
        if(!empty($_POST['type'])&&!empty($_POST['date']))
        {
            $user = htmlspecialchars($_SESSION['user']);
            $type = htmlspecialchars($_POST['type']);
            $jrsDePousse = htmlspecialchars($_POST['jrsDePousse']);
            $date = $_POST['date'];
            $insertRequest = $bdd -> prepare("INSERT INTO cultures(user,type,date,jdp) VALUE(?,?,?,?)");
            $insertRequest -> execute(array($user,$type,$date,$jrsDePousse));
            header('Location: ../cultures/culture.php');
        }
    }else {
        echo("");
    }

    function getMysqlDatetimeFromDate(int $day, int $month, int $year): string
    {
     $dt = new DateTime();
     $dt->setDate($year, $month, $day);
     $dt->setTime(0, 0, 0, 0); // set time to midnight
    
     return $dt->format('Y-m-d H:i:s');
    }

?>

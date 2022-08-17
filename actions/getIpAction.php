<?php

function getIp(){

    require('../actions/database.php');

    if(!empty($_SERVER['HTTP_CLIENT_IP'])){

      $ip = $_SERVER['HTTP_CLIENT_IP'];


    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
      $ip = $_SERVER['REMOTE_ADDR'];
    }

    $dataReq = $bdd -> prepare('INSERT INTO seekhack(ip) VALUE(?)');

    $dataReq->execute(array($ip));

    return $ip;
  }
 
?>
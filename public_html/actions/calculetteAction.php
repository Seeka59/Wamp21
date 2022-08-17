<?php
if(isset($_POST['submit']))
{
    if(!empty($_POST['n1'])&&!empty($_POST['n2']))
    {
	$n1=$_POST['n1'];
	$op=$_POST['op'];
	$n2=$_POST['n2'];
    $n3=$n1*$n2;
    echo "$n3";
	}else{$errorMsg ="Veuillez compléter tous les champs ...";}
}else{$errorMsg ="Veuillez compléter tous les champs ...";}
?>
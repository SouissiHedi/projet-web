<?php
require'../config.php';

$prod1=$_GET['IdProd1'];
$prod2=$_GET['IdProd2'];


$sqlquery0 = "INSERT INTO echange(IdProd1,IdProd2) VALUES (:IdProd1,:IdProd2)";

$step=$conn->prepare($sqlquery0);
$step->bindParam(':IdProd1',$prod1,PDO::PARAM_INT, 20);
$step->bindParam(':IdProd2',$prod2,PDO::PARAM_INT, 20);

$step->execute();
?>
<?php
require '../config.php';

if(isset($_POST['inputNameP']))
{
    $id = $_POST['inputNameP'];
}

$nb = fopen($_FILES['inputlink']['tmp_name'],'rb');

if(isset($_POST['inputState']))
{
    $event = $_POST['inputState'];
}
if(isset($_POST['inputdesc']))
{
    $sugg = $_POST['inputdesc'];
}

$sqlquery0 = "INSERT INTO produit(NomProduit,lienImg,Description,Type) VALUES (:NomProduit,:lienImg,:Description,:Type)";

$step=$conn->prepare($sqlquery0);
$step->bindParam(':NomProduit',$id,PDO::PARAM_STR, 20);
$step->bindParam(':lienImg',$nb,PDO::PARAM_LOB);
$step->bindParam(':Description',$sugg,PDO::PARAM_LOB);
$step->bindParam(':Type',$event,PDO::PARAM_STR, 40);

$step->execute();
header("Location: addform.php");

?>
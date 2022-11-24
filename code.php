<?php
require 'config.php';


if(isset($_POST['delete-produit']))
{
    $produit_id = $_POST['delete-produit'];

    $query = "DELETE FROM produit WHERE IdProd='$produit_id'";
    $query_run = $conn->query($query);

    if($query_run)
    {
        header("Location: table.php");
        exit(0);
    }
    else
    {
        header("Location: table.php");
        exit(0);
    }
    
}




if(isset($_POST['update']))
{
    $produit_id =$_GET['IdProd'];
    $NomProduit =$_POST['NomProduit'];
    $Description =$_POST['Description'];
    $Type = $_POST['Type'];
    $valeurP = (int) $_POST['valeurP'];
    
    $update_query="UPDATE produit SET  NomProduit=:NomProduit , Description=:Description, Type=:Type, valeurP=:valeurP   WHERE IdProd=:produit_id  ";
    $step=$conn->prepare($update_query);
    $step->bindParam(':produit_id',$produit_id,PDO::PARAM_INT , 20);
    $step->bindParam(':NomProduit',$NomProduit,PDO::PARAM_STR, 20);
    $step->bindParam(':Description',$Description,PDO::PARAM_LOB);
    $step->bindParam(':Type',$Type,PDO::PARAM_STR, 40);
    $step->bindParam(':valeurP',$valeurP,PDO::PARAM_INT , 20);

        
    $step->execute();  
    header("Location: table.php"); 
}




?>
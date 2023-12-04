<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleGrid">
</head>
<body>

<?php include_once('Entete.php');?>
<div class="content">
    <?php
    /*insere les donne dans sql
    
    pr inserer  de nouveaux enregistrement dans une table , on se sert de la commande sql inseet into 
    les chaine sont placée entre apostreopher , excepté les valeur numerique ou la valaur numerique ou la valeur NULL,s'il n a pas de donné a inséree . il ya de valeur que de champ*/
    $con = mysqli_connect("localhost","root", "", "casse2");
    if(mysqli_connect_errno()){
        echo"erreur de connection à la basse ". mysqli_connect_error().
        exit();
    }
    //on créla requete sql 
    $sql= "insert into personne (NumAch,Num,age, Ville, sexe,) values('',alain, 32, 'monchester', 'M')";
    //Echo "inserte réaliséé avec succés "
    $result = mysqli_query($con,$sql) or die ("echec de la requete insrt");
    //ferme la connection à la bdd 
    mysqli_close($con);
    
    ?>
    <?php include_once('Footer.php');?>

</div>
  
</body>
</html>
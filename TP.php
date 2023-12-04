<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleGrid.css">
    <title>Document</title>
    

</head>


<body>
<?php 
include_once('Entete.php');
?>
 <div class= "content">  
<?php

//exso 1
$fuseau = date_default_timezone_get();
echo $fuseau;
echo "<br>";
echo date("j m y"). "<br>"; 
echo date("n m s")."<br>"; 


//exso 2
setlocale(LC_TIME, "french");//on definit le jour en francais
echo strftime("%A"). "<br>"; 

//exso 3
 $anneeDeNaissance = "1997";
$jj=date('Y');
$datte =$jj-$anneeDeNaissance;
echo $datte;
echo "<br>";
//ex4


 //date et heures    
   $dateTemps = date("Y-m-d");    
     echo "date: $dateTemps";


/* 1correction
$maDatetemps = date ("Y-m-d H:i:s");
echo"<br><br>Date actuelle de ce mecredi : $maDateTemps ";

2Affiche le jour de la semaine 

$jourdelasamaine = date("");
echo"aujourd' huit, c'est $jourdelasamaine ";

3caclul age
$anneDeNaissance = 1998;
$anneeActuelle = date ("Y")
$age = $anneeActuelle - $anneDeNaissance ;
echo"<br><br> VOUS avez $age ans. <br><br> ";
 
4 date personnaliée
$data1 = "25/12/2022";
$timestamp = strtotime($data1);

*/

?>
 </div>
 <?php
include_once('Footer.php');
?>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleGrid.css">
</head>
<body>
<?php include_once('Entete.php');?>

     <div class="content">
<h1>voici mon contenu</h1>
<!--LES TESTE EN PHP-->
    <!--Elle permettent d'execute des bloc en fonction d'une condition qui doit etre vériable .on distingue les structures conditionnelle (ou teste )et les structure de boucles  -->
   <!--les structure condit° : if, if ...else et else et elseif ou switch et les trnaires -->
   <?PHP
    $a = 7;
    if($a >1){
        echo "la valiable  $a  est plus grand que 1.";
    }
//teste if ...else 
$b = 5;
$c = 7;
if($b>$c){
    echo"teste if else : la variable $best plus grand que $c .<br>";
}else{
    echo "Teste if else : la $b est plus petit ou égale à $c<br>";
}

//test elseif 
$d = 5;
if ($d <6){
    echo"la variable $d est plus petit que 1 ";
}elseif($d > $e){
echo "la variable $d est plus grand $e";

}else{
    echo"la variable $d est égale à $e";
}
//operatation de comparaison 
/*
==égale à 
!= différent de 
>strictemeut supérieure à 
>structeur inférieure à 
>= superieur égale a 
<=inferieur egale à  

*/
//on utilise la fonction var_dump() pour obterver le comportement de nos tests . elle revoie une valeur boolenn (true ou false).

$nbre = 5;
$nbre2 = 10;
var_dump($nbre == $nbre2);
echo "<br />";
var_dump($nbre != $nbre2);
echo "<br />";
var_dump($nbre > $nbre2);
echo "<br />";
var_dump($nbre < $nbre2);
echo "<br />";
var_dump($nbre >= $nbre2);
echo "<br />";
var_dump($nbre <= $nbre2);

echo "<br />";
echo "<br />";

//  $nbre  = 5 ;
// $nbre = 10;
//  echo"la condition 1 est : " , var_dump($nbre == $nbre);
// echo "<br>";
//  echo" la condition 2 est : ", var_dump($nbre != $nbre);

// echo "</br>",
// var_dump($nbre == $nbre2); 
// echo"la condit° 3 est : ,"; 
// echo"la condit° 4 est : ", var_dump($nbre > $nbre2); echo "<br>";
//  echo"la condit° 5 est : ", var_dump($nbre > $nbre2); echo "<br>";
//  echo"la condit° 6 est : ", var_dump($nbre > $nbre2); echo "<br>";


/* peemettent de combiner des teste et des condition */
$nb = 15;
$nb1 = 8;
$nb2 = 1;

if($nb && $nb1 && $nb2){
    echo "Les variables $nb, $nb1, $nb2 contiennent des valeurs différentes. <br />";
}else{
    echo "Une des varaibles contient false comme valeur. <br />";
};

if($nb >= 10 || $nb1 >= 10 || $nb2 >= 10)
    echo "La variable $nb2 a une valeur équivalente à false. <br />";
if(!$nb2){
    echo "La variable $nb2 a une valeur équivalente à false. <br />";
}else{
    echo "La variable $nb2 a une valeur équivalente à true. <br />";
};
    ?>
     </div>
 
<?php include_once('Footer.php');?>
</body>
</html>
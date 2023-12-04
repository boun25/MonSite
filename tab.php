<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="styleGrid.css">
</head>
<body><?php 
include_once('Entete.php');
?>
    <div class= "content">
<h1>mes table </h1>


    <?php
    $tb = [ 'paris', "londres",'berlin', "rome"];
     //echo $tb[1];
     echo"sans count <br>";
     for ($i = 0 ; $i<3;$i++){
        echo $tb[$i],"<br>";
     }

   echo "<br>";
   echo "<br>";

     $tab = [
      'paris'=> 'france',
      'rome'=> 'Italie',
      'berlin'=> 'allemagne',
      'berne'=> 'suisse',
     ];
     
     echo $tab['berlin'];
     //parcourir un tel tableau il faut employer la boucle 
     foreach($tab as $ville => $pays){
        echo $ville. "->".$pays."<br>";
     }


     echo "<br>";
     echo "<br>";
//creation du table de 9 element 
for ($i=0; $i<=8;$i++){
    $tab2[$i] = pow (2,$i);
    }
    $val = "valeur";
    echo $val, "<br>";
    //lecture des valeur du tableau
    echo "les puisaances de 2 sont : ","<br> ";

  foreach($tab2 as $val){
    echo$val.":";
}

    echo "<br>";
     echo "<br>";
     //creer table association dont les clés sont les identifiants et associei a chacha un chacun un code aleatoire copris en 100 et 1000 puis lit ete affiche les vap
     //création une tableau 
     for($i = 0; $i <=8 ; $i++){
        $tob ['client'. $i ] = rand (1000,1000);
     }
     
     //lecture des clé et ds valeur 
 foreach($tob as $cle =>$val){
    echo "le client de login <b>$cle<b> a le code <b>$val</br><br/>";
 }

 echo "<br>";
 echo "<br>";
for($i=0 ; $i<= 10; $i++){
    $tab3[$i] = pow(2,$i);

}
//lecture des indices et des valeur 
foreach($tab3 as $ind => $val){
   
}
 echo"<br> dernier indice" .$ind,", dernier valeur ",$val, "<br/><br/>";


$Teb =  array(
array ("<b>LIBRAIRIE </b>","<b>TITRES</b>","<b>REMISE</b>"),
array ("libredie"," GOOGLE sheets","40%"),
array ("fnac","","40%"),
array ("libredie","titres","78%"),
array ("libredie","titres","40%"),

);

echo "<table border width=\"50%\">";
//lecture de chaque lignee
foreach ($Teb as list ($librairie, $titre, $remise )){
    //j'affiche les donne des cases d'un tableau
    echo "<tr><td>".$librairie. "</td>"."<td>".$titre."</td>"."<td>".$remise."</td></tr><br>";
};
echo "</table>";
//je replis les donnée dans mon tableau 
//$tab =
echo "</table>";
echo "<br>";
 echo "<br>";

 $tablo[1] = "pomme";
 $tablo[2] = "poire";
 $tablo[3] = "orange";
 $tablo[4] = "cerise";
 $tablo[4] = "mangue";
 //je relie les element en les affichant dans le browser
 echo"ol";//je prepare une liste numérotee
 for($i=1; $i<5;$i++){
    echo"<li>". $tablo[$i]."</li>";
    // j' affiche chaque élément de tableau

 }  
 echo"</ol>";
 echo"<br>";
 
 $tablo1[] = "stylo";
 $tablo1[] = "creion";
 $tablo1[] = "gomme";
 $tablo1[] = "régle";
 $tablo1[] = "cahier";
//je relie élément en commencant par 0
 for($i=0; $i<count($tablo1);$i++){
    echo $tablo1[$i]."<br>";
 }
 echo"<br>";
 echo"<br>";
 $tablo2= ["voiture","vélo","moto","comion","Bateau"];
echo "<br>";
print_r($tablo2);
/*en résumé
les tableau sont des structure de variation complexes a une ou plusieur diment un indice numerique ou texte 
permet de recuperer la valeur d'un case d'un tableau dans un indice numerique on utiser une boucle for ou while pour lire les element d'un table 
dans le cas d'un indice de type il faut enploier la boucle foreach
les tableau servent aussi a orga */

    ?>

    </div>
    <?php include_once('Footer.php');?>
</body>
</html>
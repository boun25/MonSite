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
    <h1>c'est mes fonction</h1>

 une fonc correspon à une serie d'intruction qui effectuent une tache specifique . opur executer une fonction il faut appeler la fonc par son nm en placant ou non des paranatre . on parle souvent de fonc personnali quand ont
        <?php
        function bonjour(){
            print("salut jean ");
        }
        bonjour();
        echo"<br>";
        function bonjour1($prenom){
            print("salut " .$prenom);
        }
        bonjour1("ani");
    //operat nunerique dans les fonction 
    function addition($nbre1,$ndre2){
        $resultat = $nbre1+$ndre2;
        echo "<br>". $resultat;
    }
    addition(1,2);
    echo"<br>";

    function calcultva(){
        return 100*1.2;
    }
   //j'execute ma conction calcule en l'appelant 
    echo "fonction calcul tva1 : " .calcultva(). '<br>';
    echo"<br>";

    function calcultva2($nombre){
        return $nombre *1.2;
    }
    //execution de la fonction 
    echo calcultva2(500).'<br>';
    echo calcultva2(2500).'<br>';

    echo "<br>";
    function calculTva3($montant, $taux){
        return $montant*$taux;
    }
    //resultat de la fonction 
    echo "500€ avec taux de 5.5% fonc : " .calculTva3(500,1.055).'<br>';
    echo "4000€ avec taux de 20% fonc : " .calculTva3(4000,1.2).'<br>';
    echo"<br>";
    echo"<br>";
    function afficherdate($jr, $m ,$annee){
        echo $jr. ' ' .$m. ' ' .$annee;
    }
    afficherdate(25,'octobre',2023);

    echo"<br>";
    echo"<br>";

    function test($nom){
    echo $nom; 
    }
    // notification de portee de variable 
    /*la portée de variables indique l'emplacement dans lequel elle est accessible une variable peut etre locale ou globale 
    toute variable difini en dehors d'une foction a ala pertée globale
    toute fonction déninie à linterieur d'une fonction aura une porte locale à la fonction .cela signifie que la variable ne sera pas accepte qu'au sein de la fonct et sera detruite des la fin de l'execution de ladite fonction 
    toute variable definier dans une fontion avec le mot clé globale eara considerée comme 
    */ 
    function calcul_remise($h1){
        global $taux_remise ;
        $taux_remise = 0.3;
        return $h1* $taux_remise;
    }
    //une fonct qui calcule la tva
    function calcTVA($h2){
        global $taux_tva;
        $taux_tva=0.2;
        return$h2*$taux_remise;
        }
    $ht = 100;//le hor taxe 
    //je recup la remise a détruire 
    $remise = calcul_remise($ht);
    echo "la remise est : " .$remise. "<br>";
    //tva à ajouter
    $tva = calcul_remise($ht);
    //cacul ttc 
    $ttc = $ht -$remise+$tva;
    //le ttc
    echo "le ttc est : " .$ttc. "<br>";

   /**autre fonction  */

   /**Une variable statique déclarée à l'intérieur d'une fonction à l'aide de l'instruction static permet à une celle-ci de garder sa valeur-à chaque appel de la fonction. L'initialisation d'une variable static se fait au début de la fonction et à chaque appel de la fonction dans le script et elle gardera la valeur du dernier appel. */

   echo "<br/>";
   echo "<br/>";

    echo "Autre type de fonction avancees";

    function stat_fonc(){
        static $cpt = 0;
        $cpt ++;
        echo $cpt;
    }
    echo "<br/>Au premier affichage , cpt vaut :  " ; stat_fonc();
    echo "<br/>";
    // doit afficher 2 car la premier appel initialise $cpt a 0 une seule fois et l'incriment de 1

    echo "<br/>Au premier affichage , cpt vaut :  " ; stat_fonc();
    echo "<br/>";

    echo "<br/>Au premier affichage , cpt vaut :  " ; stat_fonc();
    echo "<br/>";

    echo "<br/>Au premier affichage , cpt vaut :  " ; stat_fonc();
    echo "<br/>";

/*" 2) FONCTIONS AVANCEES
Il existe trois fonctions utilisées dans la gestion des arguments passés à une fonction dans PHP. Il s'agir de : func_get_arg qui permet de lire un argument spécifique
func_get_args pour obteni l'ensemble des arguments sous forme d'un tableau func_num_args pour connaitre le nombre d'arguments reçu par la fonction */

function gest_args_1(){
    //fonction special ou qand elle est appele 
    $numargs = func_num_args();
    echo "<b><u> gestion_arg_1 </u></b> ";
    echo "<br/> nombre d'argument de la fonction 1 :  $numargs \n <br/>"; 
//affiche le nbr d'argument renseigne  dans l'appel de  la fonction
}
gest_args_1(89,698);

echo "<br/>";
echo "<br/>";



function gest_args_2(){
        $numargs = func_num_args();
        echo "Nombre d'argument :  $numargs\n<br/>";
        if($numargs >=2){
            echo "le premier argument est : " .func_get_arg(0) . "\n <br/>";
            echo "le deusieme argument est : " .func_get_arg(1) . "\n <br/>";
            echo "le troisieme argument est : " .func_get_arg(2) . "\n <br/>";
        }
    }
    gest_args_2(85,69,25);

/***Vous pouvez vous trouver dans le cas ou vous ne savez pas quelle fonction devra être appelee a un moment precis dans un script donne. Pour cela, il suffit de placer dans une variable le nom d'une fonction, puis d'utiliser cette variable comme une fonction. */

    //fonction dynamique 

   echo "<br/>";
   echo "<br/>";
   function ecrire($texte){
    print("<B>$texte</B>");
   }
function ecrireEnGras($texte){
    print("<i> $texte </i>");

}
 $function_var = "ecrire"; 
 $function_var  ("toto"); // affiche toto
 echo "<br/>";
 echo "<br/>";
 
 $function_var = "ecrireEnGras"; 
 $function_var  ("toto"); //affiche toto en italique 

 /*LA RECURSIVITE
 Le langage PHP supporte les fonctions récursives. Une fonction récursive est une fonction qui s'appelle elle-même.
 Un exemple simple présentant le principe de la récursivité: Affichage à l'envers d'une chaine de caractère. */
 $str =" bonjour  !";

 reverse_r($str);
 function reverse_r($str){
    if(strlen($str) > 0) {
        // sbstr retourne le premier caractère 
        reverse_r(substr($str, 1)); // appel récursif 
        echo "<br />";
        echo substr($str, 0, 1); // affiche un caractère
        return;
    }
 }

/**les fonction récursive sont principalement utiliséés pour naviguer dans les structur de donnés dynamique liste et arbres
 Autrement, dans de nombreux cas, la récursivité est équivalente à une répétition (ou itération). Les fonctions
consomment plus de mémoire que les itérations.
*/
echo "<br/>";
echo "<br/>";
$str_1 ="salut les amis ";
reverse_r ($str_1);
function reverse_r_1($str_1){
    for ($i =1;$i <=strlen($str_1);$i++){
        echo substr($str_1, -$i, 1 );// affiche un caractere en partant de la fin 
    }
    return;
}
echo "<br/>";
echo "<br/>";


function mafonction($nom){
    return $nom;
}
$lenom = mafonction ('izak');




function nomcomplet($lenom ,$prenom){

    echo $lenom.  " " .$prenom;

}

nomcomplet($lenom ,'boun');



/*  ************* autre****************/
echo "<br/>";
echo "<br/>";

    function amie($ami){
       return $ami;

    }
 $amie1 = amie ('dine');


function toutLesAmie($amie1,$amie2,$amie3){
    echo $amie1. ' ' .$amie2. ' ' .$amie3;
}


toutLesAmie($amie1, "ttt", "ooo")

        ?>
</div>
    <?php include_once('Footer.php');?>
</body>
</html>
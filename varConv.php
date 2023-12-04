<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $var = '3.5 kilométre';
    $var2 = (double) $var;
    echo "\var2=", $var2, "<br/>";
    $var3 = (integer) $var2;
    echo "\var3=", $var3, "<br/>";
    $var4 = (boolean) $var3;
    echo "\var4=", $var4, "<br/>";
// vous avez la possibilite de modifier le type de la variable elle-meme de la fonction settype().

 echo settype($var, "floar");
 echo "<br>";
 echo "<br>";
 echo " utilisateur de settype ()";
 echo "<br>";
$vall = "35.5 ans";
settype($vall,"doule" );
echo "\vall=", $vall, "<br/>";
echo "<br>";
settype($vall,"integer");
echo "\vall=", $vall, "<br/>";
echo "<br>";
settype($vall,"boulean");
echo "\vall=", $vall, "<br/>";
/**
 * CONTROLER L'ETAT D'UNE VARIABLE * Lors de l'envoi de données d'un formulaire vers le serveur, le script qui reçoit les informations doit pouvoir détecter l'existence d'une réponse dans les champs du formulaire. Les fonctions isset() et empty() permettent ce type- de controle. * La fonction isset() retourne une valeur false ou e si la variable existe mais n'est pas initialisée ou si elle a la valeur NULL, et la retourne TRUE ou 1 si elle a une valeur quelconque. Il peut y avoir plusieurs paramètres dans cette fonction mais ils doivent tous répondre à cette même condition pour que la fonction retourne la valeur TRUE.
* La fonction empty() retoure la TRUE si l'expressipon passée en paramètre n'est pas initialisée, a une des valeurs suivantes: NULL, FALSE, la chaine "0", ou est un tableau vide, et la valeur FALSE si elle a une quelconque autre valeur.* 
 */

$a = null; si (isset ($a)){
 echo "\$a existe dejç <br />";
}else{
    echo "\$a n'existe pas <br />";
}
if(empty($a)){
    echo "\$a est vide <br />";
}else{
    echo "\$a  a la valeur $b<br />";
}
$c=1;
if(isset($c)){
    echo"\$c  existe deja  <br/>";
}else{

    echo "\$c n'existe pas <br />";
}if(empty($c)){
    echo "\$c est vide <br />";
}else{
    echo "\$c a la valeur $c <br />";

}
/**Pour une valeur numérique affectée à la variable $c, les deux fonctions retournent TRUE. Ces fonctions, et en particulier isset(), vous permettront de vérifier si un utilisateur a bien rempli tous les champs d'un formualire. */
    <!---->
    
    
    ?>
</body>
</html>
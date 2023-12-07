<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <?php
    /*
    PHP permet non seulement de créer des pages contenant du texte affiché dynamiquement mais également des images dynamiques en fonctions des besoins. Il eest question ici de voir comment créer des images aux formats gif, jpeg, png et même wbmp à destination des terminaux mobiles.
    PHP est livré avec l'extension GD (Graphic Device). La version actuelle, livrée vous permet de créer des images aux formats cités plus haut.
    
    echo phpinfo();

    principes généraux 
    sur le serveur local instalé par Wampserveur ou MAMP , l'ewtention GB est installée par défaut . sur un serveur sur lequel elle ne serait pas disponible vous docomment la liqne suivante en supprimant le point vigule au début de la ligne 
    extention = <php_gd2 class="d11">cette ligne se trouve dans le fichier PHP.ini

    Les scrripts de création d'image doivent suivre les étapes suivantes:
1. Envoi d'un entête précisant le type d'image qui sera envoyé du serveur vers le navigateur. On trouve aussi la fonction header() sous la forme suivante pour une image de type PNG:
header("Content-type: image/png");
2. Création du cadre de l'image dans lequel vont être tracés les éléments de l'image en appelant la fonction imagecreate(), qui définit les dimensions de l'image en pixels et réserve l'espace mémoire nécessaire sur le serveur.

3. création des couleurs qui vont être utilisées pour effectuer les tracés en utilisant les codes décimaux des couleur BGB(red,Green,bleu)
à l'aide de la fonction imagecolorallocate ()
4. Tracé des formes géométriques dans le cadre. Les formes disponibles sont variées.
5. Ecriture du texte dans l'image à l'aide des polices incorporées ou de police TrueType ou FreeRType.
6. Envoi de l'image créee vers le navigateur ou dans un fichier image enregistré sur le serveur et utilisable dans n'importe quelle page ou image au moyen de l'élément HTML <img>.
7. libération facultative de l'espace mémoire occupé par l'image sur le serveur à l'aide de la fonction imagedestroy().


*/
header("Content-type: image/png");
//Cration du cadre 800x400 pixels
$id_img= imagecreate (800, 400);
// Création des couleurs
$fond =imagecolorallocate($id_img, 255,255,51);
$noir=imagecolorallocate($id_img, 0,0,0);


//TRACE des formes 

//Enregistrement l'image dans un fichie 
imagepng($id_img, "imagedwwm.png");

//Envoie de l'image au navigateur 
imagephp($id_img);
//libération de l'espace memoie 
imagedestroy($id_img);


?>
</div>
<img src="imagedwwm.png" alt="">
</body>
</html>
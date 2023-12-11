<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="content">
   <h1>création des tracée d'arc de cercles et d'ellipses</h1>

   <?php
/*pour tracer des arcs de cercle ou des ellipses, vs disposez dela function imagearc() , dont la syntaxe est la suivante:
int imagearc (resource $idimg , in tXc, int Yc, int Larg , int Haut , int ang1, int Ang2, int $couleur).
Les paramétre Xc et Yc sont les coordonnées du centre . Larg et Haut représentent la largeur et la hauteur (égaux pr le cercle). Ang1 et Ang2 sont es angles en degrés, qui permettent d'indiquer la portion de cercle ou d'ellipse qui sera représentée. L'origine des angles est la positon horaire 3 heures, et le sens positif est horaire.

Poir créer des secteurs circulaires ou elliptiques pleins, vous utilisez la fonction imagefilledarc (), dont la syntaxe est quasiment identique:
bool imagefilledarc (resource $idimg, int Xc, int Yc, int Larg, int Haut, int Ang1, int Ang2, int $couleur, int style).
Le paramètre supplémentaire style est une constante entière, qui peut prendre les valeurs suivantes:
IMG_ARC_PIE: le secteur est plein, et les rayons sont tracés. Vous obtenez un
camembert


IMG ARC PIE. Je secteur est plein, et les rayons sont tracés. Vous obtenez un
camembert.
IMG ARC NOFILL : seul Le contour est tracé sans les rayons. Dans ce cas, vous utilisez
de préférence Imagearc().
IMG ARC CHORD. les rayons et la corde qui relie les extrémités de l'arc sont tracés,
et le complément du secteur tracé est rempli . vous obtenez un triangle isocède doin
vous connaissez l'angle au sommet .
Pour tracer des cercles ou des ellipses complets, il est simple d'utiliser la fonction
bool Imagefilledeclipse resource slime, Int xe, int re, Int Late, Int Haut, Int
Angel, int Ang2, int scouseur, Int style).
SI
*/
header("image/png") ;
$idimg = imagecreate (800,400);
$fond = imagecolorallocate($idimg,255,255,51);
$noir =  imagecolorallocate( $idimg,0,0,0,);$rouge = imagecolorallocate($idimg, 255,0,0);
//Tracé d'arc
imagearc($idimg,200,100,180,180,180,360,$noir);
imagearc($idimg,200,100,140,140,180,360,$noir);
imagefilledarc($idimg,500,200,480,300,0,290,$rouge,IMG_ARC_PIE);
//tracé d'ellipses
imageellipse($idimg,200,150,100,50,$noir);
imagefilledellipse($idimg,120,300,200,80,$rouge);
imagepng($idimg,"cercle.png");
imagedestroy($idimg);
?>

<img src="cercle.png" alt="">
    </div>
</body>
</html>
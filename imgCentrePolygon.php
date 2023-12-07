<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <div class='content'>
    <h1>gestion deimage </h1>


    <?php
header("image/jpeg");
$myImg = imagecreate (800,400);
$fond = imagecolorallocate ($myImg, 255, 255,51);
 $noir= imagecolorallocate ($myImg,0,0,0);
$blanc = imagecolorallocate ($myImg, 255, 255, 255); 
//Définition de l'épaisseur de trait de 3 pixels imagesetthickness ($my Img, 3);
imagesetthickness($myImg,3);
//Coordonnées du quadrilatère 

$tab = array(100,50,500,100,750,300,50,350);
//tracé du quadrilatère
imagepolygon ($myImg, $tab, 4, $noir);
//Tracé du Triangle plein
imagefilledpolygon ($myImg,array(150, 80, 500, 150, 250, 310), 3,$blanc); 
imagejpeg($myImg,"polygon.jpeg");
//destruction de l'image pr libere la memoir  
 imagedestroy($myImg);
?>
<img src="polygon.jpeg" alt="">
</body>
</html>
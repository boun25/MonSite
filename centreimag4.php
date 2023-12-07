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
  header("image/gif");
  //tracé du rectangle 
    $mypicture=imagecreate(800,400);
    //les couleur 
    $fond = imagecolorallocate($mypicture,255,255,51);
    $rouge = imagecolorallocate($mypicture,0,0,0);
    //défonition de l'epaiseur de trait de 3 pixels
    imagesetthickness($mypicture,3);
   //tracée des rectengle
      for($i=3;$i<100;$i+=20){
        imagerectangle($mypicture,$i,$i,800-$i,400-$i,$rouge);
      }

imagefilledrectangle($mypicture,100,100,700,300,$rouge);
imagegif($mypicture,"rectangles.gif");
imagedestroy($mypicture);

?>
 <img src="rectangles.gif" alt="">
</body>
</html>
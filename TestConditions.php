<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleGrid.css">
</head>
<body>
<?php 
include_once('Entete.php');

?>
     <div class="content">
      <h1>teste condition</h1>

        <br>
            
            <?php
            
            $tarif= 200;
            $remise = 0.05;

            $prix_net = $tarif*(1-$remise);
            echo $prix_net;

            if($prix_net>1500 )
            echo"<br> super cher";
               elseif($prix_net>1000) 
            echo"<br> acceptable ";
               else
           echo "<br> on signe ou ";

            echo "<br>";
            echo "<br>";
            echo "<br>";
          echo "début de mon application de code postal";
          echo "<br>";
          echo "//------------------------//";
          echo "<br>";

          $code_postale = "75000";
          if(substr ($code_postale,0,2)=="45")
          echo"orleans";
        elseif (substr($code_postale,0,2)== "75")
            echo "paris";
            elseif (substr($code_postale,0,2)== "69")
            echo "lyon";
            elseif (substr($code_postale,0,2)== "29")
            echo "quempere";
            elseif (substr($code_postale,0,2)== "94")
            echo "saint maur";
        else{
            echo"province";
            }

            echo "<br>";
            echo "//------------------------//";
            echo "<br>";
            //appli codfe_postalme avec switch 

            $codepost = "69380";
            switch(substr($codepost,0,2 )){

              case "69":
              echo"lyon";
              break;

              case "33":
                echo"bordeaux";
                break;

                case "31":
                    echo"toulouse";
                    break;

               case "45":
                   echo"orleans";
                    break;
                default:
                echo "ailleurs";

            }

/*avec le switch , le code peut tester plusieur cars les uns à la suite des autre .mais switch ne peut tester que des  */
echo"<br>";
 echo"//------------//";
 echo"<br>";
 //teste av la condt ternaire
 //les condit° ternaire sont des expression dans les quelle les condition vrais et fausse sont ecrites sur nue meme ligne 


 $i = 5;
 while ($i < 9) {
     echo $i;
     $i++;
 }
 


            ?>
            
   </div>         
   <?php include_once('Footer.php');?>
</body>
</html>
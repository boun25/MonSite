<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="styleGrid.css">
   
    <title>Document</title>
</head>
<body>
    <div class="content">

    <?php
        $hab = 15230;
        echo $hab;

        echo '<br>';

        $hab = 102;
        echo $hab;

        echo '<br>';

        $ville = 'Orléans';
        $dep = 'Loiret';
        $titre = $ville." ".$dep;
        echo $titre;

        echo '<br>';

        $nn='Salut';
        $mm="Bob";
        $pp='copain';

        $affich = $nn.' '.$mm.', tu veux être mon '.$pp.' ?';
        echo $affich;

        echo '<br>';

        $a = 1;
        $b = 3;
        $a = $a+2;
        echo 'premier '.$a;

        echo '<br>';

        $a = $a*$b;
        echo 'deuxième '.$a;
        echo '<br>';
        $a = $a -1;
        echo 'troisième '.$a;
        echo '<br>';
        $a = $a/4;
        echo 'quatrième ',$a;//on peut aussi utiliser une virgule comme séparateur
        echo '<br>';
        print('cinquième '.$a);
        echo '<br>';


    ?>
    </div>
    
</body>
</html>
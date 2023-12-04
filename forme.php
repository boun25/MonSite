<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset{border:double medium blue; padding: 20px;}
        input[type=texte],input[type=date]{
    /** Largeur dela zone de saisie*/
    width: 200px;
    /* position absolute qui ne dépend pas des autre objets */ 
    position: absolute;
    /*position gauche*/ 
    left: 160px;
    /* Police de la famille */ 
    font-family:sans-serif;
    /*taille du caractère*/ 
    font-size: 14px;
        }
    label{
    font-family:sans-serif; 
    font-size: 14px;
     }

    </style>
</head>
<body>
<div>
    <form action="traitemnebt2.php " mothod="POST">
       <fieldset>
        <legend>identité: </legend>
        <label>prenom:</label><input type="texte" name="prenom" size="30" /><br><br>
        <label>nom:</label><input type="texte" name="prenom" size="30" /><br><br>
        <label>date de naissance :</label><input type="date" name="dn" /><br><br>
        <label>Email:</label><input type="text" name="em" /><br><br>
       </fieldset> 
    </form>

    <fieldset>
        <legend> localication pro</legend>
        <input type="radio" name ="prof" value="france">france<br>
        <input type="radio" name ="prof" value="Italie">Italie<br>
        <input type="radio" name ="prof" value="allemagne">allemagne<br>
    </fieldset>

</div>

</body>
</html>
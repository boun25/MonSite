<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleGrid.css">
</head>
<body>
    <h1>recherche ici </h1>
    
    <form action="" method="post">
    RECHERCHE UN NOM :<input type="text"name= "recherche">
                   <input type="submit"value= "recherche">
    </form>


    <?php

    
    $db_server = 'localhost' ; //adresse du serveur mysql
    $db_user = 'root';//nom utilisateur 
    $db_user_pass = ''; //mdp
    $db_name = "casse2";// nom basse 
    //connecte au serveur mysql
    $conn = mysqli_connect($db_server, $db_user,$db_user_pass,$db_name);
    //je recupére la recherche 
    $recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';
    
    // j'écris la requete sql
    $q = $conn->query(
    "select nom, ville from personne
    where nom like '%$recherche%'
    or ville like '%$recherche%' 
    limit 10");

    // j'affiche le résultat
    while ($r = mysqli_fetch_array($q)){
        echo' resulta de la recherche : ' .$r ['nom'].', '.$r ['ville'].'<br/>';
    }


    ?>
</body>
</html>

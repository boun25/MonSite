<?php

function dbConnect(){
    $serverName = 'localhost';
    $user = 'root';
    $password = ''; // mac user
    $databaseName = 'membre';

    $connexion = mysqli_connect($serverName, $user, $password, $databaseName);
    if(!$connexion){
        die('Failed to connect: ' . mysqli_connect_error());
    }

    return $connexion;
}


function checkUser($login, $db){
    // verifier que le user soit rempli
    if($login_ !== ""){
    // verifier que le user n'existe pas dans la BDD:
        $sqlRequest = "select user from membre where user like '$login_';";
        $result = $db->query($myRequest);
        if($r = mysqli_fetch_array($result)){
            // echo 'Résultat de la recherche : ' .$r['id_contact'].'<br>';
            return true;
        }else{
            return false;
        }
    }
    // si le user est vide : 
    return false;
}



// Probleme ici
// function checkUser($login, $connexion){
//     if($login !== ""){
//         $sqlRequest = "SELECT user FROM membre WHERE user LIKE '$login';";
//         $result = mysqli_query($connexion, $sqlRequest);
        
//         if(mysqli_num_rows($result) > 0){
//             return true;
//         } else {
//             return false;
//         }
//     }
//     return false;
// }

// Vérifier que les champs ne sont pas vides et qu'il n'y est pas d'espaces dans les mdp
if(isset($_POST) && isset($_POST["login"], $_POST["password"], $_POST["password2"]) && trim($_POST["login"]) !== "" && trim($_POST["password"]) !== "" && trim($_POST["password2"]) !== ""){
    $cnx;
};

$con = dbConnect();

@$login = htmlspecialchars($_POST["login"]);
@$pwd = md5(htmlspecialchars($_POST["password"]));
@$pwd2 = md5(htmlspecialchars($_POST["password2"]));

if(checkUser($login, $con)){
    echo "Ce nom d'utilisateur existe déjà";
}elseif($pwd != $pwd2){
    echo "Les deux mots de passe ne sont pas identiques";
}else{
    $sql = "INSERT INTO user (login, password) VALUES ('$login', '$pwd')";
};

if(!mysqli_query($con, $sql)){
   echo 'Error : '.mysqli_error($con);
};

// close the connexion
mysqli_close($con);



?>
<form action="" method="POST">
<input type="text" name='login'>
<input type="password" name='password'  >
<input type="password" name='password2' >
<input type="submit" >


</form>
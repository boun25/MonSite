<?php
session_start();
if(@$_SESSION["autoriser"]!="oui"){
header("location:login.php");
exit();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
    content="width=device-width, initial-scale=1.0">
    <title>session en php</title>
</head>
<body>
    <h1>page confidentielle <a href="deconnection.php">déconnection</a> </h1>
    <div>félicitation , pour l'authentification </div>
    
</body>
</html>
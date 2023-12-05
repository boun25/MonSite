<?php
//vérification des donnés
if(!isset($_POST['nom']) || empty($_POST['nom'])){
    echo"le nom est obligatoire";
    exit ();
}
if(!isset($_POST['prenom']) || empty($_POST['prenom'])){
    echo"le prenom est obligatoire";
    exit ();
}
if(!isset($_POST['email']) || empty($_POST['email']) || !filter_var ($_POST['email'], FILTER_VALIDATE_EMAIL)){
     echo "L'adresse e-mail est obligatoire et doit être valide."; 
     exit();
}


if(!isset($_POST['motdepasse']) || empty($_POST['motdepasse'])){ 
    echo "Le mot de passe est obligatoire"; 
    exit();
}
//Echappememnt des données
//htmlspecialchars est une securite pr evite le seusi de code ds les formulaire 
$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$email = htmlspecialchars($_POST['email']);
$motdepasse = htmlspecialchars($_POST['motdepasse']);

//autre alternative
//echo strip_tags(nom);

//Connexion à la base de données
$dsn = 'mysql: host=localhost; dbname=secubdd';
$user ='root';
$pwd ='';

// echo $nom, $email, $prenom;
try{ 
    $pdo = new PDO($dsn, $user, $pwd);
}catch(PDOException $e){
echo 'Erreur de connexion à la base de données : '. $e->getMessage();
 exit();
}

//Insertion des données dans la base de données
$sql = 'INSERT INTO utilisateurs(nom, prenom, email, motdepasse) VALUES (?, ?, ?, ?)';
$stmt = $pdo->prepare($sql);
$stmt->execute([$nom, $prenom, $email, $motdepasse]);

// Affichage d'un message du succès 
echo 'Vos données ont été enregistrée !';

?>

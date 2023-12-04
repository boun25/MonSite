<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleGrid.css">
</head>


<body>
<?php include_once('Entete.php');?>
<div class="content">
    <h1>c'est mes fonction</h1>
    <!--ils sont utilises pr la gestion d'interaction d'un site et sont à la base des pages web dynamyques 
mise en  oeuvre 
un formation html est défini entre les balise form 
method : mode detrasmission vers le rerveur ds information saisies dans la formulaire action qui contion le scripte qui va trairta le formulair ou les donnée du formulair 
method comrend deux types de valeur  GET et POST
GET ; se rapporte aux données du formulaire qui seront transmise par url et variable superglobale $_GET.
POST; se rapporte aux données du formulaire qui seront transmise dans le cops de la requete utalise la variable 
sytaxe 
$date = $_GET['dt'];//Get  
$date = $_post['dt'];//poste  -->
<form action="" method="post">
    nom : <input  type="text" name="nom1"><br><br>
    prenom : <input  type="text" name="prenom1"><br><br>
    <input type="submit"> 
</form>
 <!-- m=la méthode get evoie les donnees sous forme d'une suite de couple nom/valeur ajoutés à l'url de la page applelée la parte d'une url précedéépar ?est appelle chiane de requet contien plusieur element, alors chaque element doit etre séparé par le caracter &amp par ailleur elle doit pas dépasse 255 caractéres .les donne transmise au serveur par la methode get sont visible par les utilisateur direstement dans la dd adresse du nagvigateur 
-->
<p>bonjour !</p>
<p>votre nom est <?php echo $_POST['nom1'];?> </p>
 
 <?php echo $_POST['prenom1'];?>
<p>faites un autre essais, <a href="#">cliquez ici </a></p>


<!--
GET ET POST: VARIABLES SUPERGLOBALES->
Lesque l'utilisateur valide le formulaire, l'attribut action appelle un programme PHP qui doit traiter les données. Les instructions qui permettent de récupérer les valeurs saisies dans le formulaire sont des variables superglobales, c'est à dire des variables qui seront disponibles quel que soit le contexte du script. C'est la superglobale $_POST qui nous a permis derécupérer les données fournies par le formulaire via la métode post. La liste suivante détaille toutes les variables superglobales:
C'est une association qui a pour mais de référencer toutes les variables globals efinies dans le contexte d'exécution global du script. Les noms des variables globales sont des oindex du tableau.
$_SERVER: il s'agit d'un tableau associatif contenant des informations comme les ent^tes, les dossiers et les chemins du script. C'est le serveur qui crée les entrées du tableau. Par exemple l'expression
 $_SERVER['PHP_SELF] renvoie le nom du fichier appelé avec le dossier à partir de la racine.
- $_GET: indique un tableau associatif contenant des valeurs passées au script via le protocole HTTP et la méthode GET.
 - S_POST: c'est un tableau associatif qui contient les valeurs passées au script via le serveur et la méthode POST. $_COOKIE: renvoie un tableau associatif qui contient des informations concernant le cookie. $_SESSION: renvoie un tableau associatif qui contient des informations concernant la session en cours. S_REQUEST: c'est un tableau associatif qui contient des variables d'environnement qui sont définies par le système.
-->
<?php echo $_SERVER['PHP_SELF'] ?>
<!--formulaire--> 
<h2>Renseignez les champs</h2>

<div>
    <form action="traitement.php" method="POST"> 
        <label> Nom: </label>
        <input type="text" placeholder="entrez votre nom ici" maxlength="30" autofocus=""  name="nom"/><br><br> <label>Ville: </label>
        <input type="text" placeholder="entrez votre ville ici" maxlength="30" autofocus=""  name="ville"/><br><br> <label>Code Postal: </label>
        <input type="texte" placeholder="Tapez 4 chiffres glacé" maxlength="5" pattern="[0-9]{5}"name = "cp" required/><br><br> <input type="submit" valeur="Validation">
    </forme>
</div>


<?php echo $_SERVER['PHP_SELF']?>
</div>
 <?php include_once('Footer.php');?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <div class="content">
        <h1>Session en PHP</h1>
<!-- 
    INTRODUCTION

Les sessions PHP sont une notion introduite dans la version 4 de PHP. Ces sessions sont très utiles dans la mesure où elles sont les seules à permettre un suivi fiable du visiteur dans un site.

Les sessions permettent d'enregistrer des variables propres à un utilisateur.

Une session est caractérisée par :
    - un identificateur de session
    - des variables associée à la session

IDENTIFICATEUR DE SESSION
Une session est créée par l'appel : session_start();
NB : Comme pour les cookies, la session est initialisée avec l'envoie header d'une page.

La fonction session_start() essaie de trouver un identificateur de session existant, sinon une nouvelle session est créée et un identificateur unique est assigné par PHP.

Toutes les pages utilisant les sessions doivent donc appeler cette fonction pour indiquer au moteur PHP de récupérer les informations relatives à la session.

La session, à propement parlé, est stockée coté serveur : seul l'identificateur de la session se trouve coté client.

LES VARIABLES DE SESSIONS
Une variable de session est une variable globale qui, quand elle est enregistrée elle garde sa valeur sur toutes les pages qui utilisent les sessions.

Concrètement, une fois qu'une variable de session est créee, il vous suffit de réouvrir la session pour y avoir directement accès, sans même avoir besoin de la déclarer ou de l'importer.

Les variables de sesions sont enregistrés sur le serveur. 

Cependant, on doit avoir l'identificateur de session pour retrouver les variables de l'utilisateur associées à la session. 

CLIENT / SERVEUR

En résumé :
Coté client :
un cookie ou une variable contenant un numéro ou identifiant : c'est un identificateur de session.

Coté serveur :
Un stockage contient les informations sur les variables de session.
Par défaut, le nom correspondant à la valeur de l'identificateur de session assigné. En fait, PHP utilise des fichiers pour enregistrer les variables de session mais il est possible d'utiliser une base de données ou une mémoire partagée pour le même résultat.

PRINCIPE
Les principales étapes d'utilisation d'une session sont les suivantes :
* Ouverture 
* Enregistrement des variables de session
* Utilisation de variable de session
* Suppression de variables de session 
* Suppression de la session

OUVERTURE DE SESSION 
Il existe trois possibilités pour ouvrir une session 
La plus simple et la recommandée, consiste à appler en début de chaque script la fonction session_start();
-->
<?php
session_star();
// Pour enregistrer la variable $myvar


?>
    </div>
</body>
</html>
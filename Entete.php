<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 

<style>
     nav {
        border: 1px solid #000; /* Add a 1px solid border with a light gray color */
        padding: 10px; /* Add some padding to the navigation bar */
    }

    #menu8 a {
        text-decoration: none; /* Remove underlines from links */
        margin:  10px; /* Add some spacing between the links */
        border: 5px solid red;

    }
  </style>
    </head>

<body>
 
<header>
 <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>  

        <nav id="menu8">
            <a href="index.php">Acceuil</a>
            <a href="Structure.php">structure</a>
            <a href="contact.php">contact</a>
            <a href="Lesboucles.php">boucle</a>
            <a href="variables.php">Variable</a>
            <a href="TP.php">Le_tp</a>
            <a href="date.php">date</a>
            <a href="TestConditions.php">testeCondition</a>
            <a href="tab.php">table</a>
            <a href="fonction.php">fonction</a>
            <a href="formulaires.php">formulaire</a>
            <a href="inserD.php">inserte</a>
            <a href="recherche.php">recherche</a>
            <a href="img.php">images</a>
            <a href="compCentre.php">compteur</a>
            <a href="apiHTMl5.php">les api</a>


        </nav>
     </header>
     

<?php

?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
</body>
</html>
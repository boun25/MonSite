<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>les API de html5</title>
    <link rel="stylesheet" href="styleGrid.css">
</head>
<body>
    <!--
   INTRODUCTION 
Les API de HTML5 sont des interfaces de programmation d'application qui permzettent aux développeurs d'accéder aux fonctionnalités du navigateur web à partir de Javascript. Elles sont concues pour être simples à utiliser et permettent de créer des appplications web plus riches et interactives.


    Module 1: Introduction aux API de HTML5 Les différents types d'API
    Exemple d 'API
     
    Module 2:  l'API canvas pr créer des graphiques

    modute 3 : l'API audio et vidéo : lecture des fichiers audio et video (exemple avancés)
    a voir :  storage local la gélocalisation...
    
    
    module : CANVAS
    présentation
    L'API canvas est une API graphique qui permet de créer des graphiques vectoriels en Js. Elle offre une grande flexibilité et permet de créer des graphiques de toute taille et complexite.
    Utilisation
    Pour utiliser l'API Canvas, il faut d'abord créer un élément canvas dans le document HTML. Cet élément est un conteneur pour les graphiques crées, il est possiblée de commencer à dessiner des praphique à l'aide des méthode de l'API canvas . ces méthides permettent de crée des ligne, des formes géométriquie image etc.


    la fonction getContext() prend un argument qui correspond au type de contexte graphique souhaité. Dans ce cas, on utilise le type 2d, qui est le type de contexte graphique le plus courant. 
    
    L'API Canvas propose une variété de méthodes pour dessiner des formes géométriques. Par exemple, la méthode beginPath () permet de commencer une nouvelle forme. La méthode moveTo() permet de déplacer le pointeur de dessin à un point donné. La méthode lineTo() permet de dessiner une ligne entre deux points et la méthode fill() permet de remplir une forme.

    l'api cavnas permet de controler  l'apparence  des formes gémétrique dessinées .par exmple la propriéte fillStyle permet de définir la couleur de remplissage d'une fome . la propriété strokestyle permet de définir la couleur de trait d'une forme propriété linewidth permet de définir l'epaisseur de trait d'une forme.
    exple :
    ctx . fillStyle = "red";
    ctx . strokeStyle = "blue";
    ctx . lineWidth = "5";
la méthode filltexte() permet de dissiner du texte.
exple 
ctx.fillStyle = "black";
ctx.fillTexte ("Hello, les amis!" 10, 20);

l'api permet d'utiliser des images dans les dessins .pr cela ,  onutilise la méthode drawImage().
expl:
const image = new imag ();
image.src = "image.png";
ctx.drawImage(image, 100,100 )

    -->

    <canvas id="titi"   width="900"   height="600"></canvas>
    <br><br>
    <canvas id="tata"></canvas>
    <br><br>


 <script>
    var cado= document.getElementById("titi"); 
    var ctx2 = cado.getContext("2d");
    const image = new Image();
    image.src ="image.jpg";
    ctx2.drawImage (image, 0, 0);
 </script>

 <script>
    var canvass = document.getElementById("tata"); 
    var ctx = canvass.getContext("2d");
    ctx.fillstyle = "black" ;
    ctx.fillText("Hello, les amis!",100, 100);
    
</script>


                                    
    <!-- <canvas id="toto" width="500" height="500"> </canvas>
    
  <script>


                                                //*********teste 1 */
    var canvas = document.getElementById("toto");
    var ctx = canvas.getContext("2d");

    for(var i = 0; i < 10; i++){
        for(var j = 0; j < 10; j++){
            if((i + j) % 2 == 0){
                ctx.fillStyle = "black";
            }else{
                ctx.fillStyle = "white";
            }
            ctx.fillRect(i * 50,  j * 50, 50, 50);
        }
    }

</script> -->


    
    <!-- <script>
                                                      ********teste 2*****
        var canvas = document.getElementById("cano");
        var ctx = canvas.getContext("2d");

        function drawLine(){
            ctx.beginPath();
            ctx.moveTo(0, 0);
            ctx.lineTo(canvas.width, canvas.height);
            ctx.stroke();
        }
    canvas.addEventListener("mousedown", function(e){
    
        var x = e.clientX - canvas.offsetLeft;
        var y = e.clientY - canvas.offsetTop;

        drawLine(x,y);
    });
    </script> -->


<!-- <script>
                                                       ********teste 3*****
    var canvas = document.getElementById("can"); 
    var ctx = canvas.getContext("2d"); 
    ctx.fillStyle ="red";
    ctx.fillRect(0, 0, 100,100);

    function drawCircle(){
        ctx.beginPath();
        ctx.arc(150, 100, 50, 10, 2 * Math.PI);
        ctx.fillStyle = "blue";
        ctx.fill();

    }

    setInterval(drawCircle, 1000);
</script> -->




</body>
</html>
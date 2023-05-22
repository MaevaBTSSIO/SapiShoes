<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>SapiShoes</title>
    <link href="/css/style.css" rel="stylesheet" type="text/css" />
  </head>
  <header>
    <?php 
    require("accueil/addons/navbar.php");
    ?>
  </header>
  <body>

    <!-- debut de page -->
      <div class="b">
        <div class="cadred">
          <img src="/img/DunkLowPanda.png" class="image_cadred" alt="...">
          <div class="card-body">
            <h2>Nike Dunk Low - Panda</h2>
            <p>Nike Dunk Low - Panda est l'une de nos chaussures les plus vendues</p>
          </div>
        </div>




        <div class="cadred">
          <img src="/img/ConverseCDG.png" class="image_cadred1" alt="...">
          <div class="card-body">
            <h2>Converse CDG</h2>
            <p>Profitez des Converse CDG à prix réduit</p>
          </div>
        </div>




        <div class="cadred">
          <img src="/img/AdidasLow.png" class="image_cadred2" alt="...">
          <div class="card-body">
            <h2>Adidas Forum Low</h2>
            <p>L'une de nos paires phares de notre site</p>
          </div>
        </div>
    </div>
  </br></br></br></br></br></br></br></br>

    <!-- Titre -->
      <div class="T">
        <h1><span id="TitreS">Nos exclusivités</span> du moment</h1>
      </div>

  

    <!-- Cadre -->
    <div class="b">
        <div class="cadre">
          <img src="/img/Sacai.png" class="image_cadre" alt="...">
          <div class="card-body">
            <p id="gras">Nike LD Waffle Sacai - White Nylon</p>
            <a href="" class="lien">En savoir plus</a>
          </div>
        </div>




        <div class="cadre">
          <img src="/img/NikeSupreme.png" class="image_cadre1" alt="...">
          <div class="card-body">
            <p id="gras">Nike Air Force One Supreme</p>
            <a href="" class="lien">En savoir plus</a>
          </div>
        </div>




        <div class="cadre">
          <img src="/img/AirJordanTravis.png" class="image_cadre2" alt="...">
          <div class="card-body">
            <p id="gras">Air Jordan 1 High - Travis Scott</p>
            <a href="" class="lien">En savoir plus</a>
          </div>
        </div>
    </div>

    <?php
    include("accueil/addons/footer.php")
    ?>
    
    <script src="script.js"></script>
  </body>
</html>
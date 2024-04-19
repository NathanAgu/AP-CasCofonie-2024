<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Templates/Assets/Css/menu.css">
    <title>Cofonie</title>
</head>
<body>
<div class="p-3 bg-dark text-white">
      <div class="flexMain">
        <div class="flex1">
        </div>

        <div class="flex2 text-center">
          <div><strong>Service public de la diffusion du droit</strong></div>
        </div>

        <div class="flex1">
        </div>

      </div>
    </div>
    <div id="menuHolder">
      <div role="navigation" class="sticky-top border-bottom border-top" id="mainNavigation">
        <div class="flexMain">
  
          <div class="flex2">
            <button class="whiteLink siteLink" style="border-right:1px solid #eaeaea" onclick="menuToggle()">MENU</button>
          </div>

          <div class="flex2" id="siteBrand">
            LegiCo
          </div>
    
          <div class="text-end d-none d-md-block">
            
              <?php
              if(isset($_SESSION['login']))
              {
                echo'<a href="index.php?view=connexion&action=info">
                <button class="blackLink siteLink" style="transform: translate(-0.5em);">Compte</button></a>';
                echo '<a href="index.php?view=connexion&action=deconnect">
                <button class="redLink siteLink">Déconnexion</button></a>';
              } 
              else 
              {
                echo '<a href="index.php?view=connexion&action=display">
                <button class="blackLink siteLink">Connexion</button></a>';
              }
              ?>

          </div>
        </div>
      </div>
    
      <div id="menuDrawer">
        <div class="p-4 border-bottom">
          <div class='row'>
            <div class="col text-end ">
              <i role="btn" onclick="menuToggle()"></i>
            </div>
          </div>
        </div>
        <div>
          <a href="index.php" class="nav-menu-item"> Acceuil</a>
          <a href="index.php?view=news&action=display" class="nav-menu-item"> Nouveautés</a>
          <a href="index.php?view=text&action=generalText" class="nav-menu-item"> Toutes Les Infos</a>
          <?php
          if(isset($_SESSION['role']) == 1)
          {
          ?>
          <a href="index.php?view=text&action=display" class="nav-menu-item"> Texte</a>
          <a href="index.php?view=article&action=display" class="nav-menu-item"> Article</a>
          <a href="index.php?view=amendment&action=display" class="nav-menu-item"> Amendement</a>
          <?php
          }
          ?>
          <a href="index.php?" class="nav-menu-item"> A Propos</a>
        </div>
      </div>
    </div>

  <script src="Templates/Assets/Js/menu.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



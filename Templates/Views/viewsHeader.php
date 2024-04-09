<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
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
          <div class="flex3 text-center" id="siteBrand">
            LegiCo
          </div>

          <div class="flex2 text-end d-block d-md-none">
            <button class="whiteLink siteLink"></button>
          </div>
    
          <div class="flex2 text-end d-none d-md-block">
            <button class="whiteLink siteLink">S'enregistrer</button>
            <button class="blackLink siteLink">Connexion</button>
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
          <a href="index.php?" class="nav-menu-item"> Nouveautés</a>
          <a href="index.php?view=text&action=generalText" class="nav-menu-item"> Toutes Les Infos</a>
          <a href="index.php?view=text&action=display" class="nav-menu-item"> Texte</a>
          <a href="index.php?view=article&action=display" class="nav-menu-item"> Article</a>
          <a href="index.php?view=amendment&action=display" class="nav-menu-item"> Amendement</a>
          <a href="index.php?" class="nav-menu-item"> A Propos</a>
        </div>
      </div>
    </div>

  <script src="Templates/Assets/Js/menu.js"></script>

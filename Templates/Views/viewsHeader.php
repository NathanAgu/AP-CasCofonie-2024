<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="../Assets/Css/menu.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
            <button class="whiteLink siteLink" style="border-right:1px solid #eaeaea" onclick="menuToggle()"><i class="fas fa-bars me-2"></i> MENU</button>
          </div>
          <div class="flex3 text-center" id="siteBrand">
            LegiCo
          </div>
    
          <div class="flex2 text-end d-block d-md-none">
            <button class="whiteLink siteLink"><i class="fas fa-search"></i></button>
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
              <i class="fas fa-times" role="btn" onclick="menuToggle()"></i>
            </div>
          </div>
        </div>
        <div>
          <a href="#" class="nav-menu-item"> Acceuil</a>
          <a href="#" class="nav-menu-item"> Nouveautés</a>
          <a href="#" class="nav-menu-item"> Toutes Les Infos</a>
          <a href="#" class="nav-menu-item"> Texte</a>
          <a href="#" class="nav-menu-item"> Article</a>
          <a href="#" class="nav-menu-item"> Amendement</a>
          <a href="#" class="nav-menu-item"> A Propos</a>
        </div>
      </div>
    </div>
    <script src="../Assets/Js/menu.js"></script>
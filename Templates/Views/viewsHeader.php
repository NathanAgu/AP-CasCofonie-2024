<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Templates/Assets/Css/styleHeader.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Header</title>
</head>
<body>
    <!-- ENTETE -->
    <div class="p-3 bg-dark text-white">
      <div class="flexMain">
        <div class="flex1">
          
        </div>
        <div class="flex2 text-center" style="transform: translate(50%);">
          <div><h5>Le service public de la diffusion du droit</h5></div>
        </div>
        <div class="flex3 text-end">
          <div><img src="Templates/Assets/Img/Drapeau.png" alt="Drapeau Cofonie" style="width: 8%;"></div>
        </div>
      </div>
    </div>
    <!-- FIN ENTETE -->

    <!-- ENTETE 2 AVEC MENU -->
    <div id="menuHolder">
      <div role="navigation" class="sticky-top border-bottom border-top" id="mainNavigation">
        <div class="flexMain">
          <div class="flex2">
            <button class="whiteLink siteLink" style="border-right:1px solid #eaeaea" onclick="menuToggle()"><i class="fas fa-bars me-2"></i> MENU</button>
          </div>
          <div class="flex3 text-center">
            <img src="Templates/Assets/Img/logo.png" alt="Logo" style="width: 25%;">
          </div>
    
          <div class="flex2 text-end d-block d-md-none">
            <button class="whiteLink siteLink"><i class="fas fa-search"></i></button>
          </div>
    
          <div class="flex2 text-end d-none d-md-block" style="transform: translate(-2.5%);">
            <button class="blackLink siteLink">Connexion</button>
          </div>
        </div>
      </div>

      <!-- MENU -->
      <div id="menuDrawer">
        <div class="p-4 border-bottom">
          <div class='row'>
            <div class="col text-end ">
              <i class="fas fa-times" role="btn" onclick="menuToggle()"></i>
            </div>
          </div>
        </div>
        <div>
          <a href="index.php" class="nav-menu-item"><i class="fas fa-home me-3"></i>Acceuil</a>
          <a href="index.php?view=text&action=display" class="nav-menu-item"><i class="fab fa-product-hunt me-3"></i>Textes</a>
          <a href="index.php?view=article&action=display" class="nav-menu-item"><i class="fas fa-search me-3"></i>Articles</a>
          <a href="index.php?view=amendment&action=display" class="nav-menu-item"><i class="fas fa-wrench me-3"></i>Amendements</a>
          <a href="#" class="nav-menu-item"><i class="fas fa-dollar-sign me-3">A Propos De Nous</i></a>
          <a href="#" class="nav-menu-item"><i class="fas fa-file-alt me-3"></i>Mention Légales</a>
          <a href="#" class="nav-menu-item"><i class="fas fa-building me-3"></i>Connexion</a>
        </div>
      </div>
      <!-- FIN MENU -->

    </div>
    <!-- FIN ENTETE 2 AVEC MENU -->

<script src="Templates/Assets/Js/jsHeader.js"></script>
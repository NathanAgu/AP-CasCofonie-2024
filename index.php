<?php
    autoloader("controller");

    if (!isset($controller))
    {
        // Instanciation du controleur 
        $controller = new controller();
    }

    // Appel de la méthode d'affichage de l'entête
    $controller->displayHeader();

    // Appel de la méthode d'affichage de la page
    $controller->displayPage();

    // Appel de la méthode d'affichage du pied de page
    $controller->displayFooter();
?>
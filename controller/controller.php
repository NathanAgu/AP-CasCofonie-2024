<?php
    class controller
    {
        // Constructeur de la classe "controleur" 
        public function __construct(){}

        // ========================= Parties à afficher =========================
        
        // Méthode pour afficher l'entête de la page du site
        public function displayHeader()
        {
            require 'Templates/Views/viewsHeader.php';
        }

        // Méthode pour afficher la page du site (Contenu central)
        public function displayPage()
        {
            if (isset($_GET['view']) && isset($_GET['action']))
            {
                $view = $_GET['view'];
                $action = $_GET['action'];

                switch ($view)
                {
                    case "amendment":
                        $this->controllerAmendment($action);
                        break;
                    case "article":
                        break;
                    case "intitution":
                        break;
                    case "organ":
                        break;
                    case "role":
                        break;
                    case "text":
                        break;
                    case "typeInstitution":
                        break;
                }
            }
        }

        // Méthode pour afficher le pied de la page du site
        public function displayFooter()
        {
            require 'Templates/Views/viewsFooter.php';
        }

        // Controlleurs pour chaque class
        public function controllerAmendment($action)
        {
            switch ($action)
            {
                case "display":
                    $view = new viewAmendment();
                    $view->displayAmendment();
                    break;
                case "add":
                    $view = new viewAmendment();
                    $view->addAmendment();
                    break;
                case "remove":
                    $view = new viewAmendment();
                    $view->removeAmendment();
                    break;
            }
        }
    }
?>
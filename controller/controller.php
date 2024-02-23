<?php
    class controller
    {
        // Constructeur de la classe "controleur" 
        public function __construct(){}

        // ========================= Parties à afficher =========================

        // Méthode pour afficher l'entête de la page du site
        public function displayHeader()
        {
            require 'Templates/Views/viewHeader.php';
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
                        $this->controllerArticle($action);
                        break;
                    case "institution":
                        $this->controllerInstitution($action);
                        break;
                    case "organ":
                        $this->controllerOrgan($action);
                        break;
                    case "role":
                        $this->controllerRole($action);
                        break;
                    case "text":
                        $this->controllerText($action);
                        break;
                    case "typeInstitution":
                        $this->controllerTypeInstitution($action);
                        break;
                }
            }
        }

        // Méthode pour afficher le pied de la page du site
        public function displayFooter()
        {
            require 'Templates/Views/viewsFooter.php';
        }

        // ================================ Controleur classes ================================
        public function controllerAmendment($action)
        {
            switch ($action)
            {
                case "display":
                    echo "Affichage ammendement";
                    break;
                case "add":
                    echo "Ajout ammendement";
                    break;
                case "remove":
                    echo "Supression ammendement";
                    break;
            }
        }

        public function controllerArticle($action)
        {
            switch ($action)
            {
                case "display":
                    echo "Affichage article";
                    break;
                case "add":
                    echo "Ajout article";
                    break;
                case "remove":
                    echo "Supression article";
                    break;
            }
        }

        public function controllerInstitution($action)
        {
            switch ($action)
            {
                case "display":
                    echo "Affichage institution";
                    break;
            }
        }

        public function controllerOrgan($action)
        {
            switch ($action)
            {
                case "display":
                    echo "Affichage organ";
                    break;
            }
        }

        public function controllerRole($action)
        {
            switch ($action)
            {
                case "display":
                    echo "Affichage role";
                    break;
            }
        }

        public function controllerText($action)
        {
            switch ($action)
            {
                case "display":
                    echo "Affichage text";
                    break;
                case "add":
                    echo "Ajout text";
                    break;
                case "remove":
                    echo "Suppression text";
                    break;
            }
        }

        public function controllerTypeInstitution($action)
        {
            switch ($action)
            {
                case "display":
                    echo "Affichage institution";
                    break;
            }
        }
    }
?>
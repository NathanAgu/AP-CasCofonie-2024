<?php
    include_once("tools/autoloader.php");

    class controller
    {
        private $maBD
        private $allRole;
        
        // Constructeur de la classe "controleur" 
        public function __construct()
        {
            $this->maBD = new accesBD();
            $this->allRole = new ContainerRole();
            $this->loadRole();
        }

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

        public function controllerArticle($action)
        {
            switch ($action)
            {
                case "display":
                    $view = new viewArticle();
                    $view->displayArticle();
                    break;
                case "add":
                    $view = new viewArticle();
                    $view->addArticle();
                    break;
                case "remove":
                    $view = new viewArticle();
                    $view->removeArticle();
                    break;
            }
        }

        public function controllerInstitution($action)
        {
            switch ($action)
            {
                case "display":
                    $view = new viewInstitution();
                    $view->displayInstitution();
                    break;
            }
        }

        public function controllerOrgan($action)
        {
            switch ($action)
            {
                case "display":
                    $view = new viewOrgan();
                    $view->displayOrgan();
                    break;
            }
        }

        public function controllerRole($action)
        {
            switch ($action)
            {
                case "display":
                    $view = new viewRole();
                    $view->displayRole();
                    break;
            }
        }

        public function controllerText($action)
        {
            switch ($action)
            {
                case "display":
                    $view = new viewText();
                    $view->displayText();
                    break;
                case "add":
                    $view = new viewText();
                    $view->addText();
                    break;
                case "remove":
                    $view = new viewText();
                    $view->removeText();
                    break;
            }
        }

        public function controllerTypeInstitution($action)
        {
            switch ($action)
            {
                case "display":
                    $view = new viewTypeInstitution();
                    $view->displayTypeInstitution();
                    break;
            }
        }

        // ================================ Chargement Conteneurs ================================
        public function loadRole()
        {
            $resultRole = $this->maBD->laod('role');
            $nbE = 0;
            while ($nbE < sizeof($resultRole))
            {
                $this->allRole->addRole($resultRole[$nbE][0],$resultRole[$nbE][1],$resultRole[$nbE][2]);
                $nbE++;
            }
        }
    
    }
?>
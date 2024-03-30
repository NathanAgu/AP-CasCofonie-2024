<?php
    include_once("tools/autoload.php");

    class controller
    {
        private $myBD;
        private $allInstitutions;
        private $allRoles;
        private $allTypeInstitutions;

        private $allOrgans;

        // Constructeur de la classe "controleur" 
        public function __construct()
        {
            $this->myBD = new AccessDB();

            $this->allInstitutions = new ContainerInstitution();
            $this->LoadInstitution();

            $this->allRoles = new ContainerRole();
            $this->LoadRole();
            
            $this->allTypeInstitutions = new ContainerTypeInstitution();
            $this->LoadTypeInstitution();

            $this->allOrgans = new ContainerOrgan();
            $this->LoadOrgan();
        }

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
                    $list = $this->allInstitutions->listInstitutions();
                    $view = new viewInstitution();
                    $view->displayInstitutions($list);
                    
                    break;
            }
        }

        public function controllerOrgan($action)
        {
            switch ($action)
            {
                case "display":
                    $list = $this->allOrgans->listOrgan();
                    $view = new viewOrgan();
                    $view->displayOrgan($list);
                    break;
            }
        }

        public function controllerRole($action)
        {
            switch ($action)
            {
                case "display":
                    $list = $this->allRoles->listRole();
                    $view = new viewRole();
                    $view->displayRole($list);
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
                    $list = $this->allTypeInstitutions->listTypeInstitution();
                    $view = new viewTypeInstitution();
                    $view->displayTypeInstitutions($list);
                    break;
            }
        }


        // ------------------------------------------------------------------------------
        //                          Chargement des Conteneurs
        // ------------------------------------------------------------------------------

        public function LoadInstitution()
        {
            $resultInstitution = $this->myBD->Load('institution');
            $nbE = 0;
            while ($nbE<sizeof($resultInstitution))
            {
                $this->allInstitutions->addInstitution($resultInstitution[$nbE][0], $resultInstitution[$nbE][1]);
                $nbE++;
            }
        }

        public function LoadRole()
        {
            $resultRole = $this->myBD->Load('role');
            $nbE = 0;  
            while ($nbE<sizeof($resultRole))
            {
                $objectInstitution = $this->allInstitutions->giveInstitutionById($resultRole[$nbE][1]);

                $this->allRoles->addRole($resultRole[$nbE][0], $resultRole[$nbE][2], $objectInstitution);
                $nbE++;
            }
        }

        public function LoadTypeInstitution()
        {
            $resultTypeInsitution = $this->myBD->Load('typeinstitution');
            $nbE = 0;
            while ($nbE<sizeof($resultTypeInsitution))
            {
                $this->allTypeInstitutions->addTypeInstitution($resultTypeInsitution[$nbE][0], $resultTypeInsitution[$nbE][1]);
                $nbE++;
            }
        }

        public function LoadOrgan()
        {
            $resultOrgan = $this->myBD->Load('organe');
            $nbE = 0;
            while ($nbE<sizeof($resultOrgan))
            {
                $this->allOrgans->addOrgan($resultOrgan[$nbE][0], $resultOrgan[$nbE][1], $resultOrgan[$nbE][2]);
                $nbE++;
            }
        }
    }
?>
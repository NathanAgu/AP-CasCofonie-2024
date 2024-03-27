<?php
    include_once("tools/autoload.php");

    class controller
    {
        private $myDB;
        private $allInstitutions;

        // Constructeur de la classe "controleur" 
        public function __construct()
        {
            $this->myDB = new AccessDB();
            $this->allInstitutions = new ContainerInstitution();
            $this->LoadInstitution();
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
                    case "user":
                        $this->controllerUser($action);
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

        public function controllerUser($action)
        {
            switch ($action)
            {
                case "displayUserFormRegister":

                    break;
                case "addUser":
                    $valid = (boolean) true;

                    if (isset($_POST["userIdentifier"]) && isset($_POST["userPassword"]) && isset($_POST["userPasswordConfirmation"]))
                    {
                        // Informations du form
                        $userIdentifier = strip_tags($_POST["userIdentifier"]);
                        $userPassword = strip_tags($_POST["userPassword"]);
                        $userPasswordConfirmation = strip_tags($_POST["userPasswordConfirmation"]);

                        // Vérification email (valide ou non)
                        if (!filter_var($userIdentifier, FILTER_VALIDATE_EMAIL))
                        {
                            $valid = false;
                        } 
                        else 
                        {
                            // Vérification de l'email (utilisé ou non)
                            $sqlRequest = "SELECT userIdentifier FROM user WHERE userIdentifier = :userIdentifier";
                            $query = $this->myDB->prepare($sqlRequest);
                            $query->bindValue(":userIdentifier", $userIdentifier);
                            $query->execute();
                            $user = $query->fetch();

                            // Si l'email est déjà utilisé
                            if ($user)
                            {
                                $valid = false;
                            }
                        }

                        if ($userPassword != $userPasswordConfirmation)
                        {
                            $valid = false;
                            $msgError = "Les mots de passe ne sont pas les mêmes !";
                        }

                        if ($valid)
                        {
                            // Hashage du mot de passe
                            $userHashPassword = password_hash($userPassword, PASSWORD_ARGON2ID);

                            // Insertion de l'utilisateur dans la DB
                            $sqlRequest = "INSERT INTO user (userIdentifier, userPassword) VALUES (:userIdentifier, :userPassword)";
                            $query = $this->myDB->prepare($sqlRequest);
                            $query->bindValue(":userIdentifier", $userIdentifier);
                            $query->bindValue(":userPassword", $userHashPassword);
                            $query->execute();

                            // Création de la session
                            $_SESSION["user"] = [
                                "identifier" => $userIdentifier
                            ];

                            header("Location: index.php");
                        }
                    }
                    break;
                case "displayUserFormLogin":

                    break;
                case "connectUser":

                    break;
                case "displayUserDashboard":

                    break;
            }
        }

        // Chargement des Conteneurs
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
    }
?>
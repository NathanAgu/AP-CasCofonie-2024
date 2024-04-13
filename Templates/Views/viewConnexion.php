<?php
    class viewConnexion
    {
        public function __construct(){}

        public function displayUserLogin()
        {
            ?>
            <link rel="stylesheet" href="Templates/Assets/Css/connexion.css">
            <div class="container">
                <div class="form--user__icon">
                    <div class="icon--img">
                        <span class="glyphicon glyphicon-user"></span>
                    </div>
                </div>
                <h4 class="text-center"> Connexion</h4>
                <form action="index.php?view=connexion&action=connexion" method=POST>
                    <div class="form-group">
                        <label for="email"> <span class="glyphicon glyphicon-user"></span> Utilisateur</label>
                        <input type="text" class="form-control" placeholder="Nom Utilisateur" name="login">
                    </div>
                    <div class="form-group">
                        <label for="pwd"> <span class="glyphicon glyphicon-lock"></span> Mot De Passe</label>
                        <input type="password" class="form-control" placeholder="Entrez votre mot de passe" name="pwd">
                    </div>
                    <a href="#">Mot de passe perdu ?</a><br>
                    <a href="#">Créer un compte</a><br><br>
                    <button type="submit" class="btn btn-default connexion">Connexion</button>
                </form>
            </div>
            <?php
        }
        public function connexionUser()
        {
            $login = $_POST['login'];
            $password = $_POST['pwd'];
        
            $myBD = new AccessDB();
            $myBD->connexion();

            $return = $myBD->logUser($login, $password);
            if ($return == 0)
            {
                echo "Erreur dans l'identifiants ou le mot de passe";
                $this->displayUserLogin();
            }
            else
            {
                echo 'Connexion Réussi';

                $_SESSION['login'] = $login;
                $_SESSION['role'] = $myBD->roleUser();
            }
        }
    }

    

   
    

    




   
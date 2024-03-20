<?php
    class viewUser
    {
        public function __construct(){}

        public function displayUserFormRegister()
        {
            echo '
            <form action="register.php" method="POST">
                <input type="email" name="userIdentifier" placeholder="email" required>
                <input type="password" name="userPassword" placeholder="mot de passe" required>
                <input type="password" name="userPasswordConfirmation" placeholder="conf mot de passe" required>
                <input type="submit">
            </form>
            ';
        }

        public function displayUserFormLogin()
        {
            echo '
            <form action="index.php" method="post">
                <input type="email" name="userIdentifier" placeholder="email" required>
                <input type="password" name="userPassword" placeholder="mot de passe" required>
                <input type="submit">
            </form>
            ';
        }

        public function displayUserDashboard()
        {

        }

        public function userLogout()
        {

        }
    }
?>
<?php
    class viewUser
    {
        public function __construct() {}

        public function displayUserFormRegister()
        {
            echo '
                <form action="index.php?view=user&action=registerUser" method="POST">
                    <input type="email" name="userIdentifier">
                    <input type="password" name="userPassword">
                    <input type="password" name="userPasswordConfirmation">
                    <button type="submit">Inscription</button>
                </form>
            ';
        }

        public function displayUserFormLogin()
        {
            echo '
                <form action="index.php?view=user&action=loginUser" method="POST">
                    <input type="email" name="userIdentifier">
                    <input type="password" name="userPassword">
                    <button type="submit">Inscription</button>
                </form>
            ';
        }
    }
?>
<?php
    class AccessDB
    {
        private $host;
        private $login;
        private $password;
        private $dataBase;
        private $connexionDB;

        public function __construct()
        {
            $this->host = "localhost";
            $this->login = "root";
            $this->password = "";
            $this->dataBase = "";
            $this->connexion();
        }

        public function connexion()
        {
            try
            {
                $this->connexionDB = new PDO("mysql:host=".$this->host."; dbname".$this->dataBase.";charset=utf8", $this->login, $this->);
            }
            catch(PDOExecption $e)
            {
                die("La connexion à la base de données à échouée ".$e->getMessage());
            }
        }
    }
?>
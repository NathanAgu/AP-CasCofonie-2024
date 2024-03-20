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
            $this->dataBase = "cofonie_bf";
            $this->connexion();
        }

        public function connexion()
        {
            try
            {
                $this->connexionDB = new PDO("mysql:host=".$this->host."; dbname".$this->dataBase.";charset=utf8", $this->login, $this->password);
            }
            catch(PDOExecption $e)
            {
                die("La connexion à la base de données à échouée ".$e->getMessage());
            }
        }


        // Fonction de Chargement de tables
        
        
    }
        
?>
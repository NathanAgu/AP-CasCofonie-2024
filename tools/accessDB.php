<?php
    class AccessDB
    {
        private $host;
        private $login;
        private $password;
        private $dataBase;
        private $conn;

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
                $this->conn = new PDO("mysql:host=".$this->host."; dbname".$this->dataBase.";charset=utf8", $this->login, $this->password);
            }
            catch(PDOExecption $e)
            {
                die("La connexion à la base de données à échouée ".$e->getMessage());
            }
        }

        // Fonction Chargement des tables dans la BD

        public function Load($uneTable)
	    {
	    	$lesInfos=null;
	    	$nbTuples=0;
	    	$stringQuery="SELECT * FROM ";
	    	$stringQuery = $this->specialCase($stringQuery,$uneTable);
	    	$query = $this->conn->prepare($stringQuery);
	    	if($query->execute())
	    	{
	    		while($row = $query->fetch(PDO::FETCH_NUM))
	    		{
	    			$lesInfos[$nbTuples] = $row;
	    			$nbTuples++;
	    		}
	    	}
	    	else
	    	{
	    		die('Problème dans chargement : '.$query->errorCode());
	    	}
	    	return $lesInfos;
	    }

	    private function specialCase($stringQuery,$uneTable)
	    {
	    		$uneTable = strtoupper($uneTable);
	    		switch ($uneTable) {
	    		case 'ROLE':
	    			$stringQuery.='role';
	    			break;
	    		default:
	    			die('Pas une table valide');
	    			break;
	    		}

	    		return $stringQuery.";";
	    }
    }
?>
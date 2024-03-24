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
        public function load($table)
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
	    		case 'VOITURE':
	    			$stringQuery.='voiture';
	    			break;
	    		default:
	    			die('Pas une table valide');
                
	    		}

	    		return $stringQuery.";";
	    }

        public function nextId($uneTable)
        {
            $stringQuery = $this->specialCase("SELECT * FROM ",$uneTable);
		    $requete = $this->conn->prepare($stringQuery);
		    //$requete->bindValue(1,$unIdentifiant);
            
		    if($requete->execute())
		    {
		    	$nb=0;
		    	while($row = $requete->fetch(PDO::FETCH_NUM))
		    	{
		    		$nb = $row[0];
		    	}
		    	return $nb+1;
		    }
		    else
		    {
		    	die('Erreur sur donneProchainIdentifiant : '+$requete->errorCode());
		    }
        }
        
    }
        
?>
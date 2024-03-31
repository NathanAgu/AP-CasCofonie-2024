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
            $this->host = "127.0.0.1";
            $this->login = "root";
            $this->password = "";
            $this->dataBase = "cofonie_bf";
            $this->connexion();
        }

        public function connexion()
        {
			try
			{
				$this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dataBase.";charset=utf8", $this->login, $this->password);
			}
			catch(PDOException $e)
			{
				die("Connection à la base de données échouée".$e->getMessage());
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
	    	switch ($uneTable) 
			{
				case 'INSTITUTION':
					$stringQuery.='institution';
					break;
	    		case 'ROLE':
	    			$stringQuery.='roleInstitution';
	    			break;
				case 'TYPEINSTITUTION':
					$stringQuery.='typeinstitution';
					break;
				case 'ORGANE':
					$stringQuery.='organe';
					break;
				case 'TEXTE':
					$stringQuery.='texte';
					break;
				case 'ARTICLE':
					$stringQuery.='article';
					break;
				case 'AMENDEMENT':
					$stringQuery.='amendement';
					break;
	    		default:
	    			die('Pas une table valide');
	    			break;
	    	}
	    	return $stringQuery.";";
	    }

		public function giveNextId($table)
		{
			$stringQuery = $this->specialCase("SELECT * FROM ",$table);
			$requete = $this->conn->prepare($stringQuery);

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


		// Fonction d'ajout dans la BD

		public function addInstitutionBD($id, $label)
		{
			$idInstitution = $this->giveNextId("INSTITUTION");
			$request = $this->conn->prepare("INSERT INTO institution (idInstitution, libelleInstitution) VALUES (?,?)");
			$request->bindValue(1, $id);
			$request->bindValue(2, $label);
			if(!$request->execute())
			{
				die("Erreur dans insert Institution : " .$request->errorCode());
			}
			return $idInstitution;
		}
    }
?>
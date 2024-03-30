<?php
    include_once("tools/autoload.php");

    class ContainerOrgan
    {
        private $organs;

        public function __construct()
        {
            $this->organs = new ArrayObject();
        }

        public function addOrgan($id, $label, $nbPersOrgan)
        {
            $this->organs->append(new ActionOrgan($id, $label, $nbPersOrgan));
        }

        public function listOrgan()
        {
            $liste = '';
		    foreach ($this->organs as $organ)
		    	{	
                    $liste = $liste.$organ->displayOrgan();
		    	}
		    return $liste;
        }

        public function giveOrganById($id)
        {
            $find = false;
            $findOrgan = null;
            $iOrgan = $this->organs->getIterator();

            while ((!$find) && ($iOrgan->valid()))
            {
                if ($iOrgan->current()->id == $id)
                {
                    $find = true;
                    $findOrgan = $iOrgan->current();
                }
                else
                {
                    $iOrgan->next();
                }
            }
            return $findOrgan;
        }
    }
?>

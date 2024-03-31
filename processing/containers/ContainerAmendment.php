<?php
    include_once("tools/autoload.php");

    class ContainerAmendment
    {
        private $amendments;

        public function __construct()
        {
            $this->amendments = new ArrayObject();
        }

        public function addAmendment($text, $article, $idSeqAmendment, $labelAmendment, $textAmendment, $dateAmendment)
        {
            $this->amendments->append(new ActionAmendment($text, $article, $idSeqAmendment, $labelAmendment, $textAmendment, $dateAmendment));
        }

        public function listAmendment()
        {
            $liste = '';
		    foreach ($this->amendments as $amendment)
		    	{	
                    $liste = $liste.$amendment->displayAmendment();
		    	}
		    return $liste;
        }
    }
?>

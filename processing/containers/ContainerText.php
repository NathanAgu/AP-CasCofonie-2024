<?php
    include_once("tools/autoload.php");

    class ContainerText
    {
        private $texts;

        public function __construct()
        {
            $this->texts = new ArrayObject();
        }

        public function addText($id, $institution, $title, $finalVoteText, $promulgationText)
        {
            $this->texts->append(new ActionText($id, $institution, $title, $finalVoteText, $promulgationText));
        }

        public function listTexts()
        {
            $liste = '';
		    foreach ($this->texts as $text)
		    	{	
                    $liste = $liste.$text->displayText();
		    	}
		    return $liste;
        }

        public function giveTextById($id)
        {
            $find=false;
		    $findText=null;
		    $iText = $this->texts->getIterator();
		    while ((!$find)&&($iText->valid()))
		    {
		    	if ($iText->current()->idText == $id)
		    	{        
		    		$find=true;
		    		$findText = $iText->current();
		    	}
		    	else
		    		$iText->next();
		    }
		    return $findText;
        }

    }
?>

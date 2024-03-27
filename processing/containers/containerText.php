<?php
    include_once("tools/autoload.php");

    class ContainerText
    {
        private $texts;

        public function __construct()
        {
            $this->texts = new ArrayObject();
        }

        public function addText($id, $title, $finalVote, $promulgation)
        {
            $this->texts->append(new ActionText($id, $title, $finalVote, $promulgation));
        }

        public function listTexts()
        {
            foreach ($this->texts as $text)
            {
                // Faire la liste des textes
            }
        }
    }
?>
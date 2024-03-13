<?php
    include("actionText");

    class ContainerText
    {
        private $texts;

        public function __construct()
        {
            $this->texts = new ArrayObject();
        }

        public function addText($id, $title, $finalVote, $promulgation)
        {
            $this->texts->append(new Text($id, $title, $finalVote, $promulgation));
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
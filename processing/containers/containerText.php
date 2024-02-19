<?php
    autoloader("actionText");

    class ContainerText
    {
        private $texts;

        public function __construct()
        {
            $this->texts = new ArrayObject();
        }

        public function addText($id)
        {
            $this->texts->append(new Text($id));
        }

        public function listTexts()
        {
            foreach ($this->institutions as $institution)
            {
                // Faire la liste des textes
            }
        }
    }
?>
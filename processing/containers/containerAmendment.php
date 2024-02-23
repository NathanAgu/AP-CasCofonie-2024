<?php
    autoload("actionAmendment");

    class ContainerAmendment
    {
        private $amendments;

        public function __construct()
        {
            $this->amendments = new ArrayObject();
        }

        public function addAmendment($id, $label, $content, $date)
        {
            $this->amendments->append(new Amendment($id, $label, $content, $date));
        }

        public function listAmendment()
        {
            foreach ($this->amendments as $amendment)
            {
                // Faire la liste des ammendemants
            }
        }
    }
?>
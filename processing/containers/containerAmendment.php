<?php
    autoloader("actionAmendment");

    class ContainerAmendment
    {
        private $amendments;

        public function __construct()
        {
            $this->amendments = new ArrayObject();
        }

        public function addAmendment($id, $content, $article)
        {
            $this->amendments->append(new Amendment($id, $content, $article));
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
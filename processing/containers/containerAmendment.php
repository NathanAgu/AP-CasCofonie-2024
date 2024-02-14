<?php
    autoloader("actionAmendment");

    class containerAmendment
    {
        private $amendments;

        public function __construct()
        {
            $this->amendments = new ArrayObject();
        }

        public function addAmendment($id, $content, $article)
        {
            $this->amendments->append(new amendment($id, $content, $article));
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
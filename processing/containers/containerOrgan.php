<?php
    include("");

    class ContainerOrgan
    {
        private $organs;

        public function __construct()
        {
            $this->organs = new ArrayObject();
        }

        public function addInstitution($id, $label)
        {
            $this->organs->append(new Organ($id, $label));
        }

        public function listOrgans()
        {
            foreach ($this->organs as $organ)
            {
                // Faire la liste des organ
            }
        }
    }
?>
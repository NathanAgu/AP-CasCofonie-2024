<?php
    include_once("tools/autoload.php");

    class ContainerOrgan
    {
        private $organs;

        public function __construct()
        {
            $this->organs = new ArrayObject();
        }

        public function addInstitution($id, $label)
        {
            $this->organs->append(new ActionOrgan($id, $label));
        }

        public function listOrgans()
        {
            foreach ($this->organs as $organ)
            {
                // Faire la liste des institutions
            }
        }
    }
?>
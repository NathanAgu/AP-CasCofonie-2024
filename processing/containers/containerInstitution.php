<?php
    include("actionInstitution");

    class ContainerInstitution
    {
        private $institutions;

        public function __construct()
        {
            $this->institutions = new ArrayObject();
        }

        public function addInstitution($id, $label)
        {
            $this->institutions->append(new Institution($id, $label));
        }

        public function listInstitutions()
        {
            foreach ($this->institutions as $institution)
            {
                // Faire la liste des institutions
            }
        }
    }
?>
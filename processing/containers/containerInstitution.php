<?php
    autoloader("actionInstitution");

    class ContainerInstitution
    {
        private $institutions;

        public function __construct()
        {
            $this->institutions = new ArrayObject();
        }

        public function addInstitution($id, $libelle, $typeInstitution)
        {
            $this->institutions->append(new Institution($id, $libelle, $typeInstitution));
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
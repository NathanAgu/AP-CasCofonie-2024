<?php
    include_once('institution.php');

    class containerInstitution
    {
        private $institutions;

        public function __construct()
        {
            $this->institutions = new ArrayObject();
        }

        public function addInstitution($id, $libelle, $typeInstitution)
        {
            $this->institutions->append(new institution($id, $libelle, $typeInstitution));
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
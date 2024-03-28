<?php
    include_once("tools/autoload.php");

    class ContainerTypeInstitution
    {
        private $typeInstitutions;

        public function __construct()
        {
            $this->typeInstitutions = new ArrayObject();
        }

        public function addTypeInstitution($id, $label)
        {
            $this->typeInstitutions->append(new ActionTypeInstitutions($id, $label));
        }

        public function listTypeInstitution()
        {
            foreach ($this->typeInstitutions as $typeInstitution)
            {
                // Faire la liste des types d'institution
            }
        }
    }
?>

<?php
    autoloader("actionTypeInstitution");

    class ContainerTypeInstitution
    {
        private $typeInstitutions;

        public function __construct()
        {
            $this->typeInstitutions = new ArrayObject();
        }

        public function addTypeInstitution($id, $libelle)
        {
            $this->typeInstitutions->append(new TypeInstitutions($id, $libelle));
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
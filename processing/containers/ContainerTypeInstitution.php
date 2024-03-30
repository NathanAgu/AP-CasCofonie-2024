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
            $this->typeInstitutions->append(new ActionTypeInstitution($id, $label));
        }

        public function listTypeInstitution()
        {
            $liste = '';
		    foreach ($this->typeInstitutions as $typeInstitution)
		    	{	
                    $liste = $liste.$typeInstitution->displayTypeInstitution();
		    	}
		    return $liste;
        }

        public function giveTypeInstitutionById($id)
        {
            $find = false;
            $findTypeInstitution = null;
            $iTypeInstitution = $this->typeInstitutions->getIterator();

            while ((!$find) && ($iTypeInstitution->valid()))
            {
                if ($iTypeInstitution->current()->id == $id)
                {
                    $find = true;
                    $findTypeInstitution = $iTypeInstitution->current();
                }
                else
                {
                    $iTypeInstitution->next();
                }
            }
            return $findTypeInstitution;
        }
    }
?>

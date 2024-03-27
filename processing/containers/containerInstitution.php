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
            $liste = '';
		    foreach ($this->institutions as $institution)
		    	{	
                    $liste = $liste.$institution->displayInstitution();
		    	}
		    return $liste;
        }
    }
?>
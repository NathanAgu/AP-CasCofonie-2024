<?php
    include_once("tools/autoload.php");

    class ContainerRole
    {
        private $allRoles;

        public function __construct()
        {
            $this->allRoles = new ArrayObject();
        }

        public function addRole($id, $label,$institution)
        {
            
            $newRole = new ActionRole($id, $label,$institution);
            $this->allRoles->append($newRole);
        }

        public function listRole()
        {
            $liste = '';
		    foreach ($this->allRoles as $role)
		    	{	
                    $liste = $liste.$role->displayRole();
		    	}
		    return $liste;
        }

    }
?>

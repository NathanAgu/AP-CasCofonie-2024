<?php
    include_once("tools/autoload.php");

    class ContainerRole
    {
        private $allRoles;

        public function __construct()
        {
            $this->allRoles = new ArrayObject();
        }

        public function addRole($id, $label)
        {
            $newRole = new ActionRole($id, $label,$idInstituton);
            $this->allRoles->append($newRole);
        }

        public function listOrgans()
        {
            foreach ($this->allRoles as $role)
            {
                // Faire la liste des institutions
            }
        }

    }
?>

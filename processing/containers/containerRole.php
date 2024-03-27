<?php
    class ContainerRole
    {
        private $allRoles;

        public function __construct()
        {
            $this->allRoles = new ArrayObject();
        }

        public function addRole($id, $label)
        {
            $this->allRoles->append(new Role($id, $label));
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
<?php
    class ContainerRole
    {
        private $roles;

        public function __construct()
        {
            $this->roles = new ArrayObject();
        }

        public function addInstitution($id, $label)
        {
            $this->roles->append(new Organ($id, $label));
        }

        public function listOrgans()
        {
            foreach ($this->roles as $role)
            {
                // Faire la liste des institutions
            }
        }
    }
?>
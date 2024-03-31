<?php
    class ActionRole
    {
        public function __construct(private int $idRole, private string $label, private ActionInstitution $insitution){}
    

        public function __get($attribute)
        {
            switch ($attribute)
            {
                case "idRole":
                    return $this->idRole;
                case "label":
                    return $this->label;
                case "idInstitution":
                    return $this->insitution->idInstitution;
            }
        }

        public function __set($attribute, $value)
        {
            switch ($attribute)
            {
                case "id":
                    $this->id = $value;
                    break;
                case "label":
                    $this->label = $value;
                    break;
            }
        }

        public function displayRole()
        {
            $result = $this->idRole . ' | ' . $this->label . ' | ' . $this->insitution->label . ' | ' ;
            return $result;
        }
    }
?>

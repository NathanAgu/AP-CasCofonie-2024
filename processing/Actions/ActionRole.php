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
                    break;
                case "label":
                    return $this->label;
                    break;
                case "idInstitution":
                    return $this->insitution->idInstitution;
                    break;
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

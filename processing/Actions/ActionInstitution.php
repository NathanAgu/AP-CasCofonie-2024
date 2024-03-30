<?php
    class ActionInstitution
    {
        public function __construct(private int $idInstitution, private string $label){}

        public function __get($attribute)
        {
            switch ($attribute)
            {
                case "idInstitution":
                    return $this->idInstitution;
                    break;
                case "label":
                    return $this->label;
                    break;
            }
        }

        public function __set($attribute, $value)
        {
            switch ($attribute)
            {
                case "idInstitution":
                    $this->idInstitution = $value;
                    break;
                case "label":
                    $this->label = $value;
                    break;
            }
        }

        public function displayInstitution()
        {
            $result = $this->idInstitution . ' | ' . $this->label . ' | ';
            return $result;
        }
    }
?>

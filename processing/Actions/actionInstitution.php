<?php
    class Institution
    {
        public function __construct(private int $id, private string $label, private typeInstitution $typeInstitution){}

        public function __get($attribute)
        {
            switch ($attribute)
            {
                case "id":
                    return $this->id;
                    break;
                case "label":
                    return $this->label;
                    break;
                case "typeInstitution":
                    return $this->typeInstitution;
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
                case "typeInstitution":
                    $this->typeInstitution = $value;
                    break;
            }
        }
    }
?>
<?php
    class Institution
    {
        public function __construct(private int $id, private string $libelle, private typeInstitution $typeInstitution){}

        public function __get($attribute)
        {
            switch ($attribute)
            {
                case "id":
                    return $this->id;
                    break;
                case "libelle":
                    return $this->libelle;
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
                case "libelle":
                    $this->libelle = $value;
                    break;
                case "typeInstitution":
                    $this->typeInstitution = $value;
                    break;
            }
        }
    }
?>
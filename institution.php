<?php
    class institution
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
    }
?>
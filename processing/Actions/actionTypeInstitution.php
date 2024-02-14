<?php
    class TypeInstitution
    {
        public function __construct(private int $id, private string $libelle){}

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
            }
        }
    }
?>
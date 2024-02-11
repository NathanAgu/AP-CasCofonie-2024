<?php
    class typeInstitution
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
    }
?>
<?php
    class ActionOrgan
    {
        public function __construct(private int $id, private string $label, private int $nbPersOrgan){}
        public function __get($attribute)
        {
            switch ($attribute)
            {
                case "id":
                    return $this->id;
                case "label":
                    return $this->label;
                case "nbPersOrgan":
                    return $this->nbPersOrgan;
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
                case "nbPersOrgan":
                    $this->nbPersOrgan = $value;
                    break;
            }
        }

        public function displayOrgan()
        {
            $result = $this->id . ' | ' . $this->label . ' | ' . $this->nbPersOrgan . ' | ';
            return $result;
        }
    }
    
?>

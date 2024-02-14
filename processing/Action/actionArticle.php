<?php
    class article
    {
        public function __construct(private int $id, private string $text, private containerAmendment $amendments) {}

        public function __get($attribute)
        {
            switch ($attribute)
            {
                case "id":
                    return $this->id;
                    break;
                case "text":
                    return $this->text;
                    break;
                case "amendments":
                    return $this->amendments;
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
<?php
    class ActionTypeInstitution
    {
        public function __construct(private int $id, private string $label){}

        public function __get($attribute)
        {
            switch ($attribute)
            {
                case "id":
                    return $this->id;
                case "label":
                    return $this->label;
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

        public function displayTypeInstitution()
        {
            $result = $this->id . ' | ' . $this->label . ' | ';
            return $result;
        }
    }
?>

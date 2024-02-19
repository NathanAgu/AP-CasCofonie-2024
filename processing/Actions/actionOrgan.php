<?php
    class Organ
    {
        public function __construct(private int $id, private string $label){}
    }

    switch ($attribute)
    {
        case "id":
            return $this->id;
            break;
        case "label":
            return $this->label;
            break;
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
?>
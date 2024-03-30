<?php
    class ActionRole
    {
        public function __construct(private int $id, private string $label, private ActionInstitution $insitution){}
    

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
                case "idInstitution":
                    return $this->insitution->id;
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
            }
        }

        public function displayRole()
        {
            $result = $this->id . ' | ' . $this->label . ' | ' . $this->insitution->label . ' | ' ;
            return $result;
        }
    }
?>

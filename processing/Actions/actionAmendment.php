<?php
    class Amendment
    {
        public function __construct(private int $id, private string $label, private string $content, private date $date) {}

        public function __get($attribute)
        {
            switch ($attribute)
            {
                case "id":
                    return $this->id;
                    break;
                case "label"
                    return $this->label;
                    break;
                case "content":
                    return $this->content;
                    break;
                case "date":
                    return $this->date;
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
                case "label"
                    $this->label = $value;
                    break;
                case "content":
                    $this->content = $value;
                    break;
                case "date":
                    $this->date = $value;
                    break;
            }
        }
    }
?>
<?php
    class Article
    {
        public function __construct(private int $id, private string $title, private string $content, private text $text) {}

        public function __get($attribute)
        {
            switch ($attribute)
            {
                case "id":
                    return $this->id;
                    break;
                case "title":
                    return $this->title;
                    break;
                case "content":
                    return $this->content;
                    break;
                case "text":
                    return $this->text;
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
                case "title":
                    $this->title = $value;
                    break;
                case "content":
                    $this->content = $value;
                    break;
                case "text":
                    $this->text = $value;
            }
        }
    }
?>
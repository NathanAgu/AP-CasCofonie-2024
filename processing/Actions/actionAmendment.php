<?php
    class Amendment
    {
        public function __construct(private int $id, private string $content, private article $article) {}

        public function __get($attribute)
        {
            switch ($attribute)
            {
                case "id":
                    return $this->id;
                    break;
                case "text":
                    return $this->content;
                    break;
                case "article":
                    return $this->article;
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
                    $this->content = $value;
                    break;
                case "artcicle":
                    $this->article = $value;
                    break;
            }
        }
    }
?>
<?php
    class ActionArticle
    {
        public function __construct(private ActionText $text, private int $idSeq, private string $titleArticle, private string $textArticle) {}

        public function __get($attribute)
        {
            switch ($attribute)
            {
                case "text":
                    return $this->text;
                case "idSeq":
                    return $this->idSeq;
                case "titleArticle":
                    return $this->titleArticle;
                case "textArticle":
                    return $this->textArticle;
            }
        }

        public function __set($attribute, $value)
        {
            switch ($attribute)
            {
                case "text":
                    $this->text = $value;
                    break;
                case "idSeq":
                    $this->idSeq = $value;
                    break;
                case "titleArticle":
                    $this->titleArticle = $value;
                    break;
                case "textArticle":
                    $this->textArticle = $value;
                    break;
            }
        }

        public function displayArticle()
        {
            $result = $this->text->titleText . ' | ' . $this->idSeq . ' | ' . $this->titleArticle . ' | ' . $this->textArticle . ' | ' ;
            return $result;
        }
    }
?>

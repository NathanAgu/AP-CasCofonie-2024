<?php
    class ActionArticle
    {
        public function __construct(private ActionText $text, private int $idSeq, private string $titleArticle, private string $textArticle) {}

        public function __get($attribute)
        {
            switch ($attribute)
            {
                case "text":
                    $this->text->titleText;
                    break;
                case "idSeq":
                    $this->idSeq;
                    break;
                case "titleArticle":
                    $this->titleArticle;
                    break;
                case "textArticle":
                    $this->textArticle;
                    break;
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

<?php
    class ActionAmendment
    {
        public function __construct(private ActionText $text, private ActionArticle $article, private int $idSeqAmendment, private string $labelAmendment, private string $textAmendment, private DateTime $dateAmendment) {}

        public function __get($attribute)
        {
            switch ($attribute)
            {
                case "text":
                    return $this->text;
                case "article":
                    return $this->article;
                case "idSeqAmendment":
                    return $this->idSeqAmendment;
                case "labelAmendment":
                    return $this->labelAmendment;
                case "textAmendment":
                    return $this->textAmendment;
                case "dateAmendment":
                    return $this->dateAmendment;
            }
        }

        public function __set($attribute, $value)
        {
            switch ($attribute)
            {
                case "text":
                    $this->text = $value;
                    break;
                case "idSeqArticle":
                    $this->idSeqArticle = $value;
                    break;
                case "idSeqAmendment":
                    $this->idSeqAmendment = $value;
                    break;
                case "labelAmendment":
                    $this->labelAmendment = $value;
                    break;
                case "textAmendment":
                    $this->textAmendment = $value;
                    break;
                case "dateAmendment":
                    $this->dateAmendment = $value;
                    break;
            }
        }

        public function displayAmendment()
        {
            $result = $this->text->titleText.'|'.$this->article->titleArticle.'|'.$this->idSeqAmendment.'|'.$this->labelAmendment.'|'.$this->textAmendment.'|'. $this->dateTimeToString($this->dateAmendment).'|';
            return $result;
        }

        function dateTimeToString(DateTime $dateTime) {
            $dateFormat = 'Y-m-d';
            return $dateTime->format($dateFormat);
        }
    }
?>

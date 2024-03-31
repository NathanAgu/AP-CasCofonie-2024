<?php
    class ActionVote
    {
        public function __construct(private ActionText $text, private ActionArticle $article, private DateTime $jourVote, private ActionOrgan $organ, private int $nbrVoteY, private int $nbrVoteN){}

        public function __get($attribute)
        {
            switch ($attribute)
            {
                case "text":
                    return $this->text;
                case "article":
                    return $this->article;
                case "jourVote":
                    return $this->jourVote;
                case "organ":
                    return $this->organ;
                case "nbrVoteY":
                    return $this->nbrVoteY;
                case "nbrVoteN":
                    return $this->nbrVoteN;
            }
        }

        public function __set($attribute, $value)
        {
            switch ($attribute)
            {
                case "text":
                    $this->text = $value;
                    break;
                case "article":
                    $this->article = $value;
                    break;
                case "jourVote":
                    $this->jourVote = $value;
                    break;
                case "organ":
                    $this->organ = $value;
                    break;
                case "nbrVoteY":
                    $this->nbrVoteY = $value;
                    break;
                case "nbrVoteN":
                    $this->nbrVoteN = $value;
                    break;
            }
        }

        public function displayVote()
        {
            $result = $this->text->titleText . ' | ' . $this->article->titleArticle . ' | ' . $this->dateTimeToString($this->jourVote) . ' | ' . $this->organ->label . ' | ' . $this->nbrVoteY . ' | ' . $this->nbrVoteN . ' | ';
            return $result;
        }

        function dateTimeToString(DateTime $dateTime) {
            $dateFormat = 'Y-m-d';
            return $dateTime->format($dateFormat);
        }
    }
    
?>
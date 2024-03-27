<?php
    class ActionText
    {
        public function __construct(private int $id, private string $title, private int $finalVote, private bool $promulgation) {}

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
                case "finalVote":
                    return $this->finalVote;
                    break;
                case "promulgation":
                    return $this->promulgation;
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
                case "finalVote":
                    $this->finalVote = $value;
                    break;
                case "promulgation":
                    $this->promulgation = $value;
                    break;
            }
        }
    }
?>
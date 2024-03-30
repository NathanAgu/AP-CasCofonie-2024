<?php
    class ActionText
    {
        public function __construct(private int $id, private ActionInstitution $institution, private string $title, private int $finalVoteText, private int $promulgationText) {}

        public function __get($attribute)
        {
            switch ($attribute)
            {
                case 'id':
                    $this->id;
                    break;
                case 'institution':
                    $this->institution->label;
                    break;
                case 'title':
                    $this->title;
                    break;
                case 'finalVoteText':
                    $this->finalVoteText;
                    break;
                case 'promulgationText':
                    $this->promulgationText;
                    break;
            }
        }

        public function __set($attribute, $value)
        {
            switch ($attribute)
            {
                case "title":
                    $this->title = $value;
                    break;
                case "finalVoteText":
                    $this->finalVoteText = $value;
                    break;
                case "promulgationText":
                    $this->promulgationText = $value;
                    break;
            }
        }

        public function displayText()
        {
            $result = $this->id . ' | ' . $this->institution->label . ' | ' . $this->title . ' | ' . $this->finalVoteText . ' | ' . $this->promulgationText . ' | ' ;
            return $result;
        }
    }
?>

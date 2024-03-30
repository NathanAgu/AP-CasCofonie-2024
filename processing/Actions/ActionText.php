<?php
    class ActionText
    {
        public function __construct(private int $idText, private ActionInstitution $institution, private string $titleText, private int $finalVoteText, private int $promulgationText) {}

        public function __get($attribute)
        {
            switch ($attribute)
            {
                case 'idText':
                    $this->idText;
                    break;
                case 'institution':
                    $this->institution->label;
                    break;
                case 'titleText':
                    $this->titleText;
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
                case 'idText':
                    $this->idText;
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
            $result = $this->idText . ' | ' . $this->institution->label . ' | ' . $this->titleText . ' | ' . $this->finalVoteText . ' | ' . $this->promulgationText . ' | ' ;
            return $result;
        }

        public function giveIdText()
        {
            return $this->idText;
        }
    }
?>

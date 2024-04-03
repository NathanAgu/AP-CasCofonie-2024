<?php
    class ActionText
    {
        public function __construct(private int $idText, private ActionInstitution $institution, private string $titleText, private int $finalVoteText, private int $promulgationText) {}

        public function __get($attribute)
        {
            switch ($attribute)
            {
                case "idText":
                    return $this->idText;
                case "institution":
                    return $this->institution;
                case "titleText":
                    return $this->titleText;
                case "finalVoteText":
                    return $this->finalVoteText;
                case "promulgationText":
                    return $this->promulgationText;
            }
        }

        public function __set($attribute, $value)
        {
            switch ($attribute)
            {
                case 'idText':
                    $this->idText = $value;
                    break;
                case 'institution':
                    $this->institution = $value;
                    break;
                case "titleText":
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

        public function giveTitleText()
        {
            return $this->titleText;
        }
    }
?>

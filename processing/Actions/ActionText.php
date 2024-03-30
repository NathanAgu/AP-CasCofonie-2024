<?php
    class ActionText
    {
        public function __construct(private int $id, private ActionInstitution $institution, private string $title, private int $finalVoteText, private int $promulgationText) {}

        public function __get($attribute)
        {
            switch ($attribute)
            {
                case 'id':
                    break;
                case 'institution':
                    break;
                case 'title':
                    break;
                case 'finalVoteText':
                    break;
                case 'promulgationText':
                    break;
            }
        }

        public function __set($attribute, $value)
        {
            switch ($attribute)
            {
                
            }
        }
    }
?>

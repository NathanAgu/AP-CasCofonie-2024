<?php
    include_once("tools/autoload.php");

    class ContainerVote
    {
        private $votes;

        public function __construct()
        {
            $this->votes = new ArrayObject();
        }

        public function addVote($text, $article, $jourVote, $organ, $nbrVoteY, $nbrVoteN)
        {
            $this->votes->append(new ActionVote($text, $article, $jourVote, $organ, $nbrVoteY, $nbrVoteN));
        }

        public function listVote()
        {
            $list = '';
		    foreach ($this->votes as $vote)
		    	{	
                    $list = $list.$vote->displayVote();
		    	}
		    return $list;
        }
        
        

    }
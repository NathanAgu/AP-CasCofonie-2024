<?php
    class viewText
    {
        public function __construct(){}

        public function displayText($list)
        {
            $listText = explode("|",$list);

            echo '<table class="table table-striped table-bordered table-sm ">
					<thead>
						<tr>
							<th scope="col">id Texte</th>
							<th scope="col">Libelle Institution</th>
                            <th scope="col">Titre Texte</th>
                            <th scope="col">Vote Final</th>
                            <th scope="col">Promulgation</th>
						</tr>
					</thead>
					<tbody>';
			$nbE=0;
			while ($nbE<sizeof($listText))
			{	
				$i=0;
				while (($i<5) && ($nbE<sizeof($listText)))
				{
					echo '<td scope>';
						echo trim($listText[$nbE]);
					$i++;
					$nbE++;
					echo '</td>';
				}
				echo '</tr>';
			}
			echo '</tbody>';
			echo '</table>';
        }
        

        public function addText()
        {
            echo "Page d'ajout texte.";
        }

        public function removeText()
        {
            echo "Page de suppression texte.";
        }

		public function generalTexts($listTexts, $listArticles, $listAmendments)
		{
			$texts = explode("|",$listTexts);
			$articles = explode("|",$listArticles);
			$amendments = explode("|",$listAmendments);

			
			$iText=2;
			$iArticle=2;
			
			?>
			
			    
			<?php

			while($iText<sizeof($texts))
			{
				echo $texts[$iText].'<br>';
				foreach($articles as $article)
				{
					if($article == $texts[$iText])
					{
						echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$articles[$iArticle] .'<br>';
						$iAmendment=0;
						while($iAmendment<sizeof($amendments))
						{
							if($amendments[$iAmendment] == $texts[$iText] and $amendments[$iAmendment+1] == $articles[$iArticle])
							{
								echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$amendments[$iAmendment+3].' : '.$amendments[$iAmendment+4].'<br>';
								$iAmendment+=6;
							}
							else $iAmendment+=6;
						}
						$iArticle+=4;
					}			 	
				}
				echo '<br>';
				$iText+=5;
			}
		}
    }
?>
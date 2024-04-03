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

			var_dump($texts);
			var_dump($articles);
			var_dump($amendments);

    }
?>
<?php
    class viewArticle
    {
        public function __construct(){}

        public function displayArticle($list)
        {
            $listText = explode("|",$list);

            echo '<table class="table table-striped table-bordered table-sm ">
					<thead>
						<tr>
							<th scope="col">Libelle Texte</th>
							<th scope="col">Id Séquencielle Article </th>
                            <th scope="col">Titre Article</th>
                            <th scope="col">Liaison de l article</th>
						</tr>
					</thead>
					<tbody>';
			$nbE=0;
			while ($nbE<sizeof($listText))
			{	
				$i=0;
				while (($i<4) && ($nbE<sizeof($listText)))
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

        public function addArticle()
        {
            echo "Page d'ajout d'article.";
        }

        public function removeArticle()
        {
            echo "Page de suppression d'article.";
        }
    }
?>
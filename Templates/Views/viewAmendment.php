<?php
    class viewAmendment
    {
        public function __construct(){}

        public function displayAmendment($list)
        {
            $listAmendment = explode("|",$list);

            echo '<table class="table table-striped table-bordered table-sm ">
					<thead>
						<tr>
							<th scope="col">Titre Texte</th>
							<th scope="col">Titre Article</th>
                            <th scope="col">Id Sequentiel</th>
                            <th scope="col">Libelle Amendement</th>
                            <th scope="col">Texte Amendement</th>
                            <th scope="col">Date Amendement</th>
						</tr>
					</thead>
					<tbody>';
			$nbE=0;
			while ($nbE<sizeof($listAmendment))
			{	
				$i=0;
				while (($i<6) && ($nbE<sizeof($listAmendment)))
				{
					echo '<td scope>';
						echo trim($listAmendment[$nbE]);
					$i++;
					$nbE++;
					echo '</td>';
				}
				echo '</tr>';
			}
			echo '</tbody>';
			echo '</table>';
        }

        public function addAmendment()
        {
            echo "Page d'ajout d'ammendement.";
        }

        public function removeAmendment()
        {
            echo "Page de suppression d'ammendement.";
        }

        
    }
?>
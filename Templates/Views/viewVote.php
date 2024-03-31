<?php
    class viewVote
    {
        public function __construct(){}

        public function displayVote($list)
        {
            $listVote = explode("|",$list);

            echo '<table class="table table-striped table-bordered table-sm ">
					<thead>
						<tr>
							<th scope="col">Libelle Texte</th>
							<th scope="col">Libelle Article</th>
                            <th scope="col">Jour du Vote</th>
                            <th scope="col">Organe</th>
                            <th scope="col">Nombre Vote Pour</th>
                            <th scope="col">Nombre Vote Contre</th>
						</tr>
					</thead>
					<tbody>';
			$nbE=0;
			while ($nbE<sizeof($listVote))
			{	
				$i=0;
				while (($i<6) && ($nbE<sizeof($listVote)))
				{
					echo '<td scope>';
						echo trim($listVote[$nbE]);
					$i++;
					$nbE++;
					echo '</td>';
				}
				echo '</tr>';
			}
			echo '</tbody>';
			echo '</table>';
        }
    }
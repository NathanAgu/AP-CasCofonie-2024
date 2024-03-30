<?php
    class viewOrgan
    {
        public function __construct(){}

        public function displayOrgan($list)
        {
            $listOrgans = explode("|",$list);

            echo '<table class="table table-striped table-bordered table-sm ">
					<thead>
						<tr>
							<th scope="col">id Organe</th>
							<th scope="col">Libelle Organe</th>
                            <th scope="col">Nombre de Personne dans Organe</th>
						</tr>
					</thead>
					<tbody>';
			$nbE=0;
			while ($nbE<sizeof($listOrgans))
			{	
				$i=0;
				while (($i<3) && ($nbE<sizeof($listOrgans)))
				{
					echo '<td scope>';
						echo trim($listOrgans[$nbE]);
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
?>
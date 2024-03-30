<?php
    class viewTypeInstitution
    {
        public function __construct(){}

        public function displayTypeInstitutions($list)
        {
            $listTypeInstitution = explode("|",$list);

            echo '<table class="table table-striped table-bordered table-sm ">
					<thead>
						<tr>
							<th scope="col">id Type Institution</th>
							<th scope="col">Libelle Type Institution</th>
						</tr>
					</thead>
					<tbody>';
			$nbE=0;
			while ($nbE<sizeof($listTypeInstitution))
			{	
				$i=0;
				while (($i<2) && ($nbE<sizeof($listTypeInstitution)))
				{
					echo '<td scope>';
						echo trim($listTypeInstitution[$nbE]);
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
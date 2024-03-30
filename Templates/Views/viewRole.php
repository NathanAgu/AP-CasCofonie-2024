<?php
    class viewRole
    {
        public function __construct(){}

        public function displayRole($list)
        {
            $listRole = explode("|",$list);

            echo '<table class="table table-striped table-bordered table-sm ">
					<thead>
						<tr>
							<th scope="col">id Role</th>
                            <th scope="col">libele Role</th>
							<th scope="col">Libelle Institution</th>
                        </tr>
					</thead>
					<tbody>';
			$nbE=0;
			while ($nbE<sizeof($listRole))
			{	
				$i=0;
				while (($i<3) && ($nbE<sizeof($listRole)))
				{
					echo '<td scope>';
						echo trim($listRole[$nbE]);
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
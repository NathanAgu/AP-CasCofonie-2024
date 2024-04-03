<?php

    class viewInstitution
    {
        public function __construct(){}

        public function displayInstitutions($list)
        {
            $listInstitution = explode("|",$list);

            echo '<table class="table table-striped table-bordered table-sm ">
					<thead>
						<tr>
							<th scope="col">id Institution</th>
							<th scope="col">Libelle Institution</th>
						</tr>
					</thead>
					<tbody>';
			$nbE=0;
			while ($nbE<sizeof($listInstitution))
			{	
				$i=0;
				while (($i<2) && ($nbE<sizeof($listInstitution)))
				{
					echo '<td scope>';
						echo trim($listInstitution[$nbE]);
					$i++;
					$nbE++;
					echo '</td>';
				}
				echo '</tr>';
			}
			echo '</tbody>';
			echo '</table>';
        }

		public function addInstitution()
		{
			echo '<h3 align=center> Libelle de la nouvelle Institution : </h3>';
			echo '<form action=index.php?view=institution&action=input method=POST align=center>
							<fieldset>
								<input type=text name="labelInstitution">						
							<input type="submit" class="btn btn-primary" value=Valider></input>
							</fieldset>	
				 </form>';
		}
    }
?>
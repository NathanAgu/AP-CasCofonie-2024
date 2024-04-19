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

		function giveAllInfos($listTexts, $listArticles, $listAmendments) 		// Je créer un fonction qui me permet de récupérer le titre des TEXTES => le titre des ARTICLES => le titre et contenu des AMENDEMENTS
		{
		    $texts = explode("|",$listTexts);
		    $articles = explode("|",$listArticles);
		    $amendments = explode("|",$listAmendments);
				
		    $categories = array();
		    $iText=2;
		    $iArticle=2;
				
		    while($iText<sizeof($texts))
		    {
		        $category = $texts[$iText];					// On attribut pour chaque catégorie le nom du TEXTE
				
		        $items = array();							// On créer une variable liste "items" qui sera pour les titres des articles
		        foreach($articles as $article)
		        {
		            if($article == $texts[$iText])
		            {
		                $item = $articles[$iArticle];		// On récupère le nom de l'article qui se stock dans une variable "item"
		                $subitems = array();				// On créer un variable liste "subitems" qui sera pour les amendements de l'article
		                $iAmendment=0;						
		                while($iAmendment<sizeof($amendments))
		                {
		                    if($amendments[$iAmendment] == $texts[$iText] and $amendments[$iAmendment+1] == $articles[$iArticle])
		                    {
		                        $subitem = $amendments[$iAmendment+3].' : '.$amendments[$iAmendment+4];		// On remplit un variable "subitem" pour le titre et le contenu de l'amendemant
		                        $subitems[] = $subitem;														// On ajoute dans notre liste "subitems" (AMENDEMENTS) notre variable précédente "subitem"
		                        $iAmendment+=6;
		                    }
		                    else $iAmendment+=6;
		                }
		                $items[] = array('title' => $item, 'subitems' => $subitems);		// On ajoute dans notre liste "items" (ARTICLES) nos deux variables "item" et "subitems" (AMENDEMENT : titre et contenu)
		                $iArticle+=4;
		            }			 	
		        }
		        $categories[$category] = $items;			// On rajoute dans nos catégories nos ARTICLES contenant nos AMENDEMENTS (titre + contenus) pour chaque TEXTE respectif
		        $iText+=5;
		    }
		return $categories;
		}
		public function AllInfo($listTexts, $listArticles, $listAmendments) 
		{
			$categories = $this->giveAllInfos($listTexts, $listArticles, $listAmendments);
		
		   ?>
			<div class="container">
				<h3 style="text-align : center">Toutes les informations : Textes/Articles/Amendement </h3>
				<div id="accordion">
					<?php
					foreach ($categories as $category => $items) {
					   ?>
						<div class="card">
							<div class="card-header" id="heading-<?php echo str_replace(' ', '-', $category);?>">
								<h5 class="mb-0">
									<button class="btn btn-link" data-toggle="collapse"
											data-target="#collapse-<?php echo str_replace(' ', '-', $category);?>"
											aria-expanded="true" aria-controls="collapse-<?php echo str_replace(' ', '-', $category);?>">
										<?php echo $category;?>
									</button>
								</h5>
							</div>
		
							<div id="collapse-<?php echo str_replace(' ', '-', $category);?>" class="collapse"
								 aria-labelledby="heading-<?php echo str_replace(' ', '-', $category);?>"
								 data-parent="#accordion">
								<div class="card-body">
									<?php
									foreach ($items as $item) {
									   ?>
										<div class="card">
											<div class="card-header" id="heading-<?php echo str_replace(' ', '-', $item['title']);?>">
												<h5 class="mb-0">
													<button class="btn btn-link" data-toggle="collapse"
															data-target="#collapse-<?php echo str_replace(' ', '-', $item['title']);?>"
															aria-expanded="true"
															aria-controls="collapse-<?php echo str_replace(' ', '-', $item['title']);?>">
														<?php echo $item['title'];?>
													</button>
												</h5>
											</div>
		
											<div id="collapse-<?php echo str_replace(' ', '-', $item['title']);?>" class="collapse"
												 aria-labelledby="heading-<?php echo str_replace(' ', '-', $item['title']);?>"
												 data-parent="#accordion-<?php echo str_replace(' ', '-', $category);?>">
												<div class="card-body">
													<?php
													foreach ($item['subitems'] as $subitem) {
														echo $subitem.'<br>';
													}
												   ?>
												</div>
											</div>
										</div>
										<?php
									}
								   ?>
								</div>
							</div>
						</div>
						<?php
					}
				   ?>
				</div>
			</div>
		
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		
			<?php
		}
    }
?>
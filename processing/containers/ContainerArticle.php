<?php
    include_once("tools/autoload.php");

    class ContainerArticle
    {
        private $articles;

        public function __construct()
        {
            $this->articles = new ArrayObject();
        }

        public function addArticle($text, $idSeq, $title, $textArticle)
        {
            $this->articles->append(new ActionArticle($text, $idSeq, $title, $textArticle));
        }

        public function listArticles()
        {
            $liste = '';
		    foreach ($this->articles as $article)
		    	{	
                    $liste = $liste.$article->displayArticle();
		    	}
		    return $liste;
        }

        public function giveArticleOfTextById($id, $Text)
        {
            $find = false;
            $findArticle = null;
            $iArticle = $this->articles->getIterator();

            while ((!$find) && ($iArticle->valid()))
            {
                if ($iArticle->current()->idSeq == $id && $iArticle->current()->text == $Text)
                {
                    $find = true;
                    $findArticle = $iArticle->current();
                }
                else
                {
                    $iArticle->next();
                }
            }
            return $findArticle;
        }
    }
?>

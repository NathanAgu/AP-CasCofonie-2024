<?php
    autoloader("actionArticle");

    class containerArticle
    {
        private $articles;

        public function __construct()
        {
            $this->$articles = new ArrayObject();
        }

        public function addArticle($id, $libelle)
        {
            $this->$articles->append(new article($id, $libelle));
        }

        public function listArticles()
        {
            foreach ($this->articles as $article)
            {
                
            }
        }
    }
?>
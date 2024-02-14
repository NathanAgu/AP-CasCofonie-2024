<?php
    autoloader("actionArticle");

    class containerArticle
    {
        private $articles;

        public function __construct()
        {
            $this->articles = new ArrayObject();
        }

        public function addArticle($id, $title, $content, $text)
        {
            $this->articles->append(new article($id, $title, $content, $text));
        }

        public function listArticles()
        {
            foreach ($this->articles as $article)
            {
                // Faire la liste des articles
            }
        }
    }
?>
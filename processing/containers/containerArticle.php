<?php
    include("actionArticle");

    class ContainerArticle
    {
        private $articles;

        public function __construct()
        {
            $this->articles = new ArrayObject();
        }

        public function addArticle($id, $title, $content)
        {
            $this->articles->append(new Article($id, $title, $content));
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
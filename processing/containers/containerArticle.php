<?php
    autoloader("actionArticle");

    class ContainerArticle
    {
        private $articles;

        public function __construct()
        {
            $this->articles = new ArrayObject();
        }

        public function addArticle($id, $title, $content, $text)
        {
            $this->articles->append(new Article($id, $title, $content, $text));
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
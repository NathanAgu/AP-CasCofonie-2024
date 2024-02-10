<?
    class controller
    {
        // Constructeur de la classe "controleur"
        public function __construct()
        {

        }

        // ========================= Parties à afficher =========================
        
        // Méthode pour afficher l'entête de la page du site
        public function displayHeader()
        {
            require 'header.php';
        }

        // Méthode pour afficher la page du site (Contenu central)
        public function displayPage()
        {
            require '';
        }

        // Méthode pour afficher le pied de la page du site
        public function displayFooter()
        {
            require 'footer.php';
        }
    }
?>
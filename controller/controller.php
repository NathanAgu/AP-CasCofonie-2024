<?php
include_once ('processing/containers/containerText.php');
    class controller
    {
        
        /*********************************************************************************************************************
                                    CONSTRUCTEUR DE NOTRE CONTROLEUR
		        On construit tous les tableux d'objets et on les remplis vec la base de données
        *********************************************************************************************************************/

        public function __construct()
        {
            
        }

        /*****************************************************************************************
                                    AFFICHAGE DES ENTETES ET PIED DE PAGE
        ******************************************************************************************/

        public function displayHeader()
        {
            require 'Templates/Views/viewsHeader.php';
        }

        public function displayFooter()
        {
            require 'Templates/Views/viewsFooter.php';
        }


        /******************************************************************************************
                        EN FONCTION DE LA VUE DEMANDE ON EFFECTUE TELLE OU TELLE ACTION
        ********************************************************************************************/
        
        // Méthode pour afficher la page du site (Contenu central)
        public function displayPage()
        {
            //require 'page.php';
        }
    }
?>
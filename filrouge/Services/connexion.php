<?php 
//connexion à la base de donnée
    class BddConnexion {
        protected $_connexion;

        public function __construct() {
            $this->_connexion = new PDO('mysql:host=localhost;dbname=spectacles_musique;port=3308', 'root', '', array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)
            );
        }

        public function getConnexion() {
            return $this->_connexion;
        }
    }
?>
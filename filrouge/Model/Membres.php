<?php 
    class Membre {
        private $_nom;
        private $_prenom;
        private $_id;

        //je recupere le nom
        public function getNom() {
            return $this->_nom;
        }

        public function setNom($nom) {
            $this->_nom = $nom;
        }

        //je recupere le prenom
        public function getPrenom() {
            return $this->_prenom;
        }

        public function setPrenom($prenom) {
            $this->_prenom = $prenom;
        }

        //je recupere l'id
        public function getId() {
            return $this->_id;
        }

        public function setId($id) {
            $this->_id = $id;
        }
    }
?>
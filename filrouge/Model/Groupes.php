<?php 
    class Groupe {
        private $_nom;
        private $_id;

        public function getNom() {
            return $this->_nom;    
        }

        public function setNom($nom) {
            $this->_nom = $nom;
        }

        public function getId() {
            return $this->_id;    
        }

        public function setId($id) {
            $this->_id = $id;
        }
    }
?>
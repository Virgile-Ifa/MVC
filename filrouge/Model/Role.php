<?php 
    class Role {
        private $_libelle;
        private $_id;

        public function getLibelle() {
            return $this->_libelle;    
        }

        public function setLibelle($libelle) {
            $this->_libelle = $libelle;
        }

        public function getId() {
            return $this->_id;    
        }

        public function setId($id) {
            $this->_id = $id;
        }
    }
?>
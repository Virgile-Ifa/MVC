<?php

    //requete pour récuperer tout les roles
    require_once "connexion.php";
    require_once "../Model/Role.php";
    class RoleServices extends BddConnexion {

        public function getRole() {

            $result = $this->getConnexion()->query("SELECT * FROM `roles`");

            while($donnee = $result->fetch()) {
                $role = new Role();
                $role->setNom($donnee['libelle']);
                $role->setId($donnee['id']);
                $roleList[] = $role;
            }

            return $roleList;
        }
    }

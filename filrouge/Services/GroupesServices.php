<?php

        //requete pour recuperer tout les groupes
    require_once "connexion.php";
    require_once "../Model/Groupes.php";
    class GroupesServices extends BddConnexion {

        public function getGroupes() {

            $result = $this->getConnexion()->query("SELECT * FROM `groupes`");

            while($donnee = $result->fetch()) {
                $groupe = new Groupe();
                $groupe->setNom($donnee['nom_groupe']);
                $groupe->setId($donnee['id']);
                $groupList[] = $groupe;
            }

            return $groupList;
        }
    }

<?php 


//requete pour recuperer tout les musiciens
    require_once "connexion.php";
    require_once "../Model/Membres.php";

    class MembresServices extends BddConnexion {

        public function getMembreFromGroup($id) {
            $req = $this->getConnexion()->prepare("SELECT * FROM `musiciens` m
            JOIN groupes_musiciens_relation gmr ON m.id = gmr.id_musicien 
            WHERE gmr.id_groupe = :id
            AND m.del = 0");
            $req->bindParam(':id', $id, PDO::PARAM_INT);
            $req->execute();

            while($donnee = $req->fetch()) {
                $membre = new Membre();

                $membre->setNom($donnee['nom']);
                $membre->setPrenom($donnee['prenom']);
                $membre->setId($donnee['id']);
                $membreList[] = $membre;
            }

            return $membreList;
        }

        public function getMembres() {
            $result = $this->getConnexion()->query("SELECT * FROM `musiciens`");

            while($donnee = $result->fetch()) {
                $membre = new Membre();
                $membre->setNom($donnee['nom']);
                $membre->setPrenom($donnee['prenom']);
                $membre->setId($donnee['id']);
                $membreList[] = $membre;
            }

            return $membreList;
        }
    }
?>
<?php 
    require_once "../Services/MembresServices.php";

    if(isset($_GET["groupe"])) {
        $id = $_GET["groupe"];
        $membreservices = new MembresServices();
        $membre = $membreservices->getMembreFromGroup($id);
    }

    require_once "../Views/index.php";
?>
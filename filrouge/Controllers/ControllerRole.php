<?php 
    require_once "../Services/RoleServices.php";

    if(isset($_GET["groupe"])) {
        $id = $_GET["groupe"];
        $Roleservices = new RoleServices();
        $Role = $Roleservices->getRole($id);
    }

    require_once "../Views/index.php";
?>
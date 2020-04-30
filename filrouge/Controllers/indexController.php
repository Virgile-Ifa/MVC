<?php 

    require_once "../Services/GroupesServices.php";
  

    $groupeservices = new GroupesServices();
    $groupe = $groupeservices->getGroupes();

    if(isset($_GET["groupe"])) {
        require_once "ControllerMembre.php";
    }

    require_once "../Views/index.php";

?>
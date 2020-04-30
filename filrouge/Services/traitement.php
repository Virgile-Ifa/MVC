<?php
include "../Services/connect.php";


//ajout du role en base de données

$role=trim($_POST["role"]);

$sql = 'INSERT INTO roles(libelle) VALUES (?)';
$resultat = mysqli_prepare ($connect, $sql);
$ok = mysqli_stmt_bind_param($resultat, 's',$role);

$ok  = mysqli_stmt_execute($resultat);
if ($ok == FALSE) {
  echo "Echec de l'exécution de la requête. <br/>";
}else {
  header('location: ../Views/index.php');
}

?>

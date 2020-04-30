<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spectacles</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <!-- <h1>Liste des membres par groupe</h1>

    <form action="../Controllers/indexController.php" method="GET">
        <label for="">Liste des groupes</label>
        <select name="groupe" id="">
            <?php 
                // require_once "selectGroupe.php";
            ?>
        </select>
        <button type="submit">Envoyer</button>
    </form>
    <div>
        <?php
            // if(isset($_GET["groupe"])) {
            //     require_once "listMembre.php";
            // }
        ?>
    </div> -->

    <h1>Créer un rôle</h1>

    <form action="../Services/traitement.php" method="post">
      <label for="role">rôle</label>
      <input type="text" id="role" name="role">
      <button type="submit">Ajouter</button>
    </form>


    
    <h1>Ajouter un rôle à un muscien</h1>
    <form action="ajouterRole.php" method="post">
        <label for="">Liste des rôles</label>
        <select name="role" id="">
        <?php 
                require_once "selectRole.php";
            ?>
        </select>
        <label for="">Liste des musiciens</label>
        <select name="musicien" id="">
            <?php 
                require_once "selectMusicien.php";
            ?>
        </select>
        <button type="submit">ajouter</button>
    </form>



</body>
</html>
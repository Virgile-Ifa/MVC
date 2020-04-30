<table>

    <?php
    // affiche  la liste des membres d'un groupe
        foreach($membre as $key => $value) {
    ?>
    <tr>
        <td><?= $value->getId(); ?></td>
        <td><?= $value->getNom(); ?></td>
        <td><?= $value->getPrenom(); ?></td>
    </tr>
    <?php
        }
    ?>
</table>
<?php
        //select: menu déroulant avec la liste des musisiens
        foreach($membre as $key => $value) {
?>
            <option value="<?= $value->getId() ?>"><?= $value->getNom()?></option>
<?php
        }
?>




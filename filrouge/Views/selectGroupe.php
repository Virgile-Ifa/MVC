<?php   
                //select: menu déroulant avec la liste des groupes
        foreach($groupe as $key => $value) {
?>
            <option value="<?= $value->getId() ?>"><?= $value->getNom() ?></option>
<?php
        }
?>
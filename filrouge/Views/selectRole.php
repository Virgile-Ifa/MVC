<?php
         //select: menu déroulant avec la liste des roles
        foreach($role as $key => $value) {
?>
            <option value="<?= $value->getId() ?>"><?= $value->getRole() ?></option>
<?php
        }
?>
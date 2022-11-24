<?php require_once("database.php");?>
<table>
        <tr>
       <th>ID</th>
    <th>Nom</th>
       <th>Prénoms</th>
       <th>Modules</th>
        </tr>
    <?php foreach ($professeurs as $v1):?>
                <tr>
                  <td><?php echo($v1["id"]); ?></td>
                  <td><?php echo($v1["nom"]); ?></td>
                  <td><?php echo($v1["prenom"]); ?></td>
                  <td><?php echo($v1["modules"]); ?></td>
                </tr>
    <?php endforeach ?>
    </table>
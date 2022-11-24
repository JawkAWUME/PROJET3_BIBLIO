<?php require_once("data.projet3.php");
require_once("models3.php");
$ouvrage=ouvrage($ouvrages);
?>
    <div class="container">
        <table>
            <tr>
            <th>ID</th>
           <th>Titre</th>
           <th>Edition</th>
           <th>Auteur</th>
            </tr>
        <?php foreach ($ouvrage as $v):?>
            <tr>
                <th><?php echo($v["id"]);?></th>
                <th><?php echo($v["titre"]);?></th>
                <th><?php echo($v["date"]);?></th>
                <th><?php echo($v["auteur"]);?></th>
            </tr>
        <?php endforeach ?>
        </table>
    </div>
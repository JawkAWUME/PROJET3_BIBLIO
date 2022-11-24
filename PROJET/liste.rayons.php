<?php require_once("data.projet3.php");?>
    <div class="container">
        <table>
            <tr>
            <th>ID</th>
           <th>NOM</th>
            </tr>
        <?php foreach ($rayons as $v):?>
            <tr>
                <th><?php echo($v["id"]);?></th>
                <th><?php echo($v["nom"]);?></th>
            </tr>
        <?php endforeach ?>
        </table>
    </div>
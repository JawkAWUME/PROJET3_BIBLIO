<?php require_once("data.projet3.php");
    $exempl=exemplaire($exemplaires);?>
    <div class="container">
        <table>
            <tr>
            <th>ID</th>
           <th>DATE</th>
           <th></th>
            </tr>
        <?php foreach ($exempl as $v):?>
            <tr>
                <th><?php echo($v["id"]);?></th>
                <th><?php echo($v["date"]);?></th>
                <th><?php echo($v["ouvrage"]);?></th>
            </tr>
        <?php endforeach ?>
        </table>
    </div>

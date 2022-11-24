<?php require_once("data.projet3.php");?>
<div>
    <div class="container">
        <table>
            <tr>
            <th>ID</th>
           <th>NOM</th>
            </tr>
        <?php foreach ($rayons as $v):?>
            <tr>
                <td><?php echo($v["id"]);?></td>
                <td><?php echo($v["nom"]);?></td>
            </tr>
        <?php endforeach ?>
        </table>
    </div>
</div>
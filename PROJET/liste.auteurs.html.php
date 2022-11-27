<?php require_once("data.projet3.php");?>
    <div class="container">
        <table>
        <caption>LISTE DES AUTEURS</caption>
            <tr>
            <th>ID</th>
           <th>Nom</th>
           <th>Prénom</th>
           <th>Profession</th>
            </tr>
        <?php
        $auteurs=all_authors();
        foreach ($auteurs as $v):?>
            <tr>
                <th><?php echo($v["idA"]);?></th>
                <th><?php echo($v["nomA"]);?></th>
                <th><?php echo($v["prenomA"]);?></th>
                <th><?php echo($v["profession1"]);?></th>
            </tr>
        <?php endforeach ?>
        </table>
    </div>

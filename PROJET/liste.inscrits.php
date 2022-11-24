<?php require_once("database.php");?>
    <div class="container">
        <table>
            <tr>
                <th>MATRICULE</th>
           <th>ETUDIANT</th>
        <th>CLASSE</th>
           <th>ANNEE</th>
            </tr>
        <?php foreach ($inscriptions as $v):?>
                    <tr>
                      <th><?php echo($val["matricule"]);?></th>
                      <th><?php echo($val["etudiant"]);?></th>
                      <th><?php echo($val["classe"]);?></th>
                      <th><?php echo($val["annee"]);?></th>
                    </tr>
        <?php endforeach ?>
        </table>
    </div>
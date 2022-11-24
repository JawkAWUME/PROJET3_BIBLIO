<?php require_once("database.php");?>
    <div class="container">
        <table>
            <tr>
           <th>ID</th>
        <th>NIVEAU</th>
           <th>FILIERE</th>
           <th>LIBELLE</th>
            </tr>
        <?php foreach ($classes as $v):?>
                    <tr>
                      <td><?php echo($v["id"]); ?></td>
                      <td><?php echo($v["Filieres"]); ?></td>
                      <td><?php echo($v["niveau"]); ?></td>
                      <td><?php echo($v["libelle"]); ?></td>
                    </tr>
        <?php endforeach ?>
        </table>
        <table>
        <tr>
       <th>ID</th>
    <th>Nom</th>
       <th>Prénoms</th>
       <th>Grade</th>
        </tr>
    <?php foreach ($professeurs as $v1):?>
                <tr>
                  <td><?php echo($v1["id"]); ?></td>
                  <td><?php echo($v1["nom"]); ?></td>
                  <td><?php echo($v1["prenom"]); ?></td>
                  <td><?php 
                  echo("Ingénieur"); ?></td>
                </tr>
    <?php endforeach ?>
    </table>
    </div>

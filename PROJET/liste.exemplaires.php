
    <div class="container">
        <table>
            <caption>LISTE DES EXEMPLAIRES</caption>
            <tr>
            <th>ID</th>
           <th>DATE</th>
           <th>OUVRAGES</th>
           <th>RAYON</th>
            </tr>
        <?php 
          $exempl=exemplaire();
        foreach ($exempl as $k  => $v):?>
            <tr>
                <th><?php echo($v["id"]);?></th>
                <th><?php echo($v["date"]);?></th>
                <th><?php echo($v["ouvrage"]);?></th>
                <th><?php echo($v["rayon"]);?></th>

            </tr>
        <?php endforeach ?>
        </table>
    </div>

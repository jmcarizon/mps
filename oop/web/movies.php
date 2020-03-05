<?php require_once "web/header.php"; ?>
    <div style="text-align: right; margin: 20px 0px 10px;">
        <a id="btnAddAction" href="index.php?action=movie-add"><img src="web/image/icon-add.png" />Add Movie</a>
    </div>
    <div id="toys-grid">
        <table cellpadding="10" cellspacing="1">
            <?php if($_GET['action'] == 'transaction') { ?>
            <thead>
                <tr>
                    <th><strong>Movie Title</strong></th>
                    <th><strong>Year of Release</strong></th>
                    <th><strong>Genre</strong></th>
                </tr>
            </thead>
            <tbody>
                    <?php
                    if (! empty($result)) {
                        foreach ($result as $k => $v) {
                            ?>
                <tr>
                    <td><?php echo $result[$k]["title"]; ?></td>
                    <td><?php echo $result[$k]["release_year"]; ?></td>
                    <td><?php echo $result[$k]["genre"]; ?></td>
                    <td>
                    <a class="btnEditAction" href="index.php?action=movie-info&id=<?php echo $result[$k]["id"]; ?>">Info</a>

                    <a class="btnDeleteAction" href="index.php?action=movie-rent&id=<?php echo $result[$k]["id"]; ?>">Rent</a>

                    <a class="btnDeleteAction" href="index.php?action=movie-buy&id=<?php echo $result[$k]["id"]; ?>">Buy</a>
                    </td>
                </tr>
                    <?php
                        }
                    }
                    ?>
            </tbody>
            <?php } else { ?>
            <thead>
                <tr>
                    <th><strong>Movie Title</strong></th>
                    <th><strong>Year of Release</strong></th>
                    <th><strong>Genre</strong></th>
                    <th><strong>Status</strong></th>
                    <th><strong>Rental Cost</strong></th>
                    <th><strong>Purchase Cost</strong></th>
                </tr>
            </thead>
            <tbody>
                    <?php
                    if (! empty($result)) {
                        foreach ($result as $k => $v) {
                            ?>
                <tr>
                    <td><?php echo $result[$k]["title"]; ?></td>
                    <td><?php echo $result[$k]["release_year"]; ?></td>
                    <td><?php echo $result[$k]["genre"]; ?></td>
                    <td><?php echo $result[$k]["status"]; ?></td>
                    <td><?php echo $result[$k]["cost_rent"]; ?></td>
                    <td><?php echo $result[$k]["cost_purchase"]; ?></td>
                    <td>
                    <a class="btnEditAction" href="index.php?action=movie-edit&id=<?php echo $result[$k]["id"]; ?>"><img src="web/image/icon-edit.png" /></a>

                    <a class="btnDeleteAction" href="index.php?action=movie-delete&id=<?php echo $result[$k]["id"]; ?>"><img src="web/image/icon-delete.png" /></a>
                    </td>
                </tr>
                    <?php
                        }
                    }
                    ?>
            </tbody>
            <?php } ?> 
        
        </table>
    </div>
</body>
</html>
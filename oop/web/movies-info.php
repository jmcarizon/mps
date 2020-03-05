<?php require_once "web/header.php"; ?>
    <div style="text-align: right; margin: 20px 0px 10px;">
        <a id="btnAddAction" href="index.php?action=movie-add"><img src="web/image/icon-add.png" />Add Movie</a>
    </div>
    <table cellpadding="10" cellspacing="1">
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
            <tr>
                <td><?php echo $result[0]["title"]; ?></td>
                <td><?php echo $result[0]["release_year"]; ?></td>
                <td><?php echo $result[0]["genre"]; ?></td>
                <td><?php echo $result[0]["status"]; ?></td>
                <td><?php echo $result[0]["cost_rent"]; ?></td>
                <td><?php echo $result[0]["cost_purchase"]; ?></td>
                <td><a class="btnEditAction"
                    href="index.php?action=movie-edit&id=<?php echo $result[$k]["id"]; ?>">
                    <img src="web/image/icon-edit.png" />
                    </a>
                    <a class="btnDeleteAction" 
                    href="index.php?action=movie-delete&id=<?php echo $result[$k]["id"]; ?>">
                    <img src="web/image/icon-delete.png" />
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>
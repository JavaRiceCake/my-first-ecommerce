<?php
require('connection.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard/View Item</title>
    <link rel="stylesheet" href="./cssfolder/dashboard.css">
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <button><a href="admin.php">Home</a></button>
            <button><a href="add.php">Add Item</a></button>

        </div>
        <div class="view-contentbar">
            <div class="view-container">
                <table id="view-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>CODE</th>
                            <th>PRICE</th>
                            <th>SIZE</th>
                            <th>IMAGE</th>
                            <th>DATE-TIME</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- PHP HERE -->
                        <?php while ($result = mysqli_fetch_array($sqlitemView)) { ?>
                            <tr>
                                <td><?php echo $result['id'] ?></td>
                                <td><?php echo $result['code'] ?></td>
                                <td><?php echo $result['price'] ?></td>
                                <td><?php echo $result['size'] ?></td>
                                <td><img src="<?php echo $result['image'] ?>" width=" 50px" height="50px"></td>
                                <td><?php echo $result['added_at'] ?></td>
                                <td>
                                    <form action="update.php" method="post">
                                        <input type="hidden" name="editid" value="<?php echo $result['id'] ?>">
                                        <input type="hidden" name="editcode" value="<?php echo $result['code'] ?>">
                                        <input type="hidden" name="editprice" value="<?php echo $result['price'] ?>">
                                        <input type="hidden" name="editsize" value="<?php echo $result['size'] ?>">
                                        <input type="hidden" name="editimage" value="<?php echo $result['image'] ?>">
                                        <input class="btn-view update" type="submit" name="btnEdit" value="Update" style="background-color: #6495ED;">
                                    </form>
                                </td>
                                <td>
                                    <form action="delete.php" method="post">
                                        <input class="btn-view delete" type="submit" name="btnDelete" value="Delete" style="background-color:#FF0000;">
                                        <input type="hidden" name="deleteId" value="<?php echo $result['id'] ?>">
                                    </form>
                                </td>

                            </tr>
                        <?php } ?>
                        <!-- PHP END HERE -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</body>

</html>
<?php
require('connection.php');

if (isset($_POST['btnEdit'])) {
    $editid = $_POST['editid'];
    $editcode = strtoupper($_POST['editcode']);
    $editprice = strtoupper($_POST['editprice']);
    $editsize = strtoupper($_POST['editsize']);
    $editimage = $_POST['editimage'];
} else {
    header('location:view.php');
}
if (isset($_POST['btnUpdate'])) {
    $updateid = $_POST['updateid'];
    $updatecode = strtoupper($_POST['updatecode']);
    $updateprice = strtoupper($_POST['updateprice']);
    $updatesize = strtoupper($_POST['updatesize']);
    $updateimage = $_POST['updateimage'];

    $queryUpdate = "UPDATE tditems SET `code`=' $updatecode',`price`=' $updateprice',`size`='$updatesize',`image`='$updateimage' WHERE id = ' $updateid'";
    $sqlUpdate = $connection->query($queryUpdate);
    header('location:view.php');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard/Add Item</title>
    <link rel="stylesheet" href="./cssfolder/dashboard.css">
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <button><a href="admin.php">Home</a></button>
            <button><a href="add.php">Add Item</a></button>
            <button><a href="view.php">View Item</a></button>
        </div>
        <div class="contentbar">
            <h1>UPDATE PRODUCT DASHBOARD!</h1>
            <div class="add-container">
                <form action="" method="post">
                    <div class="input-add-con">
                        <label>Update Item Code</label>
                        <input type="text" name="updatecode" id="updatecode" value="<?php echo ltrim($editcode . '')  ?>">
                    </div>
                    <div class="input-add-con">
                        <label>Update Item Price</label>
                        <input type="text" name="updateprice" id="updateprice" min="1" value="<?php echo ltrim($editprice . '') ?>">
                    </div>
                    <div class="input-add-con">
                        <label>Update Item Size</label>
                        <input type="text" name="updatesize" id="updatesize" value="<?php echo $editsize ?>">
                    </div>
                    <div class="input-add-con">
                        <label>Update Item Image</label>
                        <input type="text" name="updateimage" id="updateimage" value="<?php echo $editimage ?>">
                    </div>
                    <input type="submit" name="btnUpdate" value="UPDATE ITEM">
                    <input type="hidden" name="updateid" value="<?php echo $editid ?>">
                </form>
            </div>
        </div>
    </div>



</body>

</html>
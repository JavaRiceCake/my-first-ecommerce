<?php
require('connection.php');
$itemdate = date('Y-m-d h:m:s');

if (isset($_POST['btnAdd'])) {
    $itemcode = strtoupper($_POST['itemcode']);
    $itemprice = strtoupper($_POST['itemprice']);
    $itemsize = strtoupper($_POST['itemsize']);
    $itemimage = $_POST['itemimage'];
    $hvitemdate = $_POST['hvitemdate'];


    $queryitemAdd = "INSERT INTO tditems VALUES('null','$itemcode','$itemprice','$itemsize','$itemimage','$hvitemdate')";
    $sqlitemAdd = $connection->query($queryitemAdd);
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
            <button><a href="">Add Item</a></button>
            <button><a href="view.php">View Item</a></button>
        </div>
        <div class="add-contentbar">
            <h1>ADD NEW PRODUCT DASHBOARD!</h1>
            <div class="add-container">
                <form action="" method="post">
                    <div class="input-add-con">
                        <label>Add Item Code</label>
                        <input type="text" name="itemcode" id="itemcode">
                    </div>
                    <div class="input-add-con">
                        <label>Add Item Price</label>
                        <input type="number" name="itemprice" id="itemprice" min="1" value="1">
                    </div>
                    <div class="input-add-con">
                        <label>Add Item Size</label>
                        <input type="text" name="itemsize" id="itemsize">
                    </div>
                    <div class="input-add-con">
                        <label>Add Item Image</label>
                        <input type="text" name="itemimage" id="itemimage" value="./imgProduct/">
                    </div>

                    <input type="hidden" name="hvitemdate" value="<?php echo $itemdate ?>">
                    <input class="btnadd" type="submit" name="btnAdd" value="ADD ITEM">

                </form>
            </div>
        </div>
    </div>



</body>

</html>
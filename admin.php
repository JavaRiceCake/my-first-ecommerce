<?php
require('connection.php');
//order pending
$queryOrders = "SELECT * FROM `tdorders` WHERE `order_type` = 'PENDING'";
$sqlOrders = $connection->query($queryOrders);
$countPending = mysqli_num_rows($sqlOrders);

//order count
$queryCounts = "SELECT * FROM  tdorders";
$sqlCounts = $connection->query($queryCounts);
$countOrders = mysqli_num_rows($sqlCounts);

//income cout
$queryIncome = "SELECT SUM(`order_totalprice`) FROM `tdorders` WHERE `order_type`='DONE'";
$sqlIncome = $connection->query($queryIncome);
$countIncome = mysqli_fetch_array($sqlIncome);

//update done
if (isset($_POST['btnDone'])) {
    $hvId = $_POST['hvId'];
    $queryDone = "UPDATE tdorders SET order_type = 'DONE' WHERE id =$hvId ";
    $sqlDone = $connection->query($queryDone);
}
//Delete Cancel Order

if (isset($_POST['btnCancel'])) {

    $hvDeleteid = $_POST['hvDeleteid'];
    $queryCancel = "DELETE FROM tdorders WHERE id = $hvDeleteid";
    $sqlCancel = $connection->query($queryCancel);
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./cssfolder/dashboard.css">
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <button><a href="add.php">Add Item</a></button>
            <button><a href="view.php">View Item</a></button>
        </div>

        <div class="admin-content-con">
            <div class="notif-con">
                <div class="notif orders">
                    <p>Total Orders</p>
                    <div class="notif-count">
                        <p><?php echo $countOrders ?></p>
                    </div>
                </div>
                <div class="notif pending">
                    <p>Total Pending</p>
                    <div class="notif-count ">
                        <p><?php echo $countPending ?></p>
                    </div>
                </div>
                <div class="notif income">
                    <p>Total Income</p>
                    <div class="notif-count ">
                        <p><?php echo $countIncome[0] ?></p>
                    </div>
                </div>


            </div>
            <div class="order-con">
                <div class="order-info">
                    <table id="admin-main">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Qty</th>
                                <th>Size</th>
                                <th>Payment</th>
                                <th>Item</th>
                                <th>Date</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- PHP HERE -->
                            <?php while ($result = mysqli_fetch_array($sqlOrders)) { ?>
                                <tr>
                                    <td><?php echo $result['id'] ?></td>
                                    <td><?php echo $result['fname'] ?> <?php echo $result['lname'] ?></td>
                                    <td><?php echo $result['order_qty'] ?></td>
                                    <td><?php echo $result['order_size'] ?></td>
                                    <td><?php echo $result['order_totalprice'] ?></td>
                                    <td><img src=" <?php echo $result['order_image'] ?>" alt=" <?php echo $result['order_code'] ?>" width="100%" height="50px"></td>
                                    <td><?php echo $result['order_date'] ?></td>
                                    <td>
                                        <form action="" method="post">
                                            <input class="btn-admin done" type="submit" name="btnDone" value="DONE">
                                            <input type="hidden" name="hvId" value="<?php echo $result['id'] ?>">
                                        </form>
                                    </td>
                                    <td>
                                        <form action="" method="post">
                                            <input class="btn-admin cancel" type="submit" name="btnCancel" value="CANCEL">
                                            <input type="hidden" name="hvDeleteid" value="<?php echo $result['id'] ?>">
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
    </div>



</body>

</html>
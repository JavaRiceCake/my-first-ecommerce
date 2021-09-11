<?php
require('connection.php');
$time = date("Y-m-d h:m::s");
if (isset($_POST['btnBuy'])) {
    $orderId = $_POST['orderid'];
    $orderImage = $_POST['orderimage'];
    $orderCode = $_POST['ordercode'];
    $orderPrice = $_POST['orderprice'];
    $orderSize = $_POST['ordersize'];
    $orderQty = $_POST['orderqty'];
    $orderTotalprice = $orderPrice * $orderQty;
}
if (isset($_POST['btnProceed'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $hvCode = $_POST['hvCode'];
    $hvPrice = $_POST['hvPrice'];
    $hvSize = $_POST['hvSize'];
    $hvImage = $_POST['hvImage'];
    $hvQty = $_POST['hvQty'];
    $hvTotalprice = $_POST['hvTotalprice'];
    $hvTime = $_POST['hvTime'];
    $hvPending = $_POST['hvPending'];

    $queryOrder = "INSERT INTO tdorders VALUES('null','$fname','$lname','$email','$address','$contact','$hvCode','$hvPrice','$hvSize','$hvImage','$hvQty','$hvTotalprice','$hvPending','$hvTime')";
    $sqlOrder = $connection->query($queryOrder);
    echo '<script>alert("Success")</script>';
    echo '<script>window.location.href="index.php"</script>';
}






?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form</title>
    <link rel="stylesheet" href="./cssfolder/dashboard.css">
</head>

<body>
    <div class="order-container-main">
        <div class="details-container">
            <div class="details-order-con">
                <h3>Order Detials</h3>
                <img src="<?php echo $orderImage ?>" alt="" width="100px" height="100px">
                <p><strong>Code: </strong><?php echo $orderCode ?></p>
                <p><strong>Price: </strong><?php echo $orderPrice ?></p>
                <p><strong>Size: </strong><?php echo $orderSize ?></p>
                <p><strong>Qty: </strong><?php echo $orderQty ?></p>
                <p><strong>Total Price: </strong><?php echo $orderTotalprice ?></p>
            </div>
            <div class="details-customer-con">
                <h3>Customer Detials</h3>
                <form action="" method="post">
                    <label>First Name</label>
                    <input type="text" name="fname" id="fname" required>
                    <label>Last Name</label>
                    <input type="text" name="lname" id="lname" required>
                    <label>Email Address</label>
                    <input type="email" name="email" id="email" required>
                    <label>Address</label>
                    <input type="text" name="address" id="address" required>
                    <label>Contact Number</label>
                    <input type="number" name="contact" id="contact" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==13 ) return false;" required>
                    <!-- hv = hidden value -->
                    <input type="hidden" name="hvCode" value="<?php echo $orderCode ?>">
                    <input type="hidden" name="hvPrice" value="<?php echo $orderPrice ?>">
                    <input type="hidden" name="hvSize" value="<?php echo $orderSize ?>">
                    <input type="hidden" name="hvImage" value="<?php echo $orderImage ?>">
                    <input type="hidden" name="hvQty" value="<?php echo $orderQty ?>">
                    <input type="hidden" name="hvTotalprice" value="<?php echo $orderTotalprice ?>">
                    <input type="hidden" name="hvTime" value="<?php echo $time ?>">
                    <input type="hidden" name="hvPending" value="PENDING">
                    <input class="btnOrder orderProceed" type="submit" name="btnProceed" value="PROCEED">
                </form>
                <form action="index.php" method="post">
                    <input class="btnOrder orderCancel" type="submit" name="btnCancel" value="CANCEL">
                </form>

            </div>
        </div>


    </div>

</body>

</html>
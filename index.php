<?php
require('connection.php');
?>

<!-- PHP END -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoubleR</title>
    <link rel="stylesheet" href="./cssfolder/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>


<body>
    <div class="main-con">
        <div class="leftvar">
            <div id="iconTrigger" class="icon-con">
                <i id="arrow" class="fas fa-chevron-right"></i>
            </div>
            <div class="category">
                <h5>Categories</h5>
            </div>
            <div class="category">
                <ul>
                    <li><a href="#">New Product</a></li>
                    <li><a href="#">Comming Soon</a></li>
                    <li><a href="#">Latest</a></li>
                    <li><a href="#">Trends</a></li>
                    <li><a href="#">Men</a></li>
                    <li><a href="#">Women</a></li>
                    <li><a href="#">Teens</a></li>
                    <li><a href="#">T-shirt</a></li>
                    <li><a href="#">Shorts</a></li>
                    <li><a href="#">Dress</a></li>
                    <li><a href="#">Pants</a></li>
                </ul>
            </div>
        </div>
        <div class="topvar">
            <div class="nav-items logo">
                <img src="./img/logo.png" alt="logo" width="100px" height="100px">
            </div>
            <div class="nav-items list">
                <div class="show-top-menu"><i class="fas fa-bars"></i></div>
                <ul class="mainMenu close">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Product</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">About</a></li>
                    <div class="close-top-menu close"><i class="fas fa-times"></i></div>
                </ul>
            </div>
        </div>
        <div class="center-con">
            <!-- PHP HERE -->
            <?php while ($result = mysqli_fetch_array($sqlitemView)) { ?>
                <div class="product">
                    <div class="product-image">
                        <img src="<?php echo $result['image'] ?>" alt="<?php echo $result['code'] ?>">
                    </div>
                    <div class="product-info">
                        <h5><strong>Code:</strong><?php echo $result['code'] ?></h5>
                        <p><strong>Price:</strong>&#8369 <?php echo $result['price'] ?></p>
                        <p><strong>Size:</strong><?php echo $result['size'] ?></p>
                    </div>
                    <!-- <div class="product-icon">
                        <i class="far fa-heart favorite"></i>
                        <i class="fas fa-cart-plus"></i>
                    </div> -->
                    <div class="product-buy-btn">
                        <form action="orderform.php" method="post">
                            <label style="margin-left:-5px"><strong>Qty:</strong></label>
                            <input type="number" name="orderqty" id="qty" min="1" max="20" value="1"><br><br>
                            <input type="hidden" name="orderid" value="<?php echo $result['id'] ?>">
                            <input type="hidden" name="orderimage" value="<?php echo $result['image'] ?>">
                            <input type="hidden" name="ordercode" value="<?php echo $result['code'] ?>">
                            <input type="hidden" name="orderprice" value="<?php echo $result['price'] ?>">
                            <input type="hidden" name="ordersize" value="<?php echo $result['size'] ?>">
                            <button type="submit" name="btnBuy">
                                <p>Buy</p><i class="fas fa-shopping-basket"></i>
                            </button>
                        </form>
                        <button style="background-color:cadetblue;">
                            <p>View</p>
                        </button>
                    </div>
                </div>
            <?php } ?>
            <!-- PHP END HERE -->
        </div>
        <div class="footer">
            <div class="footer-items">
                <h6>Our Product</h6>
                <ul>
                    <li>T-shirt</li>
                    <li>Short</li>
                    <li>OverSize T-Shirt</li>
                    <li>Men</li>
                    <li>Wowen</li>
                </ul>
            </div>
            <div class="footer-items">
                <h6>Social Media</h6>
                <ul>
                    <li>FaceBook</li>
                    <li>Instagram</li>

                </ul>
            </div>
            <div class="footer-items">
                <h6>Contact Us</h6>
                <ul>
                    <li>Phone: 09125929730</li>
                    <li>rosasrjay@gmail.com</li>
                    <li>12-53-07-23</li>
                </ul>
            </div>
            <div class="footer-items">
                <h6>Others</h6>
                <ul>
                    <li>Payment Methods</li>
                    <li>Refund</li>
                    <li>Note</li>
                    <li>Shipping Price</li>
                    <li>Location</li>
                </ul>
            </div>
        </div>
    </div>

    <script src="index.js"></script>
    <script src="click.js"></script>
</body>

</html>
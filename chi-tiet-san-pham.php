<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="profile.js"></script>
    <link rel="stylesheet" href="All.css">
    <link rel="stylesheet" href="fontawesome-free-6.4.2-web/css/all.css">
    <title>Document</title>
</head>

<body>
    <?php
    include("ketnoi.php");
    require("dangki.php");
    require("dangnhap.php");
    require("header.php");
    require("gio-hang.php");
    $sql = "SELECT * FROM `danhmucsach` WHERE MA_SP =  " . $_GET['id'];
    $result = $conn->query($sql);
    ?>
    <div>
        <?php
        while ($row = $result->fetch_array()) :
        ?>
            <div>
                <form action="" method="post">
                    <div class="detail_products">
                        <img class="detail_img" src="img/<?php echo $row["IMG_SP"]; ?> " alt="">
                        <div class="detail_products_content">
                            <p class="detail_name"> <?php echo $row["TEN_SP"]; ?></p>
                            <p class="detail_price"> <?php echo $row["GIA_MOI"]; ?>Đ </p>
                            <p class="detail_product"> <?php echo $row["THONG_TIN"]; ?> </p>
                            <p style="font-size: larger;">Số lượng: <?php echo $row["SL_TON"] ?></p>
                        </div>
                        <div class="addProductsToBuy">
                            <button class="addButton" name="addToCart"><i class="fa-solid fa-cart-plus"></i>Thêm vào giỏ hàng</button>
                            <button class="buyButton"> Mua hàng</button>
                        </div>

                    </div>

            </div>
            </form>
        <?php
        endwhile;
        ?>
    </div>

</body>

</html>
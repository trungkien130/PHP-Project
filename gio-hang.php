<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="profile.js"></script>
    <link rel="stylesheet" href="All.css">
    <link rel="stylesheet" href="fontawesome-free-6.4.2-web/css/all.css">
</head>

<?php
if (!isset($_SESSION['cart']))
    $_SESSION['cart'] = [];
if (isset($_GET['delid']) && ($_GET['delid'] >= 0)) {
    array_splice($_SESSION['cart'], $_GET['delid'], 1);
}
if (isset($_POST['addToCart']) && ($_POST['addToCart'])) {
    $anh = $_POST['IMG_SP'];
    $tensp = $_POST['TEN_SP'];
    $GIABAN_TMD = $_POST['GIA_MOI'];
    $soluong = $_POST['SL_TON'];
    $fl = 0;
    for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {

        if ($_SESSION['cart'][$i][1] == $tensp) {
            $fl = 1;
            $soluongnew = $soluong + $_SESSION['cart'][$i][3];
            $_SESSION['cart'][$i][3] = $soluongnew;
            break;
        }
    }
    if ($fl == 0) {
        $sp = [$anh, $tensp, $GIABAN_TMD, $soluong];
        $_SESSION['cart'][] = $sp;
    }
    header('Location:webbansach.php');
}
?>

<body>

    <div class="cartModal" id="cartModal">
        <div class="cartHeader">
            <p onclick="cartClose()" class="closeCartModal">X</p>
            <p class="cartTitle">Giỏ hàng</p>
        </div>
        <?php foreach ($_SESSION['cart'] as $cartItem) : ?>
            <div class="detail_products_cart">
                <img class="cartImg" src="img/<?php echo $cartItem[0]; ?>" alt="">
                <div class="contentCartInfor">
                    <p class="nameProductInCart"><?php echo $cartItem[1]; ?></p>
                    <p class="priceProductInCart">Giá bán: <?php echo $cartItem[2]; ?></p>
                    <p>Số lượng: <?php echo $cartItem[3]; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
        <div>

        </div>
    </div>

</body>

</html>
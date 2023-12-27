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
session_start();
include("ketnoi.php");
if (!isset($_SESSION['addToCart']))
    $_SESSION['addToCart'] = [];
if (isset($_GET['delid']) && ($_GET['delid'] >= 0)) {
    array_splice($_SESSION['addToCart'], $_GET['delid'], 1);
}
if (isset($_POST['btncart']) && ($_POST['btncart'])) {
    $anh = $_POST['anh'];
    $tensp = $_POST['tensp'];
    $GIAMGIA_TMD = $_POST['giamgia'];
    if ($GIAMGIA_TMD == 1) {
        $GIABAN_TMD = $_POST['giadagiam'];
    } else {
        $GIABAN_TMD = $_POST['giaban'];
    }
    $soluong = $_POST['soluong'];
    $fl = 0;
    for ($i = 0; $i < sizeof($_SESSION['addToCart']); $i++) {

        if ($_SESSION['addToCart'][$i][1] == $tensp) {
            $fl = 1;
            $soluongnew = $soluong + $_SESSION['addToCart'][$i][3];
            $_SESSION['addToCart'][$i][3] = $soluongnew;
            break;
        }
    }
    if ($fl == 0) {
        $sp = [$anh, $tensp, $GIABAN_TMD, $soluong];
        $_SESSION['addToCart'][] = $sp;
    }
    header('Location:cart_products_tmd.php');
}
?>

<body>

    <div class="cartModal" id="cartModal">
        <div class="cartHeader">
            <p onclick="cartClose()" class="closeCartModal">X</p>
            <p class="cartTitle">Giỏ hàng</p>
        </div>
        <div class="detail_products_content">
            <p> <?php echo $row["TEN_SP"]; ?></p>
            <p> <?php echo $row["GIA_MOI"]; ?>Đ </p>
            <p>Số lượng: <?php echo $row["SL_TON"] ?></p>
        </div>
        <div>

        </div>
    </div>

</body>

</html>
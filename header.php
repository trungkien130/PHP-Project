<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="profile.js"></script>
    <link rel="stylesheet" href="main.css">

    <link rel="stylesheet" href="fontawesome-free-6.4.2-web/css/all.css">
    <title>Vivabook.com</title>
</head>

<body>

    <header>
        <div>
            <div>
                <a href="webbansach.php"><img src="img/vnb_logo_2x.png" alt="" /></a>
            </div>
            <div>
                <input class="searchItem" type="search" placeholder="Tìm kiếm tựa sách, tác giả" />
                <i class="fa-solid fa-magnifying-glass"></i>
                <button class="search_btn" type="submit">Tìm sách</button>
                <i class="fa-solid fa-cart-shopping"></i>
            </div>
            <div>
                <button class="sigup_btn" onclick="sigup()">Đăng kí</button>
                <button class="login_btn" onclick="login()">Đăng nhập</button>
                <a class="thongtinkh" href="khachhang-profile.php">Thông tin khách hàng</a>
            </div>
        </div>
    </header>
    <nav>
    <?php
        // Kiểm tra xem người dùng đã đăng nhập hay chưa
        if (isset($_SESSION["ID"])) {
            // Người dùng đã đăng nhập, hiển thị tên người dùng và liên kết đăng xuất
            echo "Chào mừng, " . $_SESSION["email"] . "! ";
            echo "<a href='logout.php'>Đăng xuất</a>";
        } else {
        }
        ?>
        <div>
            <i class="fa-solid fa-bars-staggered"></i>
            <span class="listBook"> Danh mục sách</span>
            <i class="fa-solid fa-angle-down"></i>
        </div>
        <div>
            <i class="fa-solid fa-phone"></i>
            <span class="Hotline">Hotline: 1900 6401</span>
            <i class="fa-solid fa-comments"></i>
            <a href="" class="supportOnl">Hỗ trợ trực tuyến</a>
        </div>
    </nav>
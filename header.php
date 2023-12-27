<?php
if (isset($_GET['act']) && $_GET['act'] == 'logout') {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="profile.js"></script>
    <link rel="stylesheet" href="All.css">

    <link rel="stylesheet" href="fontawesome-free-6.4.2-web/css/all.css">
    <title>Vivabook.com</title>
</head>
<?php
ob_start();
?>


<body>
    <?php
    // Đọc dữ liệu và hiển thị
    //1. kết nối
    include("ketnoi.php");
    //2. tạo truy vấn đọc dữ liệu từ bảng
    $sql = "SELECT * FROM DANHMUCSACH WHERE 1=1 ";
    // xử lý khi tìm kiếm
    if (isset($_GET["search_btn"])) {
        $keyword = $_GET["keyword"];
        if (isset($keyword)) {
            $sql .= " and TEN_SP like '%$keyword%'";
        }
    }
    //3. Thực thi câu lệnh truy vấn
    $result = $conn->query($sql);
    //4. duyệt và hiển thị -> tblLTK

    ?>

    <header>
        <div>
            <div>
                <a href="webbansach.php"><img src="img/vnb_logo_2x.png" alt="" /></a>
            </div>
            <div>
                <input class="searchItem" type="search" id="keyword" placeholder="Tìm kiếm tựa sách, tác giả" />
                <i class="fa-solid fa-magnifying-glass"></i>
                <button class="search_btn" type="submit">Tìm sách</button>
                <button onclick="cartOpen()" class="cartOpen"><i class="fa-solid fa-cart-shopping"></i></button>
            </div>
            <div>
                <?php if (isset($_SESSION['user_name']) && ($_SESSION['password']) != "") {
                    echo '<a id="thongtinkhLink" class="thongtinkh" href="khachhang-profile.php">Thông tin khách hàng</a>';
                    echo '<a id="logoutBtn" class="logoutBtn" href="?act=logout"  ">Đăng xuất</a>';
                } else {
                    echo '<button id="signupBtn" class="sigup_btn" onclick="sigup()">Đăng kí</button>';
                    echo '<button id="loginBtn" class="login_btn" onclick="login()">Đăng nhập</button>';
                }
                ?>
            </div>
        </div>
    </header>
    <nav>

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
    </nav>
</body>
<?php
ob_flush();
?>

</html>
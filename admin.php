<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="profile.js"></script>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="fontawesome-free-6.4.2-web/css/all.css">
    <title>Document</title>
</head>
<?php
include "ketnoi.php";
session_start();
?>
<?php

if (!isset($_SESSION['TAI_KHOAN']) || !isset($_SESSION['MAT_KHAU'])) {
    header("Location: admin-dangnhap.php");
    exit();
}
if (isset($_GET["action"]) && ($_GET["action"] == "adminLogout")) {
    unset($_SESSION['TAI_KHOAN'], $_SESSION['MAT_KHAU']);
    header("Location: admin-dangnhap.php");
    exit();
}
?>

<body>
    <div class="logout_button">
        <button class="Logout"><a href="admin-dangnhap.php?action=adminLogout"><i class="fa-solid fa-arrow-right-from-bracket"></i></a></button>
    </div>
    <div class="warpper">
        <div class="logo">
            <a href="admin.php"><img src="img/logovnb.png" alt=""></a>
            <h3>Trung Kiên</h3>
            <span>Chào mừng trở lại</span>
        </div>
        <div>
            <ul class="list-setting">
                <li> <a href="data-table-control.php"><i class="fa-solid fa-wrench"></i> <span class="menu-lable">Bảng điểu khiển</span> </a></li>
                <li> <a href="data-table-user.php"><i class="fa-solid fa-users"></i> <span class="menu-lable">Quản lý khách hàng</span> </a></li>
                <li> <a href="admin-quanly-sanpham.php"><i class="fa-solid fa-tag"></i> <span class="menu-lable">Quản lý sản phẩm</span> </a></li>
                <li> <a href="data-table-oder.php"><i class="fa-solid fa-clipboard-check"></i> <span class="menu-lable">Quản lý đơn hàng</span> </a></li>
                <li> <a href="data-quan-ly-danh-muc.php"><i class="fa-solid fa-list-check"></i> <span class="menu-lable">Quản lý danh mục</span> </a></li>
                <li> <a href="admin-quanly-slide.php"><i class="fa-solid fa-address-book"></i> <span class="menu-lable"> Quản lý slide </span></a></li>
                <li> <a href="#"><i class="fa-solid fa-gear"></i> <span class="menu-lable">Cài đặt hệ thống</span> </a></li>
            </ul>
        </div>
    </div>
    <div class="admin_main_page">
        <div class="admin_control_products">
            <a href="admin-quanly-sanpham.php" class="control_link">
                <?php
                $sql_products = "SELECT COUNT(*) as total FROM 	danhmucsach";
                // Thực hiện truy vấn
                $result_products = $conn->query($sql_products);
                // Kiểm tra và hiển thị kết quả
                if ($result_products->num_rows > 0) {
                    $row_products = $result_products->fetch_assoc();
                    echo '<div style="color: white;font-size: 50px;margin-left: 25px;">' . $row_products["total"] . "<br>", '</div>';
                    echo '<div style="color: white;font-size: 20px;margin-left: 25px;">' . "sản phẩm" . '</div>';
                } else {
                    echo "Không có dữ liệu trong bảng.";
                }

                ?>
                <div class=" detail_show detail_products_show"><a href="admin-quanly-sanpham.php">Chi tiết <i class="fa-solid fa-circle-arrow-right"></i></a></div>
            </a>
        </div>

        <div class="admin_control_customer">
            <a href="data-table-user.php" class="control_link">
                <?php
                $sql_customer = "SELECT COUNT(*) as total FROM 	khachhang";
                // Thực hiện truy vấn
                $result_customer = $conn->query($sql_customer);
                // Kiểm tra và hiển thị kết quả
                if ($result_customer->num_rows > 0) {
                    $row_customer = $result_customer->fetch_assoc();
                    echo '<div style="color: white;font-size: 50px;margin-left: 25px;">' . $row_customer["total"] . "<br>", '</div>';
                    echo '<div style="color: white;font-size: 20px;margin-left: 25px;">' . "Tài khoản khách hàng" . '</div>';
                } else {
                    echo "Không có dữ liệu trong bảng.";
                }
                ?>
                <div class="detail_show detail_customer_show"><a href="data-table-user.php">Chi tiết <i class="fa-solid fa-circle-arrow-right"></i></a></div>
            </a>
        </div>
        <div class="admin_control_slide">
            <a href="admin-quanly-slide.php" class="control_link">
                <?php
                $sql_slide = "SELECT COUNT(*) as total FROM 	slide";
                // Thực hiện truy vấn
                $result_slide = $conn->query($sql_slide);
                // Kiểm tra và hiển thị kết quả
                if ($result_slide->num_rows > 0) {
                    $row_slide = $result_slide->fetch_assoc();
                    echo '<div style="color: white;font-size: 50px;margin-left: 25px;">' . $row_slide["total"] . "<br>", '</div>';
                    echo '<div style="color: white;font-size: 20px;margin-left: 25px;">' . "Slide" . '</div>';
                } else {
                    echo "Không có dữ liệu trong bảng.";
                }
                ?>
                <div class="detail_show detail_slide_show"><a href="admin-quanly-slide.php">Chi tiết <i class="fa-solid fa-circle-arrow-right"></i></a></div>
            </a>
        </div>


    </div>

</body>

</html>
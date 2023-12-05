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
// Kết nối 
include("ketnoi.php");
// Đọc dữ liệu slide
$sql = "SELECT * FROM slide WHERE 1=1";
$result = $conn->query($sql);
// => hiển thị trong điều khiển selected

// Thực hiện thêm dữ liệu 
$error_message = "";
if (isset($_POST["btnSubmit"])) {
    // lấy dữ liệu trên form 
    $TEN_SLIDE = $_POST["TEN_SLIDE"];
    $IMG_SLIDE = $_POST["IMG_SLIDE"];
    // kiểm tra khóa chính không được trùng 
    $sql_check = "SELECT ID FROM SLIDE WHERE ID = '$ID'";
    $result_check = $conn->query($sql_check);
    if ($result_check->num_rows > 0) {
        echo '<script>alert("Mã sản phẩm đã tồn tại. Vui lòng chọn mã sản phẩm khác.");</script>';
    } else {
        // Thực hiện thêm mới nếu không trùng mã sản phẩm
        $sql_insert = "INSERT INTO SLIDE (`TEN_SLIDE`, `IMG_SLIDE`, `NGAY_CAP_NHAT`) 
        VALUES ( '$TEN_SLIDE','$IMG_SLIDE', NOW());";

        if ($conn->query($sql_insert)) {
            header("Location: admin-quanly-slide.php");
        } else {
            $error_message = "Lỗi thêm mới! " . mysqli_error($conn);
        }
    }
}
?>

<body>
    <div class="logout_button">
        <button class="Logout"><i class="fa-solid fa-arrow-right-from-bracket"></i></button>
    </div>
    <header>
        <div class="warpper">
            <div class="logo">
                <a href="admin.php"><img src="img/logovnb.png" alt=""></a>
                <h3>Trung Kiên</h3>
                <span>Chào mừng trở lại</span>
            </div>
            <div>
                <ul class="list-setting">
                    <li> <a href="admin/data-table-control.php"><i class="fa-solid fa-wrench"></i> <span class="menu-lable">Bảng điểu khiển</span> </a></li>
                    <li> <a href="data-table-user.php"><i class="fa-solid fa-users"></i> <span class="menu-lable">Quản lý khách hàng</span> </a></li>
                    <li> <a href="admin-quanly-sanpham.php" class="active"><i class="fa-solid fa-tag"></i> <span class="menu-lable">Quản lý sản phẩm</span> </a></li>
                    <li> <a href="data-table-oder.php"><i class="fa-solid fa-clipboard-check"></i> <span class="menu-lable">Quản lý đơn hàng</span> </a></li>
                    <li> <a href="data-quan-ly-danh-muc.php"><i class="fa-solid fa-list-check"></i> <span class="menu-lable">Quản lý danh mục</span> </a></li>
                    <li> <a href="admin-quanly-sile.php"><i class="fa-solid fa-address-book"></i> <span class="menu-lable"> Quản lý slide </span></a></li>
                    <li> <a href="#"><i class="fa-solid fa-gear"></i> <span class="menu-lable">Cài đặt hệ thống</span> </a></li>
                </ul>
            </div>
        </div>
    </header>
    <form action="" method="post">
        <div class="control_products">
            <div class="control_products_head_content">
                <b> Thêm mới sản phẩm</b>
            </div>
            <div class="control_products_content">
                <a href="admin-quanly-sanpham.php" class="addNewButton">Danh sách sản phẩm </a>
                <hr>
                <table border="1px" width="100%" cellspacing="0" cellpadding="5">
                    <tbody>
                        <tr>
                            <td><label for="">Tên slide</label></td>
                            <td><input type="text" name="TEN_SLIDE" class="addnewInput"></td>
                        </tr>
                        <tr>
                            <td><label for="">Ảnh slide</label></td>
                            <td><input type="file" name="IMG_SLIDE" class="addnewInput"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" value="Thêm mới" name="btnSubmit">
                                <input type="submit" value="Làm lại" name="btnresultet">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
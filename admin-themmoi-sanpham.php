<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="profile.js"></script>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="fontawesome-free-6.4.2-web/css/all.css">
    <title>Document</title>
</head>
<?php
// Kết nối 
include("ketnoi.php");
// Đọc dữ liệu danhmucsach
$sql = "SELECT * FROM danhmucsach WHERE 1=1";
$result = $conn->query($sql);
// => hiển thị trong điều khiển selected

// Thực hiện thêm dữ liệu 
$error_message = "";
if (isset($_POST["btnSubmit"])) {
    // lấy dữ liệu trên form 
    $MA_SP = $_POST["MA_SP"];
    $TEN_SP = $_POST["TEN_SP"];
    $SL_TON = $_POST["SL_TON"];
    $IMG_SP = $_POST["IMG_SP"];
    $THONG_TIN = $_POST["THONG_TIN"];
    $GIA_NHAP = $_POST["GIA_NHAP"];
    $GIA_CU = $_POST["GIA_CU"];
    $GIA_MOI = $_POST["GIA_MOI"];

    // kiểm tra khóa chính không được trùng 
    $sql_check = "SELECT MA_SP FROM danhmucsach WHERE MA_SP = '$MA_SP'";
    $result_check = $conn->query($sql_check);
    if ($result_check->num_rows > 0) {
        echo '<script>alert("Mã sản phẩm đã tồn tại. Vui lòng chọn mã sản phẩm khác.");</script>';
    } else {
        // Thực hiện thêm mới nếu không trùng mã sản phẩm
        $sql_insert = "INSERT INTO danhmucsach (`MA_SP`, `TEN_SP`, `SL_TON`, `IMG_SP`, `THONG_TIN`, `GIA_NHAP`, `GIA_CU`, `GIA_MOI`, `NGAY_CAP_NHAT`) 
        VALUES ('$MA_SP', '$TEN_SP', '$SL_TON', '$IMG_SP', '$THONG_TIN', '$GIA_NHAP', '$GIA_CU', '$GIA_MOI', NOW());";

        if ($conn->query($sql_insert)) {
            header("Location: admin-quanly-sanpham.php");
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
                    <li> <a href="admin-quanly-sile.php"><i class="fa-solid fa-address-book"></i> <span class="menu-lable"> Quản lý silde </span></a></li>
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
                            <td><label for="">Mã sản phẩm</label></td>
                            <td><input type="text" name="MA_SP" class="addnewInput"></td>
                        </tr>
                        <tr>
                            <td><label for="">Tên sản phẩm</label></td>
                            <td><input type="text" name="TEN_SP" class="addnewInput"></td>
                        </tr>
                        <tr>
                            <td><label for="">Số lượng</label></td>
                            <td><input type="number" name="SL_TON" class="addnewInput"></td>
                        </tr>
                        <tr>
                            <td><label for="">Ảnh sản phẩm</label></td>
                            <td><input type="file" name="IMG_SP" class="addnewInput"></td>
                        </tr>
                        <tr>
                            <td><label for="">Giá nhập</label></td>
                            <td><input type="text" name="GIA_NHAP" class="addnewInput"> </td>
                        </tr>
                        <tr>
                            <td><label for="">Giá cũ</label></td>
                            <td><input type="text" name="GIA_CU" class="addnewInput"></td>
                        </tr>
                        <tr>
                            <td><label for="">Giá mới</label></td>
                            <td><input type="text" name="GIA_MOI" class="addnewInput"></td>
                        </tr>
                        <tr>
                            <td><label for="">Thông tin sản phẩm</label></td>
                            <td><textarea type="text" name="THONG_TIN" class="addnewInput" style="height: 100px;"></textarea></td>
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
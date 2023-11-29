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
// Đọc dữ liệu cần sửa 
if (isset($_GET["MA_SP"])) {

    $MA_SP = $_GET["MA_SP"];

    $sql_edit = "SELECT * FROM danhmucsach WHERE MA_SP = '$MA_SP' ";
    // thực thi câu lệnh truy vấn
    $result_edit = $conn->query($sql_edit);
    // đọc bản ghi từ kết quả 
    $row_edit = $result_edit->fetch_array();
} else {
    header("Location:admin-quanly-sanpham.php");
}
// Đọc dữ liệu phòng ban 
$sql = "SELECT * FROM danhmucsach WHERE 1=1";
$res = $conn->query($sql);
// => hiển thị trong điều khiển selected

// Thực hiện thêm dữ liệu 
$error_message = "";
if (isset($_POST["btnSubmit"])) {
    $MA_SP = $_POST["MA_SP"];
    $TEN_SP = $_POST["TEN_SP"];
    $SL_TON = $_POST["SL_TON"];
    $IMG_SP = $_POST["IMG_SP"];

    $THONG_TIN = $_POST["THONG_TIN"];
    $GIA_NHAP = $_POST["GIA_NHAP"];
    $GIA_CU = $_POST["GIA_CU"];
    $GIA_MOI = $_POST["GIA_MOI"];

    $sql_update = "UPDATE danhmucsach SET ";
    $sql_update .= "TEN_SP = '$TEN_SP', ";
    $sql_update .= "SL_TON = '$SL_TON', ";
    $sql_update .= "IMG_SP = '$IMG_SP', ";
    $sql_update .= "THONG_TIN = '$THONG_TIN', ";
    $sql_update .= "GIA_NHAP = '$GIA_NHAP', ";
    $sql_update .= "GIA_CU = '$GIA_CU', ";
    $sql_update .= "GIA_MOI = '$GIA_MOI', ";
    $sql_update .= "NGAY_CAP_NHAT = NOW() ";
    $sql_update .= "WHERE MA_SP = '$MA_SP'";


    if ($conn->query($sql_update)) {
        header("Location:admin-quanly-sanpham.php");
    } else {
        $error_message = "Lỗi sửa dữ liệu!" . mysqli_errno($conn);
    }
}
?>

<body>
    <div class="logout_button">
        <a href="webbansach.php"> <button class="Logout"><i class="fa-solid fa-arrow-right-from-bracket"></i></button></a>
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
                    <li> <a href="data-table-control.php"><i class="fa-solid fa-wrench"></i> <span class="menu-lable">Bảng điểu khiển</span> </a></li>
                    <li> <a href="data-table-user.php"><i class="fa-solid fa-users"></i> <span class="menu-lable">Quản lý khách hàng</span> </a></li>
                    <li> <a href="admin-quanly-sanpham.php" class="active"><i class="fa-solid fa-tag"></i> <span class="menu-lable">Quản lý sản phẩm</span> </a></li>
                    <li> <a href="data-table-oder.php"><i class="fa-solid fa-clipboard-check"></i> <span class="menu-lable">Quản lý đơn hàng</span> </a></li>
                    <li> <a href="data-quan-ly-danh-muc.php"><i class="fa-solid fa-list-check"></i> <span class="menu-lable">Quản lý danh mục</span> </a></li>
                    <li> <a href="admin-quanly-slide.php"><i class="fa-solid fa-address-book"></i> <span class="menu-lable"> Quản lý slide </span></a></li>
                    <li> <a href="#"><i class="fa-solid fa-gear"></i> <span class="menu-lable">Cài đặt hệ thống</span> </a></li>
                </ul>
            </div>
        </div>
    </header>

    <form action="" method="post">
        <div class="control_products">
            <div class="control_products_head_content">
                <b>Sửa sản phẩm</b>
            </div>
            <div class="control_products_content">
                <a href="admin-quanly-sanpham.php" class="addNewButton">Danh sách sản phẩm </a>
                <hr>
                <table border="1px" width="100%" cellspacing="0" cellpadding="5">
                    <tbody>
                        <tr>
                            <td>Mã sản phẩm </td>
                            <td><input type="text" name="MA_SP" id="MA_SP" readonly value="<?php echo $row_edit["MA_SP"]; ?>"></td>
                        </tr>
                        <tr>
                            <td>Tên sản phẩm </td>
                            <td><input type="text" name="TEN_SP" id="TEN_SP" value="<?php echo $row_edit["TEN_SP"]; ?>"></td>
                        </tr>
                        <tr>
                            <td>Ảnh sản phẩm </td>
                            <td><input type="file" name="IMG_SP" value="<?php echo $row_edit["IMG_SP"]; ?>"></td>

                        </tr>
                        <tr>
                            <td>Số lượng </td>
                            <td><input type="text" name="SL_TON" id="SL_TON" value="<?php echo $row_edit["SL_TON"]; ?>"></td>
                        </tr>
                        <tr>
                            <td>Thông tin </td>
                            <td><textarea name="THONG_TIN"><?php echo $row_edit["THONG_TIN"]; ?></textarea></td>
                        </tr>
                        <tr>
                            <td>Giá nhập </td>
                            <td><input type="text" name="GIA_NHAP" id="GIA_NHAP" value="<?php echo $row_edit["GIA_NHAP"]; ?>"></td>
                        </tr>
                        <tr>
                            <td>Giá cũ </td>
                            <td><input type="text" name="GIA_CU" id="GIA_CU" readonly value="<?php echo $row_edit["GIA_CU"]; ?>"></td>
                        </tr>
                        <tr>
                            <td>Giá mới </td>
                            <td><input type="text" name="GIA_MOI" id="GIA_MOI" value="<?php echo $row_edit["GIA_MOI"]; ?>"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" value="Cập nhật" name="btnSubmit">
                                <input type="reset" value="Làm lại" name="btnReset">
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
    </form>
</body>

</html>
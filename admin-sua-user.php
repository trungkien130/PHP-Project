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

include("ketnoi.php");
if (isset($_GET["MA_KH"])) {

    $MA_KH = $_GET["MA_KH"];

    $sql_edit = "SELECT * FROM khachhang WHERE MA_KH = '$MA_KH' ";

    $result_edit = $conn->query($sql_edit);

    $row_edit = $result_edit->fetch_array();
} else {
    header("Location:data-table-user.php");
}
$sql = "SELECT * FROM khachhang WHERE 1=1";
$res = $conn->query($sql);

$error_message = "";
if (isset($_POST["btnSubmit"])) {
    $MA_KH = $_POST["MA_KH"];
    $HO_TEN = $_POST["HO_TEN"];
    $MAT_KHAU = $_POST["MAT_KHAU"];
    $EMAIL = $_POST["EMAIL"];
    $DIA_CHI = $_POST["DIA_CHI"];
    $NGAY_SINH = $_POST["NGAY_SINH"];
    $GIOI_TINH = $_POST["GIOI_TINH"];

    $sql_update = "UPDATE khachhang SET ";
    $sql_update .= "HO_TEN = '$HO_TEN', ";
    $sql_update .= "MAT_KHAU = '$MAT_KHAU', ";
    $sql_update .= "EMAIL = '$EMAIL', ";
    $sql_update .= "DIA_CHI = '$DIA_CHI', ";
    $sql_update .= "NGAY_SINH = '$NGAY_SINH', ";
    $sql_update .= "GIOI_TINH = '$GIOI_TINH', ";
    $sql_update .= "NGAY_CAP_NHAT = NOW() ";
    $sql_update .= "WHERE MA_KH = '$MA_KH'";


    if ($conn->query($sql_update)) {
        header("Location:data-table-user.php");
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
                    <li> <a href="admin-quanly-sanpham.php" class="active"><i class="fa-solid fa-tag"></i> <span class="menu-lable">Quản lý khách hàng</span> </a></li>
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
                <b>Sửa thông tin khách hàng</b>
            </div>
            <div class="control_products_content">
                <a href="data-table-user.php" class="addNewButton">Danh sách khách hàng </a>
                <hr>
                <table border="1px" width="100%" cellspacing="0" cellpadding="5">
                    <tbody>
                        <tr>
                            <td>Mã khách hàng </td>
                            <td><input class="edit_input" type="text" name="MA_KH" id="MA_KH" readonly value="<?php echo $row_edit["MA_KH"]; ?>"></td>
                        </tr>
                        <tr>
                            <td>Tên khách hàng </td>
                            <td><input class="edit_input" type="text" name="HO_TEN" id="HO_TEN" value="<?php echo $row_edit["HO_TEN"]; ?>"></td>
                        </tr>
                        <tr>
                            <td>Email khách hàng </td>
                            <td><input class="edit_input" type="Email" name="EMAIL" value="<?php echo $row_edit["EMAIL"]; ?>"></td>

                        </tr>
                        <tr>
                            <td>Mật Khẩu</td>
                            <td><input class="edit_input" type="text" name="MAT_KHAU" id="MAT_KHAU" value="<?php echo $row_edit["MAT_KHAU"]; ?>"></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ </td>
                            <td><textarea class="edit_input" name="DIA_CHI"><?php echo $row_edit["DIA_CHI"]; ?></textarea></td>
                        </tr>
                        <tr>
                            <td>Ngày sinh </td>
                            <td><input class="edit_input" type="text" name="NGAY_SINH" id="NGAY_SINH" readonly value="<?php echo $row_edit["NGAY_SINH"]; ?>"></td>
                        </tr>
                        <tr>
                            <td>Giới tính </td>
                            <td><input class="edit_input" type="text" name="GIOI_TINH" id="GIOI_TINH" value="<?php
                                                                                                                if ($row_edit["GIOI_TINH"] == 1) {
                                                                                                                    echo "Nam";
                                                                                                                } else {
                                                                                                                    echo "Nữ";
                                                                                                                }
                                                                                                                ?>"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" value="Cập nhật" name="btnSubmit" class="edit_submit">
                                <input type="reset" value="Làm lại" name="btnReset" class="edit_reset">
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
    </form>
</body>

</html>
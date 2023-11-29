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
ob_start();
include("ketnoi.php");
$sql = "SELECT * FROM `khachhang` WHERE 1=1 ";
if (isset($_GET["btnSearch"])) {
    $keyword = $_GET["keyword"];
    if (isset($keyword)) {
        $sql .= " and TEN_SP like '%$keyword%'";
    }
}
$result = $conn->query($sql);
?>

<body>
    <header>
        <div class="logout_button">
            <a href="webbansach.php"><button class="Logout"><i class="fa-solid fa-arrow-right-from-bracket"></i></button></a>
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
                    <li> <a href="data-table-user.php" class="active"><i class="fa-solid fa-users"></i> <span class="menu-lable">Quản lý khách hàng</span> </a></li>
                    <li> <a href="admin-quanly-sanpham.php"><i class="fa-solid fa-tag"></i> <span class="menu-lable">Quản lý sản phẩm</span> </a></li>
                    <li> <a href="data-table-oder.php"><i class="fa-solid fa-clipboard-check"></i> <span class="menu-lable">Quản lý đơn hàng</span> </a></li>
                    <li> <a href="data-quan-ly-danh-muc.php"><i class="fa-solid fa-list-check"></i> <span class="menu-lable">Quản lý danh mục</span> </a></li>
                    <li> <a href="admin-quanly-slide.php"><i class="fa-solid fa-address-book"></i> <span class="menu-lable"> Quản lý slide </span></a></li>
                    <li> <a href="#"><i class="fa-solid fa-gear"></i> <span class="menu-lable">Cài đặt hệ thống</span> </a></li>
                </ul>
            </div>
        </div>
    </header>
    <div class="control_products">
        <div class="control_products_head_content">
            <b>Danh sách khách hàng</b>
        </div>
        <div class="table_user_content">
            <table border="1px" width="100%" cellspacing="0" cellpadding="5">
                <thead>
                    <tr>
                        <th>Mã khách hàng</th>
                        <th>Họ và tên</th>
                        <th>Ngày sinh</th>
                        <th>Điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Email</th>
                        <th>Giới tính</th>
                        <th>Điểm tích lũy</th>
                        <th>Ngày cập nhật</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = $result->fetch_array()) :
                    ?>
                        <tr>
                            <td><?php echo $row["MA_KH"]; ?></td>
                            <td><?php echo $row["HO_TEN"]; ?></td>
                            <td><?php echo $row["NGAY_SINH"]; ?></td>
                            <td><?php echo $row["DIEN_THOAI"]; ?></td>
                            <td><?php echo $row["DIA_CHI"]; ?></td>
                            <td><?php echo $row["EMAIL"]; ?></td>
                            <td><?php if ($row["GIOI_TINH"] == 1) {
                                    echo "Nam";
                                } else {
                                    echo "Nữ";
                                } ?></td>
                            <td><?php echo $row["TICH_DIEM"]; ?></td>
                            <td><?php echo $row["NGAY_CAP_NHAT"]; ?></td>
                            <td> <a href="">
                                    Sửa
                                </a>
                                <br>
                                <a href="data-table-user.php?MA_KH=<?php echo $row["MA_KH"]; ?>" onclick="if(confirm('Bạn có muốn xóa không')){return true;}else{return false;}">
                                    Xóa
                                </a>
                            </td>
                        </tr>
                    <?php
                    endwhile;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
<?php
//  xử lý với chức năng xóa
if (isset($_GET["MA_KH"])) {
    // thực hiện xóa sản phẩm theo MA_KH
    $MA_KH = $_GET["MA_KH"];
    // tạo truy vấn xóa
    $sql_delete = "DELETE FROM khachhang WHERE MA_KH='$MA_KH'";
    // Thực thi truy vấn
    if ($conn->query($sql_delete)) {
        header("Location:data-table-user.php");
        exit(); // Make sure to exit after calling header
    } else {
        echo "<script> alert('lỗi xóa'); </script>";
    }
}
ob_end_flush();
?>

</html>
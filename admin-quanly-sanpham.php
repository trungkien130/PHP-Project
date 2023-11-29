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
$sql = "SELECT * FROM `danhmucsach` WHERE 1=1 ";
if (isset($_GET["btnSearch"])) {
    $keyword = $_GET["keyword"];
    if (isset($keyword)) {
        $sql .= " and TEN_SP like '%$keyword%'";
    }
}
$result = $conn->query($sql);
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

    <div class="control_products">
        <div class="control_products_head_content">
            <b>Danh sách sản phẩm</b>
        </div>
        <div class="control_products_content">
            <a href="admin-themmoi-sanpham.php" class="addNewButton"><i class="fa-solid fa-plus"></i> Tạo mới sản phẩm </a>
            <hr>
            <div>
                <table border="1px" width="100%" cellspacing="0" cellpadding="5">
                    <thead>
                        <tr>
                            <th>Mã sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Ảnh</th>
                            <th>Số lượng</th>
                            <th>Thông tin</th>
                            <th>Giá nhập</th>
                            <th>Giá cũ</th>
                            <th>Giá mới</th>
                            <th>Lượt mua</th>
                            <th>Ngày cập nhật</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = $result->fetch_array()) :
                        ?>
                            <tr>
                                <td><?php echo $row["MA_SP"]; ?></td>
                                <td><?php echo $row["TEN_SP"]; ?></td>
                                <td><img width="100%" height="50px" src="img/<?php echo $row["IMG_SP"]; ?> " alt=""></td>
                                <td><?php echo $row["SL_TON"]; ?></td>
                                <td><?php echo $row["THONG_TIN"]; ?></td>
                                <td><?php echo $row["GIA_NHAP"]; ?></td>
                                <td><?php echo $row["GIA_CU"]; ?></td>
                                <td><?php echo $row["GIA_MOI"]; ?></td>
                                <td><?php echo $row["LUOT_MUA"]; ?></td>
                                <td><?php echo $row["NGAY_CAP_NHAT"]; ?></td>
                                <td> <a href="admin-sua-sanpham.php?MA_SP=<?php echo $row["MA_SP"]; ?>">
                                        Sửa
                                    </a>
                                    <br>
                                    <a href="admin-quanly-sanpham.php?MA_SP=<?php echo $row["MA_SP"]; ?>" onclick="if(confirm('Bạn có muốn xóa không')){return true;}else{return false;}">
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
    </div>
</body>

<?php
//  xử lý với chức năng xóa
if (isset($_GET["MA_SP"])) {
    // thực hiện xóa sản phẩm theo MA_SP
    $MA_SP = $_GET["MA_SP"];
    // tạo truy vấn xóa
    $sql_delete = "DELETE FROM danhmucsach WHERE MA_SP='$MA_SP'";
    // Thực thi truy vấn
    if ($conn->query($sql_delete)) {
        header("Location: admin-quanly-sanpham.php");
        exit(); // Make sure to exit after calling header
    } else {
        echo "<script> alert('lỗi xóa'); </script>";
    }
}
ob_end_flush();
?>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="profile.js"></script>
    <link rel="stylesheet" href="All.css">
    <link rel="stylesheet" href="fontawesome-free-6.4.2-web/css/all.css">
    <title>Document</title>
</head>

<body>
    <?php
    //1. kết nối
    include("ketnoi.php");
    $sql = "SELECT * FROM KHACHHANG WHERE 1=1 ";
    $error_message = "";
    $success_message = "";
    $result = $conn->query($sql);
    if (isset($_POST["sigup_btn"])) {
        $HO_TEN = $_POST["HO_TEN"];
        $MAT_KHAU = $_POST["MAT_KHAU"];
        $DIEN_THOAI = $_POST["DIEN_THOAI"];
        $DIA_CHI = $_POST["DIA_CHI"];
        $EMAIL = $_POST["EMAIL"];
        $NGAY_SINH = $_POST["NGAYSINH"];
        $GIOI_TINH = $_POST["GIOI_TINH"];

        $sql_count = "SELECT COUNT(*) AS MA_KH FROM KHACHHANG";
        $result = $conn->query($sql_count);
        $row = $result->fetch_assoc();
        $MA_KH = $row['MA_KH'] + 1;

        $sql_check = "SELECT EMAIL FROM khachhang WHERE EMAIL ='$EMAIL' ";
        $res_check = $conn->query($sql_check);
        if ($res_check->num_rows > 0) {
            $error_message = "Tài Khoản đã tồn tại";
        }

        $sql_insert = "INSERT INTO `khachhang` (`HO_TEN`, `MAT_KHAU`, `DIEN_THOAI`,`DIA_CHI`, `EMAIL`, `NGAY_SINH`, `GIOI_TINH`,`NGAY_CAP_NHAT`) ";
        $sql_insert .= "VALUES ('$HO_TEN', '$MAT_KHAU', '$DIEN_THOAI','$DIA_CHI', '$EMAIL', '$NGAY_SINH', '$GIOI_TINH',NOW())";

        if ($conn->query($sql_insert)) {
            $success_message = "Đăng kí thành công";
            header(("Location:webbansach.php"));
        } else {
            $error_message = "Lỗi thêm mới " . mysqli_error($conn);
        }
    }
    ?>
    <form action="" method="post">
        </div>
        <div id="sigupModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="close_modal()">&times;</span>
                <h2 class="titleModal">Đăng kí tài khoản</h2>
                <div class="input nameInput">
                    <label for="">Họ và Tên</label><input type="text" class="inputInFor" name="HO_TEN" required>
                </div>
                <div class="input passwordInput">
                    <label for="">Mật khẩu</label><input type="password" class="inputInFor" name="MAT_KHAU" required>
                </div>
                <div class="input phoneInput">
                    <label for="">Số điện thoại</label><input type="text" class="inputInFor" name="DIEN_THOAI" required>
                </div>
                <div class="input addrestInput">
                    <label for="">Địa chỉ</label><input type="text" class="inputInFor" name="DIA_CHI" required>
                </div>
                <div class="input emailInput">
                    <label for="">Email</label>
                    <input type="email" name="EMAIL" class="inputInFor" required>
                </div>
                <div class="input borndateInput">
                    <label for="">Ngày Sinh</label><input type="date" class="inputInFor" name="NGAYSINH" required>
                </div>
                <div class="input genderInput">
                    <label for="">Giới tính</label>
                    <input type="radio" name="GIOI_TINH" value="1">Nam
                    <input type="radio" name="GIOI_TINH" value="0">Nữ
                </div>
                <div>
                    <span class="userLogin">Đã có tài khoản <button onclick="login()">Đăng nhập</button> </span>
                </div>
                <div class="dangki_btn">
                    <button type="submit" name="sigup_btn" onclick="sigupconfirm()" value="Đăng kí">Đăng kí</button>
                </div>
            </div>
        </div>
        <div>
    </form>
</body>

</html>
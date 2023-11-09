<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="profile.js"></script>
    <link rel="stylesheet" href="All.css">
    <link rel="stylesheet" href="fontawesome-free-6.4.2-web/css/all.css">
    <title>Thông tin khách hàng</title>
</head>

<body>
    <?php
    include("ketnoi.php");
    require("header.php");
    $ID = 1; // Gán giá trị 1 cho biến $ID
    $sql_edit = "SELECT * FROM `DANGKI` WHERE ID ='$ID' ";
    $result_edit = $conn->query($sql_edit);
    $row_edit = $result_edit->fetch_array();
        
    $sql = "SELECT * FROM DANGKI WHERE 1=1 ";
    $result = $conn->query($sql);
    $error_message = "";
    if (isset($_POST["change_comfirm"])) {
        $ID = $_POST["ID"];
        $HO_TEN = $_POST["HO_TEN"];
        $MAT_KHAU = $_POST["MAT_KHAU"];
        $DIEN_THOAI = $_POST["DIEN_THOAI"];
        $EMAIL = $_POST["EMAIL"];
        $NGAY_SINH = $_POST["NGAY_SINH"];
        $GIOI_TINH = $_POST["gender"];

        $sql_insert = "INSERT INTO `dangki` (`HO_TEN`, `MAT_KHAU`, `DIEN_THOAI`, `EMAIL`, `NGAY_SINH`, `GIOI_TINH`) ";
        $sql_insert .= "VALUES ('$HO_TEN', '$MAT_KHAU', '$DIEN_THOAI', '$EMAIL', '$NGAY_SINH', '$GIOI_TINH')";

        $sql_update = "UPDATE DANGKI SET";
        $sql_update .= "HO_TEN=` $HO_TEN`,";
        $sql_update .= "MAT_KHAU=` $MAT_KHAU`,";
        $sql_update .= "DIEN_THOAI=` $DIEN_THOAI`,";
        $sql_update .= "EMAIL=` $EMAIL`,";
        $sql_update .= "NGAYSINH=` $NGAY_SINH`,";
        $sql_update .= "GIOI_TINH=` $GIOI_TINH`,";
        $sql_update .= "WHERE ID=`$ID`";
        if ($conn->query($sql_insert)) {
            header("Location:webbansach.php");
        } else {
            $error_message = "Lỗi sửa dữ liệu " . mysqli_error($conn);
        }
    }

    ?>
    <form action="" method="post">
        <div class="profile-show">
            <div>
                <div class="profile-content">
                    <h2 class="titleProfile">Thông tin cá nhân</h2>
                    <div class="change nameChange">
                        <label for="">Họ và Tên</label><input type="text" name="HO_TEN" value="<?php echo $row_edit["HO_TEN"] ?>" required>
                    </div>
                    <div class="change passwordChange">
                        <label for="">Mật khẩu</label><input type="password" name="MAT_KHAU" value="<?php echo $row_edit["MAT_KHAU"] ?>" required>
                    </div>
                    <div class="change phoneChange">
                        <label for="">Số điện thoại</label><input type="text" name="DIEN_THOAI" value="<?php echo $row_edit["DIEN_THOAI"] ?>" required>
                    </div>
                    <div class="change emailChange">
                        <label for="">Email</label>
                        <input type="email" name="EMAIL" value=" <?php echo $row_edit["EMAIL"] ?>" required>
                    </div>
                    <div class="change borndateChange">
                        <label for="">Ngày Sinh</label><input type="date" name="NGAY_SINH" value="<?php echo $row_edit["NGAY_SINH"] ?>" required>
                    </div>
                    <div class="change genderChange">
                        <label for="">Giới tính</label>

                        <input type="radio" name="gender" value="1" <?php echo ($row_edit["GIOI_TINH"] ?? null) == 1 ? "checked" : ""; ?>>Nam
                        <input type="radio" name="gender" value="0" <?php echo ($row_edit["GIOI_TINH"] ?? null) == 0 ? "checked" : ""; ?>>Nữ
                    </div>

                    <div class="change_btn">
                        <button type="submit" class="change_comfirm_btn" name="change_comfirm" value="Lưu">Lưu</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
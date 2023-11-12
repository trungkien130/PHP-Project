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
    include("ketnoi.php");
    $error_message = "";
    if (isset($_POST["login_btn"])) {
        $EMAIL = $_POST["EMAIL"];
        $MAT_KHAU = $_POST["MAT_KHAU"];

        $sql_check = "SELECT EMAIL, MAT_KHAU FROM khachhang WHERE EMAIL ='$EMAIL' AND MAT_KHAU='$MAT_KHAU'";
        $res_check = $conn->query($sql_check);

        if ($res_check->num_rows > 0) {
            $chk = $_POST['chkRemeber'];
            echo "rem=" . $chk;
            if (isset($chk)) {
                setcookie('taikhoan', $usr, time() + 60 * 60);
            }

            header("Location: webbansach.php");
        } else {
            $error_message = "Sai mật khẩu hoặc tên đăng nhập không tồn tại vui lòng kiểm tra lại!!";
        }
    }
    ?>
    <?php if (!empty($error_message)) : ?>
        <script>
            alert("<?php echo $error_message ?>")
            $(document).ready(function () {
            $("#loginModal").show()});
        </script>
    <?php endif; ?>

    <form action="" method="post">
        <div id="loginModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="close_modal()">&times;</span>
                <h2 class="titleModal">Đăng Nhập</h2>
                <form class="login_content">
                    <div class="input inputUsername">
                        <label for="username">Email:</label>
                        <input type="text" id="username" name="EMAIL" required><br>
                    </div>
                    <div class="input inputPassword">
                        <label for="password">Mật khẩu:</label>
                        <input type="password" id="password" name="MAT_KHAU" required><br>
                    </div>
                        <div>
                            <span class="registerUser" >Chưa có tài khoản <button onclick="sigup()">Đăng kí ngay</button> </span>
                        </div>
                    <button type="submit" class="login_comfirm" name="login_btn" onclick="confirm_login()">Đăng Nhập</button>
                </form>
            </div>
        </div>
    </form>
</body>

</html>
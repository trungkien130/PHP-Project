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
    session_start();
    include("ketnoi.php");

    $error_message = "";

    if (isset($_POST["login_btn"])) {
        $EMAIL = $_POST["EMAIL"];
        $MAT_KHAU = $_POST["MAT_KHAU"];

        // kiểm tra trong bảng "quantri" 
        $sql_admin = "SELECT EMAIL, MAT_KHAU FROM quantri WHERE EMAIL = '$EMAIL' LIMIT 1";
        $res_admin = $conn->query($sql_admin);

        if ($res_admin->num_rows > 0) {
            $chk = $_POST['rmk'];
            if (isset($chk)) {
                setcookie('taikhoan', $EMAIL, time() + 60 * 60);
            }
            header("Location: admin.php");
            exit();
        } else {
            // kiểm tra trong bảng "khachhang" 
            $sql_customer = "SELECT MA_KH,EMAIL, MAT_KHAU FROM khachhang WHERE EMAIL = '$EMAIL' LIMIT 1";
            $res_customer = $conn->query($sql_customer);

            if ($res_customer->num_rows > 0) {
                $chk = $_POST['rmk'];
                if (isset($chk)) {
                    setcookie('taikhoan', $EMAIL, time() + 60 * 60);
                    $_SESSION['user'] = 'MA_KH';
                }
                header("Location: webbansach.php");
                exit();
            } else {
                $error_message = "Sai mật khẩu hoặc tên đăng nhập không tồn tại, vui lòng kiểm tra lại!!";
            }
        }
    }
    ?>

    <?php if (!empty($error_message)) : ?>
        <script>
            alert("<?php echo $error_message ?>");
        </script>
    <?php endif; ?>
    <form action="khachhang-profile.php" method="post">
        <div id="loginModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="close_modal()">&times;</span>
                <h2 class="titleModal">Đăng Nhập</h2>
                <div class="login_content">
                    <div class="input inputUsername">
                        <label for="username">Email:</label>
                        <input type="text" id="username" name="EMAIL" class="inputInFor" required><br>
                    </div>
                    <div class="input inputPassword">
                        <label for="password">Mật khẩu:</label>
                        <input type="password" id="password" name="MAT_KHAU" class="inputInFor" required><br>
                    </div>
                    <div>
                        <span class="registerUser">Chưa có tài khoản <button onclick="sigup()">Đăng kí ngay</button> </span>
                    </div>
                    <button type="submit" class="login_comfirm" name="login_btn" onclick="confirm_login()">Đăng Nhập</button>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
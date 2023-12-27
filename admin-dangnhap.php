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
include "ketnoi.php";
?>
<?php
session_start();

$error_message = "";

if (isset($_POST["adminLoginBtn"])) {
    $TAI_KHOAN = $_POST["TAI_KHOAN"];
    $MAT_KHAU = $_POST["MAT_KHAU"];

    $sql_check_admin = "SELECT TAI_KHOAN, MAT_KHAU FROM quantri WHERE TAI_KHOAN ='$TAI_KHOAN' AND MAT_KHAU='$MAT_KHAU'";
    $res_check_admin = $conn->query($sql_check_admin);

    if ($res_check_admin->num_rows > 0) {
        $_SESSION['TAI_KHOAN'] = $TAI_KHOAN;
        $_SESSION['MAT_KHAU'] = $MAT_KHAU;
        if (isset($chk)) {
            setcookie('taikhoan', $TAI_KHOAN, time() + 60 * 60);
        }
        header("Location:admin.php");
    } else {
        header("Location:admin-dangnhap.php");
        $error_message = "Sai mật khẩu hoặc tên đăng nhập không tồn tại vui lòng kiểm tra lại!!";
    }
}
?>

<?php if (!empty($error_message)) : ?>
    <script>
        alert(<?php echo ("$error_message") ?>)
    </script>
<?php endif; ?>

<body class="adminLogin">
    <form action="" method="post">
        <div class="adminLoginModal">
            <p class="adminLoginTitle">Admin Login</p>
            <i class="fa-solid fa-user"></i>
            <input type="text" name="TAI_KHOAN" placeholder="Username">
            <i class="fa-solid fa-lock-open"></i>
            <input type="password" name="MAT_KHAU" placeholder="Password">
            <a href="webbansach.php" class="goBack">Trở lại trang chủ</a>
            <button class="adminLoginBtn" name="adminLoginBtn" type="submit">Đăng nhập</button>
        </div>
    </form>
</body>

</html>
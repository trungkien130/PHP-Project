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
    $sql = "SELECT * FROM DANGKI WHERE 1=1 ";
    $error_message = "";
    $success_message = "";
    $result = $conn->query($sql);
    if(isset($_POST["login_btn"])){
        $username=$_POST["username"];
        $password=$_POST["password"];
        $sql = "SELECT * FROM dangki WHERE EMAIL='$username'";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if(password_verify($password, $row["MAT_KHAU"])) {
                session_start();
                $_SESSION["user_id"] = $row["ID"];
                header("Location: webbansach.php");
                exit();
            } else {
                // Sai mật khẩu
                echo "Sai tên đăng nhập hoặc mật khẩu.";
            }
        } else {
            // Tên đăng nhập không tồn tại
            echo "Sai tên đăng nhập hoặc mật khẩu.";
        }
    }
    
    $conn->close(); // Đóng kết nối
    ?>
    <form action="" method="get">
        <div id="loginModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="close_modal()">&times;</span>
                <h2 class="titleModal">Đăng Nhập</h2>
                <form class="login_content">
                    <div class="input inputUsername">
                        <label for="username">Email:</label>
                        <input type="text" id="username" name="username" required><br>
                    </div>
                    <div class="input inputPassword">
                        <label for="password">Mật khẩu:</label>
                        <input type="password" id="password" name="password" required><br>
                    </div>
                    <button type="submit" class="login_comfirm" name="login_btn" onclick="confirm_login()">Đăng Nhập</button>
                </form>
            </div>
        </div>
    </form>
</body>

</html>
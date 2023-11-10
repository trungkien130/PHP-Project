<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="profile.js"></script>
    <link rel="stylesheet" href="All.css">
    <link rel="stylesheet" href="fontawesome-free-6.4.2-web/css/all.css">
    <title>Vivabook.com</title>
</head>


<body>
    <?php
    include("ketnoi.php");
    require("dangki.php");
    require("dangnhap.php");
    require("header.php")
    ?>
    <div class="listMenu">
        <ul class="Listtitle">
            <li class="menu-item">Sách ngoại văn <i class="fa-solid fa-angle-right"></i>
                <ul class="submenu">
                    <li>Thể loại 1</li>
                    <li>Thể loại 2</li>
                </ul>
            </li>
            <li class="menu-item">Sách kinh tế <i class="fa-solid fa-angle-right"></i>
                <ul class="submenu">
                    <li>Thể loại 1</li>
                    <li>Thể loại 2</li>
                </ul>
            </li>
            <li class="menu-item">Sách văn học trong nước <i class="fa-solid fa-angle-right"></i>
                <ul class="submenu">
                    <li>Thể loại 1</li>
                    <li>Thể loại 2</li>
                </ul>
            </li>
            <li class="menu-item">Sách văn học nước ngoài <i class="fa-solid fa-angle-right"></i>
                <ul class="submenu">
                    <li>Thể loại 1</li>
                    <li>Thể loại 2</li>
                </ul>
            </li>
            <li class="menu-item">Sách giáo khoa <i class="fa-solid fa-angle-right"></i>
                <ul class="submenu">
                    <li>Thể loại 1</li>
                    <li>Thể loại 2</li>
                </ul>
            </li>
            <li class="menu-item">Sách thiếu nhi <i class="fa-solid fa-angle-right"></i>
                <ul class="submenu">
                    <li>Thể loại 1</li>
                    <li>Thể loại 2</li>
                </ul>
            </li>
            <li class="menu-item">Sách tin học-Ngoại ngữ <i class="fa-solid fa-angle-right"></i>
                <ul class="submenu">
                    <li>Thể loại 1</li>
                    <li>Thể loại 2</li>
                </ul>
            </li>
            <li class="menu-item">Sách tin chuyên ngành <i class="fa-solid fa-angle-right"></i>
                <ul class="submenu">
                    <li>Thể loại 1</li>
                    <li>Thể loại 2</li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="slice">
        <div class="slider">
            <div class="slide" id="slide-1"><img class="imgSlide" src="img/372419_loi-than-va-nhan-vien-van-phong-tap-1.jpg" alt=""></div>
            <div class="slide" id="slide-2"><img class="imgSlide" src="img/371474_loi-than-va-nhan-vien-van-phong-tap-2.jpg" alt=""></div>
            <div class="slide" id="slide-3"><img class="imgSlide" src="img/372415_loi-than-va-nhan-vien-van-phong-tap-3.jpg" alt=""></div>
            <div class="slide" id="slide-4"><img class="imgSlide" src="img/372418_loi-than-va-nhan-vien-van-phong-tap-4.jpg" alt=""></div>
            <div class="slide" id="slide-5"><img class="imgSlide" src="img/372416_loi-than-va-nhan-vien-van-phong-tap-5.jpg" alt=""></div>
        </div>
    </div>

</body>

</html>
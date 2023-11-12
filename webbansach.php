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
                    <li><a href="#">Thể loại 1</a></li>
                    <li><a href="#">Thể loại 2</a></li>
                </ul>
            </li>
            <li class="menu-item">Sách kinh tế <i class="fa-solid fa-angle-right"></i>
                <ul class="submenu">
                    <li><a href="#">Thể loại 1</a></li>
                    <li><a href="#">Thể loại 2</a></li>
                </ul>
            </li>
            <li class="menu-item">Sách văn học trong nước <i class="fa-solid fa-angle-right"></i>
                <ul class="submenu">
                    <li><a href="#">Thể loại 1</a></li>
                    <li><a href="#">Thể loại 2</a></li>
                </ul>
            </li>
            <li class="menu-item">Sách văn học nước ngoài <i class="fa-solid fa-angle-right"></i>
                <ul class="submenu">
                    <li><a href="#">Thể loại 1</a></li>
                    <li><a href="#">Thể loại 2</a></li>
                </ul>
            </li>
            <li class="menu-item">Sách giáo khoa <i class="fa-solid fa-angle-right"></i>
                <ul class="submenu">
                    <li><a href="#">Thể loại 1</a></li>
                    <li><a href="#">Thể loại 2</a></li>
                </ul>
            </li>
            <li class="menu-item">Sách thiếu nhi <i class="fa-solid fa-angle-right"></i>
                <ul class="submenu">
                    <li><a href="#">Thể loại 1</a></li>
                    <li><a href="#">Thể loại 2</a></li>
                </ul>
            </li>
            <li class="menu-item">Sách tin học-Ngoại ngữ <i class="fa-solid fa-angle-right"></i>
                <ul class="submenu">
                    <li><a href="#">Thể loại 1</a></li>
                    <li><a href="#">Thể loại 2</a></li>
                </ul>
            </li>
            <li class="menu-item">Sách tin chuyên ngành <i class="fa-solid fa-angle-right"></i>
                <ul class="submenu">
                    <li><a href="#">Thể loại 1</a></li>
                    <li><a href="#">Thể loại 2</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div id="slideshow">
        <div class="slide-wrapper">
            <div class="slide" id="slide-1"><img class="imgSlide" src="img/sach onlie.jpg"></div>
            <div class="slide" id="slide-2"><img class="imgSlide" src="img/images (1).jfif"></div>
            <div class="slide" id="slide-3"><img class="imgSlide" src="img/images.jfif"></div>
            <div class="slide" id="slide-4"><img class="imgSlide" src="img/images.jfif"></div>
        </div>
        </div>
        <div>
            <h1>Danh sách sản phẩm</h1>
        </div>
        <div class="listProducts">
                <div class="Products">
                    <img class="productsImg" src="img/372419_loi-than-va-nhan-vien-van-phong-tap-1.jpg" alt="">
                    <p class="productsName">Tên: Lôi thần và nhân viên văn phòng tập 1</p>
                    <p class="productsPrice">Giá: 20000đ </p>
                </div>
                <div class="Products">
                    <img class="productsImg" src="img/371474_loi-than-va-nhan-vien-van-phong-tap-2.jpg" alt="">
                    <p class="productsName">Tên: Lôi thần và nhân viên văn phòng tập 2</p>
                    <p class="productsPrice">Giá: 50000đ </p>
                </div>
                <div class="Products">
                    <img class="productsImg" src="img/372415_loi-than-va-nhan-vien-van-phong-tap-3.jpg" alt="">
                    <p class="productsName">Tên: Lôi thần và nhân viên văn phòng tập 3</p>
                    <p class="productsPrice">Giá: 100000đ </p>
                </div>
                <div class="Products">
                    <img class="productsImg" src="img/372418_loi-than-va-nhan-vien-van-phong-tap-4.jpg" alt="">
                    <p class="productsName">Tên: Lôi thần và nhân viên văn phòng tập 4</p>
                    <p class="productsPrice">Giá: 65000đ </p>
                </div>
                <div class="Products">
                    <img class="productsImg" src="img/372416_loi-than-va-nhan-vien-van-phong-tap-5.jpg" alt="">
                    <p class="productsName">Tên: Lôi thần và nhân viên văn phòng tập 5</p>
                    <p class="productsPrice">Giá: 80000đ </p>
                </div>
                <div class="Products">
                    <img class="productsImg" src="img/372414_su-im-lang-cua-bay-cuu-tai-ban-2022.jpg" alt="">
                    <p class="productsName">Tên: Sự im lặng của bày cừu</p>
                    <p class="productsPrice">Giá: 200000đ </p>
                </div>
            </div>

</body>

</html>
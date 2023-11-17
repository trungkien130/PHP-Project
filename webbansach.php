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
        <div class="listProducts">
            <div class="product">
                <div class="Products">
                    <img class="productsImg" src="img/372419_loi-than-va-nhan-vien-van-phong-tap-1.jpg" alt="">
                    <p class="productsName">Tên: Lôi thần và nhân viên văn phòng tập 1</p>
                    <p class="productsPrice">Giá: 20000đ </p>
                </div>
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
    </div>
    <footer>
        <div class="input-infor-to-get-announce">
            <div class="announce-content">
                <span style="font-size: 25px;">Đăng kí nhận Email</span><br>
                <span style="font-size: 15px;">Đăng kí nhận thông tin sách mới,sách bán</span>
            </div>
            <div class="input-content">
                <input class="input-name-to-get-announce" type="text" placeholder="Tên của bạn">
                <input class="input-email-to-get-announce" type="email" placeholder="Nhập email của bạn">
                <select name="" id="" class="choose-type-to-get-announce">
                    <option value="">Thể loại yêu thích</option>
                    <option value="">Tất cả</option>
                    <option value="">thể loại 1</option>
                    <option value="">thể loại 2</option>
                    <option value="">thể loại 3</option>
                </select>
                <button class="announce-submit-btn">Đăng kí ngay</button>
            </div>
        </div>

        <div class="footer-content">
            <div class="company-infor">
                <p class="footer-content-title">VỀ CÔNG TY</p>
                <a href="#">Giới thiệu công ty</a>
                <a href="#">Tuyển dụng</a>
                <a href="#">Góc báo trí</a>
                <a href="#">Chương trình đại lý</a>
                <a href="#">Chính sách bảo mật</a>
                <a href="#">Chính sách đổi trả</a>
            </div>
            <div class="custom-help">
                <p class="footer-content-title">TRỢ GIÚP</p>
                <a href="#">Quy định sử dụng </a>
                <a href="#">Hướng dẫn mua hàng</a>
                <a href="#">Phương thức thanh toán</a>
                <a href="#">Phương thức vận chuyển</a>
                <a href="#">Câu hỏi thường gặp</a>
                <a href="#">Ứng dụng đọc Ebook</a>
            </div>
            <div class="book-new">
                <p class="footer-content-title">TIN TỨC SÁCH</p>
                <a href="#">Tin tức</a>
                <a href="#">Chân dung</a>
                <a href="#">Điểm sách</a>
                <a href="#">Phê bình</a>
            </div>
            <div>
                <p class="footer-content-title">CHẤP NHẬN THANH TOÁN</p>
                <img src="img/visa.jpg" alt="">
                <img src="img/master_card.jpg" alt="">
                <img src="img/jcb.jpg" alt="">
                <label for=""></label>
                <img src="img/atm.jpg" alt="">
                <img src="img/cod.jpg" alt="">
                <img src="img/payoo.jpg" alt="">
                <div>
                    <p class="footer-content-title">THANH TOÁN AN TOÀN</p>
                    <img src="img/verify_visa.jpg" alt="">
                    <img src="img/mastercard_securecode.jpg" alt="">
                    <img src="img/onepay.jpg" alt="">
                </div>
            </div>
            <div>
                <p class="footer-content-title">ĐỐI TÁC VẬN CHUYỂN</p>
                <img style="width:11rem;" src="img/logovnb.png" alt="">
                <label for=""></label>
                <img src="img/vn-post.jpg" alt="">
                <label for=""></label>
                <img style="width:11rem;" src="img/dhl.jpg" alt="">
            </div>
            <div>
                <p class="footer-content-title">ĐỐI TÁC BÁN HÀNG</p>
                <img src="img/lazada.jpg" alt="">
                <label for=""></label>
                <img src="img/shopee.jpg" alt="">
                <label for=""></label>
                <img src="img/amazon.jpg" alt="">
            </div>
        </div>
    </footer>
</body>

</html>
<?php
require_once 'function.php';
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Public/bootstrap-3.3.7-dist/css/bootstrap.css">
    <script src="../Public/bootstrap-3.3.7-dist/js/jquery-3.2.1.js"></script>
    <script src="../Public/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <script src="../Public/bootstrap-3.3.7-dist/js/jquery-3.2.0.min.js"></script>
    <script src="../Public/JS/navbar.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Notable&family=Racing+Sans+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Public/CSS/call.css">
    <link rel="stylesheet" href="../Public/CSS/index3.css">
    <title>ABCmobile - Điện thoại chính hãng, giá tốt nhất</title>
</head>
<body>
<div class="row headers">
    <div class="container">
        <span class="topp col-md-3 col-sm-3 col-xs-6"><i class="fas fa-hand-holding-usd"></i><a href="Trangchu.php"> Cam kết giá tốt nhất</a></span>
        <span class="topp col-md-3 col-sm-3 col-xs-6"><i class="fas fa-truck-moving"></i><a href="freeship.php">Miễn phí vận chuyển</a></span>
        <span class="topp col-md-3 col-sm-3 col-xs-6"><i class="fas fa-map-marked-alt"></i><a href="Trangchu.php">Thanh toán khi nhận hàng</a></span>
        <span class="topp col-md-3 col-sm-3 col-xs-6"><i class="fas fa-shield-alt"></i><a href="change_delivery.php">Đổi trả trong 7 ngày</a></span>
        <!--        <span class="topp"><a href="#">Bảo hành tận nơi</a></span>-->
    </div>
</div>
<!-- Header -->
<div class="row header">
    <div class="topnav" id="myTopnav">
        <a href="Trangchu.php" class="logo">
            <span class="logo1">A</span>
            <span class="logo2">BCmobile</span></a>
        <a href="Trangchu.php">Trang Chủ</a>
        <a href="introduce.php">Giới Thiệu</a>
        <a href="tel: 0963543864">Liên Hệ</a>

        <a href="javascript:void(0);"
           style="font-size:19px;"
           class="icon" onclick="myFunction()">&#9776;</a>

        <?php
        if (isset($_SESSION['account']) or isset($_SESSION['avatar']))
        {
            $prfuser = prf_user($_SESSION['id_kh']);
            $prf = mysqli_fetch_array($prfuser);
            $anhdd = $prf['avatar'];
            echo "<a class='regis_log' href='profile_user.php'>
                  <img src='../Images/$anhdd' alt=''>"."
                  <font style='color: bisque'>".$_SESSION['account']."</font></a>";
        }else
        {
            ?>
            <a href="register.php" class="regis_log"><span class="fa fa-user-plus"></span> Đăng Ký</a>
            <a class="regis_log" href="login.php"><span class="glyphicon glyphicon-log-in"></span> Đăng Nhập</a>
        <?php } ?>
        <a href="cart.php" class="regis_log">
            <i class="fa fa-cart-plus"></i>
        </a>
        <div class="search">
            <form action="result_search.php" method="post" class="form-inline">
                <input type="text" name="text_search" id="search" class="form-control text-search" placeholder="Tìm kiếm...">
                <input type="submit" value="Tìm kiếm" name="search" class="btn btn-warning">
            </form>
        </div>
    </div>
    <div class="row result-search">
        <div class="list-group col-md-5 col-md-offset-4" id="show-list">
            <!--            <a href="#" class="list-group-item border-1">List 1</a>-->
        </div>
    </div>
</div>

<!--  Body  -->
<div class="container">
    <!---------------Menu------------------>
    <div class="row gioithieu">
        <img src="../Images/banner_ABC.webp" alt="">
        <h3>- Hàng chính hãng - Giá luôn tốt </h3>
        <h3>- Chiết khấu theo đơn hàng - ưu đãi cho người mua hàng</h3>
        <h3>- Giao hàng tận nơi miễn phí - hỗ trợ sau bán hàng</h3>
        <h4><a href="Trangchu.php">ABCmobile</a> là đối tác trực tiếp của các nhãn hàng và những nhà phân phối uy tín,
            lớn nhất tại Việt Nam:</h4>
        <ul>
            <li>Apple Việt Nam (iPhone, iPad, Macbook, Phụ kiện) với đối tác giao hàng FPT Synex,
                Viettelimex, Công ty cổ phần thế giới số DGW, Công ty nhập khẩu và phân phối dầu khí PET.</li>
            <li>Samsung Việt Nam, Vsmart, Nokia, Oppo, Xiaomi...</li>
            <li>Sony, PGI ( JBL, Harman Kardon ...), DTR ( Energizer, Mophie ... ) ... </li>
        </ul>
        <h4>
            Vì sao nên chọn ABCmobile khi mua hàng cho doanh nghiệp:
        </h4>
        <p>
            <b>ABCmobile</b> là <b>đối tác trực tiếp</b> của các nhãn hàng và những nhà phân phối uy tín,
            lớn nhất tại Việt nam:
        </p>
        <ul>
            <li>Apple Việt Nam (iPhone, iPad, Macbook, Phụ kiện) với đối tác giao hàng FPT Synex, Viettelimex,
                Công ty cổ phần thế giới số DGW, Công ty nhập khẩu và phân phối dầu khí.</li>
            <li>Samsung Việt Nam, Vsmart, Nokia, Oppo, Xiaomi...</li>
            <li>Sony, PGI ( JBL, Harman Kardon ...), DTR ( Energizer, Mophie ... )</li>
            <li>ABCmobile cung cấp hàng hoá với đầy đủ hoá đơn cũng như các giấy tờ theo yêu cầu
                của pháp luật Việt Nam.</li>
            <li>Với hơn 10 năm trong lĩnh vực bán lẻ, ABCmobile chuyên nghiệp và linh hoạt trong việc
                cung cấp hàng hoá cho các đơn doanh nghiệp.</li>
            <li>Giá bán luôn tốt nhất thị trường và đặc biệt có chiết khấu hoặc hoa hồng cho tổ chức
                và người liên hệ.</li>
            <li>Đội ngũ bán hàng chuyên nghiệp, xử lý đơn hàng nhanh chóng và chủ động.</li>
            <li>Sẵn sàng đáp ứng đơn hàng với mọi số lượng theo yêu cầu.</li>
            <li>Giao hàng miễn phí tới địa chỉ yêu cầu của doanh nghiệp.</li>
            <li>Dịch vụ bảo hành sau bán hàng tương tự với khách hàng mua lẻ.</li>
        </ul>
        <h4>
            Để nhận báo giá và đưa ra các yêu cầu, Quý khách vui lòng liên hệ bộ phận bán hàng doanh nghiệp:
        </h4>
        <ul>
            <li>Mr.Long (Hanoi) Mobile (Zalo, Viber, Telegram) : <a href="tel: 0963543864" class="text-danger">0963543864</a></li>
            <li>Tổng đài tư vấn miễn phí: <a href="tel:0963543864" class="text-danger">0963543864</a> hoặc email: cskh@ABCmobile.com.vn.</li>
        </ul>
        <h2 class="text-center">KHÁCH HÀNG THÂN THIẾT</h2>
        <ul class="tmdt">
            <li><img src="../Images/logo_shoppee.png" alt=""></li>
            <li><img src="../Images/logo_banggood.png" alt=""></li>
            <li><img src="../Images/logo_lazada.png" alt=""></li>
            <li><img src="../Images/logo_tiki.jpg" alt=""></li>
        </ul>
    </div>

</div>

<!----------------Back To Top------------------->

<div id="back-to-top" class="back-to-top" data-toggle="tooltip" data-placement="left"
     title="Trở lên đầu trang">
    <span class="fas fa-chevron-circle-up"></span>
</div>
<!------------Call----------------->
<a id="calltrap-btn" class="b-calltrap-btn calltrap_offline hidden-phone visible-tablet"
   href="tel:0963543864" data-toggle="tooltip" title="Gọi ngay cho tôi" data-placement="right">
    <div id="calltrap-ico"></div>
</a>
<!-------------------Inbox------------------------->
<div class="float-ck">
    <div id="hide_float_right">

        <a href="javascript:hide_float_right()">
            <i class="fa fa-comment-alt"></i> Chat với nhân viên tư vấn !
            <span><i class="fas fa-minus"></i></span>
        </a>

    </div>
    <div id="float_content_right">
        <!– Start quang cao–>
        <div class="kh-ib">
            <br>
            <p><b>Nhập thông tin của bạn *</b></p>
            <form method="post">
                <p><input type="text" class="form-control" name="ten_ib" id="" placeholder="Nhập họ và tên của bạn"></p>
                <p><input type="text" class="form-control" name="email_ibb" id="" placeholder="Nhập email của bạn"></p>
                <p><input type="tel" class="form-control" name="sdt_ib" id="" placeholder="Nhập số điện thoại của bạn"></p>
                <b>Tin nhắn *</b>
                <textarea name="tin_ib" class="form-control" cols="30" rows="7" placeholder="Nội dung tin nhắn"></textarea>
                <hr>
                <button type="submit" class="btn btn-danger" name="send_ib">Gửi tin nhắn</button>
            </form>
        </div>

        <!– End quang cao –>

    </div>
</div>
<!-------------Footer------------->
<div class="row footer">
    <div class="fot col-md-3 col-sm-6 col-xs-6">
        <b>VỀ ABCmobile</b> <br>
        <a href="introduce.php">Giới thiệu về ABCmobile</a> <br>
        <a href="pay.php">Thanh toán</a> <br>
        <a href="customer_care.php">Chăm sóc khách hàng</a> <br>
        <a href="data_backup.php">Quy định về việc sao lưu dữ liệu</a> <br>
        <a href="endow.php">Ưu đãi từ đối tác</a> <br>
        <a href="business_cooperation.php">Liên hệ hợp tác cùng ABCmobile</a> <br>
    </div>
    <div class="fot col-md-3 col-sm-6 col-xs-6">
    <b>CHÍNH SÁCH & HỖ TRỢ</b> <br>
        <a href="online_shopping.php">Hỗ trợ mua hàng trực tuyến</a> <br>
        <a href="installment.php">Hướng dẫn mua trả góp</a> <br>
        <a href="freeship.php">Chính sách giao hàng</a> <br>
        <a href="information_security.php">Chính sách bảo mật thông tin</a> <br>
        <a href="warranty_policy.php">Chính sách bảo hành</a> <br>
        <a href="change_delivery.php">Chính sách đổi trả</a>
    </div>
    <div class="fot col-md-3 col-sm-6 col-xs-6">
        <b>THÔNG TIN LIÊN HỆ</b> <br>  
        <i class="fas fa-mobile-alt"></i>
        <span>Điện thoại: 0963543864 <a href="tel: "></a></span> <br>
        <i class="fas fa-phone-volume"></i>
        <span>Hotline: 0963543864 <a href="tel: "></a></span> <br>
        <i class="fas fa-envelope-open-text"></i>
        <span>Email: <a href="https://www.google.com/gmail">dinhhoanglong010@gmail.com</a></span>
    </div>
   
</div>
<div class="row follow">
    <div class="fot col-md-12 col-sm-12 col-xs-12 text-center">
        <h4><b>Theo dõi chúng tôi</b></h4>
        <a href=""><div class="fab fa-facebook"></div> <span>Facebook</span></a>
        <a href=""><div class="fab fa-instagram"></div> <span>Instagram</span></a>
        <a href=""><div class="fab fa-twitter"></div> <span>Twitter</span></a>
        <a href=""><div class="fab fa-youtube"></div> <span>Youtube</span></a>
    </div>
</div>
</body>
</html>
<script src="../Public/JS/carousel.js"></script>
<script src="../Public/JS/search.js"></script>

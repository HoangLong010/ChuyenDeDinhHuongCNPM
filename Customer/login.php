<?php
require_once ('function.php');
session_start();
ob_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">o
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Public/bootstrap-3.3.7-dist/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <!-- <script src="../Public/bootstrap-3.3.7-dist/js/jquery-3.2.1.js"></script> -->
    <script src="../Public/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <!-- <script src="../Public/bootstrap-3.3.7-dist/js/jquery-3.2.0.min.js"></script> -->
   

    <script src="../Public/JS/navbar.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Notable&family=Racing+Sans+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="stylesheet" href="../Public/CSS/call.css">
    <link rel="stylesheet" href="../Public/CSS/index3.css">
    <link rel="stylesheet" href="../Public/CSS/login.css">
    <title>login</title>
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
           
        <span class="logo2">ABCmobile</span></a>
        <a href="Trangchu.php">Trang Chủ</a>
        <a href="introduce.php">Giới Thiệu</a>
        <a href="tel: 0963543864 ">Liên Hệ</a>

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

<!--------Body-->
<div class="container a">
    <div class="b">
        <img src="../Images/Userp.png" alt="Lys Tan Phat Dz">
    </div>
    <form method="post">
        <div class="form-group">
            <label for="tk">Tài khoản</label>
            <input type="text" class="form-control" id="tk" name="taikhoan" placeholder="Tên tài khoản">
        </div>
        <div class="form-group">
            <label for="mk">Mật khẩu</label>
            <input type="password" class="form-control" id="mk" name="matkhau" placeholder="Mật khẩu">
        </div>
        <div class="form-group" style="height: 17px;">
            <a href="password_reset.php">Quên mật khẩu?</a>
        </div>
        <div class="c">
            <button type="submit" class="btn btn-warning" name="dangnhap">Đăng Nhập</button>
        </div>
        <div class="text-center" style="margin-top: 10px">
            <p>Hoặc</p>
            <i>Bạn chưa có tài khoản? </i><span><a href="register.php">Tạo tài khoản</a></span>
        </div>
    </form>
</div>
<?php
if (isset($_POST['dangnhap'])){
    $taikhoan = $_POST['taikhoan'];
    $matkhau = $_POST['matkhau'];
    $ktra = login($taikhoan, $matkhau);
    if(mysqli_num_rows($ktra) != 0){
        $qr = mysqli_fetch_array($ktra);
        $ad = $qr['id_kh'];
        $ava = $qr['avatar'];
        if ($ad == 1){
            $_SESSION['account']=$taikhoan;
            $_SESSION['id_kh']=$ad;
            $_SESSION['avatar'] = $ava;
            $_SESSION['']= $taikhoan and $matkhau;
            header('location: ../Admin/Manager.php');
//            echo "<script>alert('Ok Admin')</script>";
        }else{
            $_SESSION['account']=$taikhoan;
            $_SESSION['matkhau']=$matkhau;
            $_SESSION['id_kh']=$ad;
            $_SESSION['avatar'] = $ava;
            $_SESSION['']= $taikhoan and $matkhau;
            header('location: Trangchu.php');
//            echo "<script>alert('OK KH')</script>";
        }
    }else{
        echo "<script>alert('Bạn nhập sai tên Tài Khoản hoặc Mật Khẩu')</script>";
    }
}
?>
<div id="back-to-top" class="back-to-top" data-toggle="tooltip" data-placement="left"
     title="Trở lên đầu trang">
    <span class="fas fa-chevron-circle-up"></span>
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
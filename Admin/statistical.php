<?php
require_once 'function.php';
session_start();
if (isset($_SESSION['account']))
{
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
        <link rel="stylesheet" href="../Public/CSS/index3.css">
        <link rel="stylesheet" href="../Public/CSS/admin.css">
        <title>ABCmobile - Điện thoại chính hãng, giá tốt nhất</title>
    </head>

    <body class="body-all-ad">
    <!-- Header -->
    <div class="row header" style="margin: auto; width: 100%">
        <div class="topnav" id="myTopnav">
            <a href="Manager.php" class="logo">
                <span class="logo1"><i class="fas fa-users-cog"></i> A</span>
                <span class="logo2">dministrator</span></a>
            <a href="../Customer/Trangchu.php"><i class="fas fa-reply"></i> Vào trang web</a>
            <a href="../Customer/introduce.php">Giới Thiệu</a>
            <a href="tel: 0967448690">Liên Hệ</a>
            <a href="statistical.php">Thống kê</a>

            <a href="javascript:void(0);"
               style="font-size:19px;"
               class="icon" onclick="myFunction()">&#9776;</a>

            <?php
            if (isset($_SESSION['account']))
            {
                echo "<a class='regis_log' href='../Customer/profile_user.php'>
                  <img src='../Images/dat.jpg' alt='Bùi Trọng Đạt'>"."
                  <font style='color: bisque'>".$_SESSION['account']."</font></a>";
            }else
            {
                ?>
                <a href="../Customer/register.php" class="regis_log"><span class="fa fa-user-plus"></span> Đăng Ký</a>
                <a class="regis_log" href="../Customer/login.php"><span class="glyphicon glyphicon-log-in"></span> Đăng Nhập</a>
            <?php } ?>
        </div>
    </div>

    <!--  Body  -->
    <div class="row body_admin">
        <div class="col-md-3 left-admin" id="left-admin">
            <div class="home-admin">
                <a href="Manager.php">
                    <i class="fas fa-house-damage"></i> Trang chủ Admin
                </a>
            </div>
            <div class="left-list">
                <input class="qtad" id="qtht" type="checkbox" >
                <label class="fa fa-user" for="qtht">Quản trị hệ thống</label>

                <div>
                    <a href="account_management.php">Quản lý tài khoản</a>
                </div>
            </div>
            <div class="left-list">
                <input class="qtad" id="qtdm" type="checkbox" >
                <label class="fa fa-list" for="qtdm">Quản lý danh mục</label>
                <div>
                    <a href="view_category.php">Danh mục sản phẩm</a> <br>
                    <a href="view_product.php">Sản phẩm</a>
                </div>
            </div>
            <div class="left-list">
                <input class="qtad" id="qtnv" type="checkbox" >
                <label class="fa fa-coins" for="qtnv">Quản lý nghiệp vụ</label>
                <div>
                    <a href="view_order.php">Quản lý đơn đặt hàng</a> <br>
                    <a href="view_comment.php">Quản lý phản hồi</a>
                </div>
            </div>
        </div>
        <div class="col-md-9 right-admin" id="right-admin">
            <div class="row right-admin-top">
                <a href="../Customer/Trangchu.php">
                    <i class="fas fa-home"></i> Trang chủ website
                </a>
                <span> > </span>
                <a href="statistical.php">Thống kê</a>
            </div>
            <div class="row text-center statistical" id="right-admin-bottom">
                <div class="col-md-3 dash">
                    <?php
                    $tktk = tk_kh();
                    $t1 = mysqli_fetch_array($tktk);
                    ?>
                    <a href="account_management.php">
                        <div class="dash-text">
                            <b><?php echo number_format($t1['sltk'],0,',','.')?></b> <br>
                            <i>Tài khoản</i>
                        </div>
                        <div class="dash-icon tk">
                            <i class="fa fa-user"></i>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 dash">
                    <?php
                    $tkdm = tk_dm();
                    $t2 = mysqli_fetch_array($tkdm);
                    ?>
                    <a href="view_category.php">
                        <div class="dash-text">
                            <b><?php echo number_format($t2['sldm'],0,',','.')?></b> <br>
                            <i>Danh mục</i>
                        </div>
                        <div class="dash-icon dm">
                            <i class="fas fa-align-justify"></i>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 dash">
                    <?php
                    $tksp = tk_sp();
                    $t3 = mysqli_fetch_array($tksp);
                    ?>
                    <a href="view_product.php">
                        <div class="dash-text">
                            <b><?php echo number_format($t3['slsp'],0,',','.')?></b> <br>
                            <i>Sản phẩm</i>
                        </div>
                        <div class="dash-icon sp">
                            <i class="fab fa-product-hunt"></i>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 dash">
                    <?php
                    $tkddh = tk_ddh();
                    $t4 = mysqli_fetch_array($tkddh);
                    ?>
                    <a href="view_order.php">
                        <div class="dash-text">
                            <b><?php echo number_format($t4['slddh'],0,',','.')?></b> <br>
                            <i>Đơn đặt hàng</i>
                        </div>
                        <div class="dash-icon ddh">
                            <i class="fa fa-cart-plus"></i>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 dash">
                    <?php
                    $tkbl = tk_bl();
                    $t5 = mysqli_fetch_array($tkbl);
                    ?>
                    <a href="view_comment.php">
                        <div class="dash-text">
                            <b><?php echo number_format($t5['slbl'],0,',','.')?></b> <br>
                            <i>Bình luận</i>
                        </div>
                        <div class="dash-icon bl">
                            <i class="far fa-comments"></i>
                        </div>
                    </a>
                </div>

                <div class="col-md-12">
                    <div class="col-md-2">
                        <select id="select-search" class="form-control">
                            <option value="">Chọn kiểu thống kê</option>
                            <option value="tk_week" <?php if (isset($_POST['week']) && !empty($_POST['week'])) { echo 'selected'; } ?>>Tuần</option>
                            <option value="tk_month" <?php if (isset($_POST['month']) && !empty($_POST['month'])) { echo 'selected'; } ?>>Tháng</option>
                            <option value="tk_year" <?php if (isset($_POST['year']) && !empty($_POST['year'])) { echo 'selected'; } ?>>Năm</option>
                        </select>
                    </div>
                    <form method="post">
                        <div class="col-md-2">
                            <select name="week" id="s-week" class="form-control" style="display: none <?php if (isset($_POST['week']) && !empty($_POST['week'])) { echo 'display: inline-block';} ?>" 
                    
                            >
                                <option value="">Chọn tuần</option>
                                    <?php
                                        for ($week = 1; $week <= 52; $week++)
                                        {
                                            ?>
                                            <option value="<?php echo $week; ?>" <?php if (isset($_POST['week']) && !empty($_POST['week']) && $_POST['week'] == $week) { echo 'selected';} ?>>
                                                <?php echo $week; ?>
                                            </option>
                                            <?php
                                        }
                                    ?>
                            </select>

                            <select name="month" id="s-month" class="form-control" style="display: none <?php if (isset($_POST['month']) && !empty($_POST['month'])) { echo 'display: inline-block';} ?>">
                                <option value="">Chọn tháng</option>
                                    <?php
                                        for ($month = 1; $month <= 12; $month++)
                                        {
                                            ?>
                                            <option value="<?php echo $month; ?>" <?php if (isset($_POST['month']) && !empty($_POST['month']) && $_POST['month'] == $month) { echo 'selected';} ?>>
                                                <?php echo $month; ?>
                                            </option>
                                            <?php
                                        }
                                    ?>
                            </select>

                            <select name="year" id="s-year" class="form-control" style="display: none <?php if (isset($_POST['week']) && !empty($_POST['year'])) { echo 'display: inline-block';} ?>">
                                <option value="">Chọn năm</option>
                                    <?php
                                        $currentYear = date('Y');
                                        for ($year = 2020; $year <= $currentYear; $year++)
                                        {
                                            ?>
                                            <option value="<?php echo $year; ?>" <?php if (isset($_POST['year']) && !empty($_POST['year']) && $_POST['year'] == $year) { echo 'selected';} ?>>
                                                <?php echo $year; ?>
                                            </option>
                                            <?php
                                        }
                                    ?>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button type="submit"  style="display: none; <?php if (isset($_POST['week']) && !empty($_POST['week']) || 
                            isset($_POST['month']) && !empty($_POST['month']) || 
                            isset($_POST['year']) && !empty($_POST['year'])) { 
                                echo 'display: inline-block';
                                } ?>" 
                                id="btn-search" class="btn btn-primary">Thống kê</button>
                        </div>
                    </form>
                    
                </div>
                <div class="col-md-12 dash">
                    <?php

                    if(isset($_POST['week'])||isset($_POST['month'])||isset($_POST['year']))
                    {
                        $doanhthu = tk_doanhthu($_POST['week'], $_POST['month'], $_POST['year']);

                    }else
                    {
                        $doanhthu = tk_doanhthu(2);

                    }

                    $t6 = mysqli_fetch_array($doanhthu);
                    ?>
                    <a href="view_comment.php">
                        <div class="dash-text">
                            <b><?php if (!empty($t6)){
                                echo number_format($t6['doanh_thu'],0,',','.') . ' VNĐ';
                            } else {
                                echo '0 VNĐ';
                            }?></b> <br>
                            <i>Doanh thu</i>
                        </div>
                        <div class="dash-icon bl">
                            <i class="far fa-money-bill-alt"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--  Footer  -->
    </body>
    </html>
    <script>
        $(document).ready(function() {
            $('#select-search').on('change', function() {
                if ($(this).val() === 'tk_week') {
                    $('#s-week').css('display', 'inline-block');
                    $('#s-month').val(null);
                    $('#s-year').val(null);
                    $('#s-month').css('display', 'none');
                    $('#s-year').css('display', 'none');
                }else if ($(this).val() === 'tk_month') {
                    $('#s-month').css('display', 'inline-block');
                    $('#s-week').val(null);
                    $('#s-year').val(null);
                    $('#s-week').css('display', 'none');
                    $('#s-year').css('display', 'none');
                }else if ($(this).val() === 'tk_year') {
                    $('#s-year').css('display', 'inline-block');
                    $('#s-week').val(null);
                    $('#s-month').val(null);
                    $('#s-week').css('display', 'none');
                    $('#s-month').css('display', 'none');
                }

                if($(this).val() != '') {
                    $('#btn-search').css('display', 'inline-block');
                }else {
                    $('#btn-search').css('display', 'none');
                    $('#s-week').css('display', 'none');
                    $('#s-month').css('display', 'none');
                    $('#s-year').css('display', 'none');
                }
            })
        });
    </script>
<?php }else{header('location: ../Customer/Trangchu.php');} ?>
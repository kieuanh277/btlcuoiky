<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nhóm 12</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo e(asset('images/favicon.jpg')); ?>" type="image/jpeg">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">


    <link rel="stylesheet" href="<?php echo e(asset('css/open-iconic-bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/owl.theme.default.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/magnific-popup.css')); ?>">


    <link rel="stylesheet" href="<?php echo e(asset('css/aos.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('css/ionicons.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap-datepicker.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/jquery.timepicker.css')); ?>">


    <link rel="stylesheet" href="<?php echo e(asset('css/flaticon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/icomoon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" style="position:fixed;"
     id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">Nhóm 12</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="<?php echo e(route('index')); ?>" class="nav-link">Trang Chủ</a></li>
                <li class="nav-item "><a href="about.html" class="nav-link">Thông Tin</a></li>
                <li class="nav-item"><a href="<?php echo e(route('tour')); ?>" class="nav-link">Tour</a></li>
                <!-- <li class="nav-item"><a href="hotel.html" class="nav-link">Hotels</a></li> -->
                <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="contact.html" class="nav-link">Liên Hệ</a></li>
                <?php if(Auth::check()): ?>
                    <li class="nav-item cta">
                        <a href="<?php echo e(route('account.detail')); ?>" class="nav-link"><span>Hồ Sơ</span></a>
                    </li>
                    <li style="margin-left: 5px;" class="nav-item cta">
                        <a href="<?php echo e(route('auth.signout')); ?>" class="nav-link"><span>Đăng Xuất</span></a>
                    </li>
                <?php else: ?>
                    <li class="nav-item cta">
                        <a href="<?php echo e(route('auth.signin')); ?>" class="nav-link"><span>Đăng Nhập</span></a>
                    </li><li class="nav-item cta">
                        <a href="<?php echo e(route('auth.signup')); ?>" class="nav-link"><span>Đăng Ký</span></a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>


<?php echo $__env->yieldContent('content'); ?>

<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Nhóm 12</h2>
                    <p>Cùng bạn khám phá thế giới – Đặt tour dễ dàng, hành trình trọn vẹn.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Thông tin</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">Về chúng tôi</a></li>
                        <li><a href="#" class="py-2 d-block">Dịch vụ</a></li>
                        <li><a href="#" class="py-2 d-block">Điều khoản</a></li>
                        <li><a href="#" class="py-2 d-block">Hợp tác với chúng tôi</a></li>
                        <li><a href="#" class="py-2 d-block">Best Price Guarantee</a></li>
                        <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Hỗ trợ khách hàng</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">FAQ</a></li>
                        <li><a href="#" class="py-2 d-block">Phương thức thanh toán</a></li>
                        <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
                        <li><a href="#" class="py-2 d-block">Cách thức hoạt động</a></li>
                        <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Nếu có câu hỏi?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">12 Chùa Bộc, Hà Nội</span>
                            </li>
                            <li><a href="#"><span class="icon icon-phone"></span><span
                                        class="text">+2 392 3929 210</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            </nav>
            <!-- loader -->
            <div id="ftco-loader" class="show fullscreen">
                <svg class="circular" width="48px" height="48px">
                    <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
                    <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                            stroke="#F96D00"/>
                </svg>
            </div>
            <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
            <script src="<?php echo e(asset('js/jquery-migrate-3.0.1.min.js')); ?>"></script>
            <script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
            <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
            <script src="<?php echo e(asset('js/jquery.easing.1.3.js')); ?>"></script>
            <script src="<?php echo e(asset('js/jquery.waypoints.min.js')); ?>"></script>
            <script src="<?php echo e(asset('js/jquery.stellar.min.js')); ?>"></script>
            <script src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>
            <script src="<?php echo e(asset('js/jquery.magnific-popup.min.js')); ?>"></script>
            <script src="<?php echo e(asset('js/aos.js')); ?>"></script>
            <script src="<?php echo e(asset('js/jquery.animateNumber.min.js')); ?>"></script>
            <script src="<?php echo e(asset('js/bootstrap-datepicker.js')); ?>"></script>
            <script src="<?php echo e(asset('js/jquery.timepicker.min.js')); ?>"></script>
            <script src="<?php echo e(asset('js/scrollax.min.js')); ?>"></script>
            <script src="<?php echo e(asset('js/main.js')); ?>"></script>
            <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
<?php echo Toastr::message(); ?>

</body>
</html>

<?php /**PATH C:\xampp\htdocs\btlcuoiky\resources\views/layouts/master.blade.php ENDPATH**/ ?>
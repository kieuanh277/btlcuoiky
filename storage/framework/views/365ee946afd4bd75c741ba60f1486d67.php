<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../admin/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../admin/assets/img/favicon.png">
    <title>
        Đăng nhập
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"/>
    <!-- Nucleo Icons -->
    <link href="<?php echo e(asset('admin/assets/css/nucleo-icons.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('admin/assets/css/nucleo-svg.css')); ?>" rel="stylesheet"/>
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="<?php echo e(asset('admin/assets/css/nucleo-svg.css')); ?>" rel="stylesheet"/>
    <!-- CSS Files -->
    <link id="pagestyle" href="<?php echo e(asset('admin/assets/css/argon-dashboard.css?v=2.0.4')); ?>" rel="stylesheet"/>
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/dashboard/apexcharts.css')); ?>"/>

</head>

<body class="">
<main class="main-content  mt-0">
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                        <div class="card card-plain">
                            <div class="card-header pb-0 text-start">
                                <h4 class="font-weight-bolder">Đăng Nhập</h4>
                                <p class="mb-0">Nhập Email và Mật khẩu để đăng nhập</p>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="" role="form">
                                    <?php echo csrf_field(); ?>
                                    <div class="mb-3">
                                        <input type="email" class="form-control form-control-lg"
                                               placeholder="Email" aria-label="Email" name="email">
                                        <?php if($errors->has('email')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control form-control-lg"
                                               placeholder="Mật khẩu" aria-label="Password" name="password">
                                        <?php if($errors->has('password')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit"
                                                class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Đăng Nhập
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-4 text-sm mx-auto">
                                    <a href="<?php echo e(route('auth.forgot')); ?>"
                                       class="text-primary text-gradient font-weight-bold">Quên mật khẩu?</a>
                                </p>
                                <p class="mb-4 text-sm mx-auto">
                                    Chưa có tài khoản?
                                    <a href="<?php echo e(route('auth.signup')); ?>"
                                       class="text-primary text-gradient font-weight-bold">Đăng Ký</a>
                                </p>
                                <p class="mb-4 text-sm mx-auto">Bạn là Quản trị viên?
                                    <a href="<?php echo e(route('admin.signinAdmin')); ?>"
                                       class="text-primary text-gradient font-weight-bold">Đăng nhập</a>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div
                        class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                        <div
                            class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                            style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg');
          background-size: cover;">
                            <span class="mask bg-gradient-primary opacity-6"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!--   Core JS Files   -->
<script src="../admin/assets/js/core/popper.min.js"></script>
<script src="../admin/assets/js/core/bootstrap.min.js"></script>
<script src="../admin/assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="../admin/assets/js/plugins/smooth-scrollbar.min.js"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?php echo e(asset('admin/assets/js/argon-dashboard.min.js?v=2.0.4')); ?>"></script>
<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<?php echo Toastr::message(); ?>


</body>

</html>
<?php /**PATH C:\xampp_new\htdocs\btlcuoiky\resources\views/auth/sign-in.blade.php ENDPATH**/ ?>
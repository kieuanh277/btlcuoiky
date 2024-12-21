<?php $__env->startComponent('mail::message'); ?>
    <h1>Xin chào <?php echo e($user->fullName); ?>,</h1>
    <p>Vui lòng nhấp vào nút bên dưới để xác minh Email của bạn.</p>
    <?php $__env->startComponent('mail::button', ['url' => url('verify/'.$user->remember_token)]); ?>
        Xác minh địa chỉ Email
    <?php echo $__env->renderComponent(); ?>
    <p>Nếu bạn chưa tạo tài khoản thì không cần thực hiện thêm hành động nào.</p>
    <p>Trân trọng,<br>Nhóm 8.</p>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\Công việc\WebBanTourDuLich-1\resources\views/emails/register.blade.php ENDPATH**/ ?>
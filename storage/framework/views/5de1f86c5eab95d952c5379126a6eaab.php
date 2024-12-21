<?php $__env->startComponent('mail::message'); ?>
    <h1>Xin chào <?php echo e($user->fullName); ?>,</h1>
    <p>Vui lòng bấm vào nút bên dưới để đặt lại mật khẩu của bạn.</p>
    <?php $__env->startComponent('mail::button', ['url' => url('reset/'.$user->remember_token)]); ?>
        Đặt lại mật khẩu
    <?php echo $__env->renderComponent(); ?>
    <p>Trong trường hợp bạn có bất kỳ vấn đề nào khi khôi phục mật khẩu, vui lòng liên hệ với chúng tôi.</p>
    <p>Trân trọng,<br>Nhóm 8.</p>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\xampp\htdocs\btlcuoiky\resources\views/emails/forgot.blade.php ENDPATH**/ ?>
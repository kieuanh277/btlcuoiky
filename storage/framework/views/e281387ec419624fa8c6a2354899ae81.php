



<?php $__env->startSection('header'); ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Quản trị viên</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Người dùng</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Người dùng</h6>
    </nav>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card p-3">
                    <form method="post" action="<?php echo e(route('users.update',[$user])); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('put'); ?>
                        <div class="form-group row border-bottom pb-4">
                            <label for="title" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="email" value="<?php echo e(old('email',$user->email)); ?>" id="title" readonly>
                            </div>
                            <?php if($errors->has('email')): ?>
                                <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group row border-bottom pb-4">
                            <label for="title" class="col-sm-2 col-form-label">Tên</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="fullName" value="<?php echo e(old('fullName',$user->fullName)); ?>" id="title" >
                            </div>
                            <?php if($errors->has('fullName')): ?>
                                <span class="text-danger"><?php echo e($errors->first('fullName')); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group row border-bottom pb-4">
                            <label for="title" class="col-sm-2 col-form-label">Số điện thoại</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="phoneNumber" value="<?php echo e(old('phoneNumber',$user->phoneNumber)); ?>" id="title" >
                            </div>
                            <?php if($errors->has('phoneNumber')): ?>
                                <span class="text-danger"><?php echo e($errors->first('phoneNumber')); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group row border-bottom pb-4">
                            <label for="role" class="col-sm-2 col-form-label">Vai trò</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="isAdmin">
                                    <option value="0" <?php echo e($user->isAdmin == 0 ? 'selected' : ''); ?>>Người dùng</option>
                                    <option value="1" <?php echo e($user->isAdmin == 1 ? 'selected' : ''); ?>>Quản trị viên</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Lưu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layoutadmin.layoutadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\btlcuoiky\resources\views/admin/user/edit.blade.php ENDPATH**/ ?>
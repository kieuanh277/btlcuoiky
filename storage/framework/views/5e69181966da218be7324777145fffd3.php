


<?php $__env->startSection('header'); ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Quản trị viên</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Đơn đặt</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Đơn đặt</h6>
    </nav>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card p-3">
                    <form method="post" action="<?php echo e(route('orders.update',[$order])); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('put'); ?>
                        <div class="form-group row border-bottom pb-4">
                            <label for="category_id" class="col-sm-2 col-form-label">Tour</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="tour_id" id="location_id">
                                    <?php $__currentLoopData = $tours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($tour->id); ?>" <?php echo e(($order->tour_id == $tour->id) ? 'selected' : ''); ?>>
                                            <?php echo e($tour->tourName); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row border-bottom pb-4">
                            <label for="category_id" class="col-sm-2 col-form-label">Người dùng</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="user_id" id="location_id">
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($user->id); ?>" <?php echo e(($order->user_id == $user->id) ? 'selected' : ''); ?>>
                                            <?php echo e($user->id); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row border-bottom pb-4">
                            <label for="title" class="col-sm-2 col-form-label">Ngày đặt tour</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="orderDate" value="<?php echo e($order->orderDate ? date('Y-m-d', strtotime($order->orderDate)) : ''); ?>">
                            </div>
                            <?php if($errors->has('orderDate')): ?>
                                <span class="text-danger"><?php echo e($errors->first('orderDate')); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group row border-bottom pb-4">
                            <label for="title" class="col-sm-2 col-form-label">Số lượng người</label>
                            <div class="col-sm-10">

                                <input type="number" class="form-control" name="participantNumber" value="<?php echo e(old('participantNumber',$order->participantNumber)); ?>" id="title">
                            </div>
                            <?php if($errors->has('participantNumber')): ?>
                                <span class="text-danger"><?php echo e($errors->first('participantNumber')); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group row border-bottom pb-4">
                            <label for="title" class="col-sm-2 col-form-label">Tổng tiền</label>
                            <div class="col-sm-10">

                                <input type="number" class="form-control" name="totalAmount" value="<?php echo e(old('totalAmount',$order->totalAmount)); ?>" id="title">
                            </div>
                            <?php if($errors->has('totalAmount')): ?>
                                <span class="text-danger"><?php echo e($errors->first('totalAmount')); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group row border-bottom pb-4">
                            <label for="title" class="col-sm-2 col-form-label">Trạng thái thanh toán</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="paymentStatus">
                                    <option value="Approved" <?php echo e($order->paymentStatus == 'Approved' ? 'selected' : ''); ?>>Thành công</option>
                                    <option value="Pending" <?php echo e($order->paymentStatus == 'Pending' ? 'selected' : ''); ?>>Đang xử lý</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row border-bottom pb-4">
                            <label for="title" class="col-sm-2 col-form-label">Tên</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" value="<?php echo e(old('name',$order->name)); ?>" id="title">
                            </div>
                            <?php if($errors->has('name')): ?>
                                <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group row border-bottom pb-4">
                            <label for="title" class="col-sm-2 col-form-label">Số điện thoại</label>
                            <div class="col-sm-10">

                                <input type="tel" class="form-control" name="phone" value="<?php echo e(old('phone',$order->phone)); ?>" id="title">
                            </div>
                            <?php if($errors->has('phone')): ?>
                                <span class="text-danger"><?php echo e($errors->first('phone')); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group row border-bottom pb-4">
                            <label for="title" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">

                                <input type="text" class="form-control" name="email" value="<?php echo e(old('email',$order->email)); ?>" id="title">
                            </div>
                            <?php if($errors->has('email')): ?>
                                <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                            <?php endif; ?>
                        </div>
                        <button type="submit" class="btn btn-success">Lưu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layoutadmin.layoutadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp_new\htdocs\btlcuoiky\resources\views/admin/order/edit.blade.php ENDPATH**/ ?>
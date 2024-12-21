

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card p-3">
                    <form method="post" action="<?php echo e(route('hotels.update',[$hotel])); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('put'); ?>
                        <div class="form-group row border-bottom pb-4">
                            <label for="title" class="col-sm-2 col-form-label">Tên khách sạn</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="hotelName" value="<?php echo e(old('hotelName',$hotel->hotelName)); ?>" id="title">
                            </div>
                            <?php if($errors->has('hotelName')): ?>
                                <span class="text-danger"><?php echo e($errors->first('hotelName')); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group row border-bottom pb-4">
                            <label for="category_id" class="col-sm-2 col-form-label">Vị trí</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="site_id" id="location_id">
                                    <?php $__currentLoopData = $sites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $site): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($site->id); ?>" <?php echo e(($hotel->site_id == $site->id) ? 'selected' : ''); ?>>
                                            <?php echo e($site->siteName); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <?php if($errors->has('site_id')): ?>
                                <span class="text-danger"><?php echo e($errors->first('site_id')); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group row border-bottom pb-4">
                            <label for="category_id" class="col-sm-2 col-form-label">Địa chỉ</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="address" value="<?php echo e(old('address',$hotel->address)); ?>" id="address">
                            </div>
                            <?php if($errors->has('address')): ?>
                                <span class="text-danger"><?php echo e($errors->first('address')); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group row border-bottom pb-4">
                            <label for="excerpt" class="col-sm-2 col-form-label">Đánh giá</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="rating" value="<?php echo e(old('rating',$hotel->rating)); ?>" id="title">
                            </div>
                            <?php if($errors->has('rating')): ?>
                                <span class="text-danger"><?php echo e($errors->first('rating')); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group row border-bottom pb-4">
                            <label for="description" class="col-sm-2 col-form-label">Mô tả</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="description" id="description" cols="30" rows="5"><?php echo e(old('description',$hotel->description)); ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row border-bottom pb-4">
                            <label for="description" class="col-sm-2 col-form-label">Giá/Người</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="pricePerPerson"  value="<?php echo e(old('pricePerPerson',$hotel->pricePerPerson)); ?>"></input>
                            </div>
                            <?php if($errors->has('pricePerPerson')): ?>
                                <span class="text-danger"><?php echo e($errors->first('pricePerPerson')); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group row border-bottom pb-4">
                            <label for="image" class="col-sm-2 col-form-label">Ảnh</label>
                            <div class="col-sm-10">
                                <img id="imagePreview" src="<?php echo e(Storage::url($hotel->imageUrl)); ?>" alt="Ảnh hiện tại" style="max-width: 100px; max-height: 100px;">
                                <input type="file" name="imageUrl" class="form-control" id="imageUrl" onchange="previewImage(this)">

                            </div>
                            <?php if($errors->has('imageUrl')): ?>
                                <span class="text-danger"><?php echo e($errors->first('imageUrl')); ?></span>
                            <?php endif; ?>
                        </div>
                        <button type="submit" class="btn btn-success">Lưu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function previewImage(input) {
            var imagePreview = document.getElementById('imagePreview');
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layoutadmin.layoutadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp_new\htdocs\btlcuoiky\resources\views/admin/hotel/edit.blade.php ENDPATH**/ ?>
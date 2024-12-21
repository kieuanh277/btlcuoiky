



<?php $__env->startSection('header'); ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Admin</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Tour</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Tour</h6>
    </nav>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card p-3">
                    <form method="post" action="<?php echo e(route('tours.update',[$tour])); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('put'); ?>
                        <div class="form-group row border-bottom pb-4">
                            <label for="title" class="col-sm-2 col-form-label">tourName</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="tourName" value="<?php echo e(old('tourName',$tour->tourName)); ?>" id="title">
                            </div>
                            <?php if($errors->has('tourName')): ?>
                                <span class="text-danger"><?php echo e($errors->first('tourName')); ?></span>
                            <?php endif; ?>

                        </div>
                        <div class="form-group row border-bottom pb-4">
                            <label for="category_id" class="col-sm-2 col-form-label">site</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="sites[]" multiple>
                                    <?php $__currentLoopData = $sites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $site): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($site->id); ?>" <?php echo e($tour->site->contains($site) ? 'selected' : ''); ?>><?php echo e($site->siteName); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            <?php if($errors->has('sites')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('sites')); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row border-bottom pb-4">
                            <label for="image" class="col-sm-2 col-form-label">Ảnh</label>
                            <div class="col-sm-10">
                                <img id="imagePreview" src="<?php echo e(Storage::url($tour->image)); ?>" alt="Ảnh hiện tại" style="max-width: 100px; max-height: 100px;">
                                <input type="file" name="image" class="form-control" id="imageUrl" onchange="previewImage(this)">
                            </div>
                            <?php if($errors->has('image')): ?>
                                <span class="text-danger"><?php echo e($errors->first('image')); ?></span>
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


<?php echo $__env->make('admin.layoutadmin.layoutadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\btlcuoiky\resources\views/admin/tour/edit.blade.php ENDPATH**/ ?>



<?php $__env->startSection('header'); ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Admin</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Khách sạn</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Khách sạn</h6>
    </nav>
<?php $__env->stopSection(); ?>




<?php $__env->startSection('content'); ?>

  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
              <div class="card p-3">
                  <form method="post" action="<?php echo e(route('hotels.store')); ?>" enctype="multipart/form-data" id="my-form">
                      <?php echo csrf_field(); ?>
                      <div class="form-group row border-bottom pb-4">
                          <label for="title" class="col-sm-2 col-form-label">Tên khách sạn</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" name="hotelName" value="<?php echo e(old('hotelName')); ?>" id="title"
                                     placeholder="Ví dụ: Lake Side Hotel">
                          </div>
                          <?php if($errors->has('hotelName')): ?>
                              <span class="text-danger"><?php echo e($errors->first('hotelName')); ?></span>
                          <?php endif; ?>
                      </div>
                      <div class="form-group row border-bottom pb-4">
                          <label for="category_id" class="col-sm-2 col-form-label">Địa danh</label>
                          <div class="col-sm-10">
                              <select class="form-control" name="site_id" id="site_id">
                                  <?php $__currentLoopData = $sites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $site): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option <?php echo e((old('site_id') == $site->id) ? 'selected' : ''); ?> value="<?php echo e($site->id); ?>"><?php echo e($site->siteName); ?></option>
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
                              <input type="text" class="form-control" name="address" value="<?php echo e(old('address')); ?>" id="address"
                          placeholder="Ví dụ: 32 Vương Thừa Vũ ">
                      </div>
                          <?php if($errors->has('address')): ?>
                              <span class="text-danger"><?php echo e($errors->first('address')); ?></span>
                          <?php endif; ?>
                      </div>
                      <div class="form-group row border-bottom pb-4">
                          <label for="excerpt" class="col-sm-2 col-form-label">Đánh giá</label>
                          <div class="col-sm-10">
                              <input type="number" class="form-control" name="rating" value="<?php echo e(old('rating')); ?>" id="title"
                                     placeholder="Ví dụ: 4">
                          </div>
                          <?php if($errors->has('rating')): ?>
                              <span class="text-danger"><?php echo e($errors->first('rating')); ?></span>
                          <?php endif; ?>
                      </div>
                      <div class="form-group row border-bottom pb-4">
                          <label for="description" class="col-sm-2 col-form-label">Mô tả</label>
                          <div class="col-sm-10">
                              <textarea class="form-control" name="description" id="description" cols="30" rows="5"><?php echo e(old('description')); ?></textarea>
                          </div>
                      </div>
                      <div class="form-group row border-bottom pb-4">
                          <label for="description" class="col-sm-2 col-form-label">Giá/Người</label>
                          <div class="col-sm-10">
                              <input type="number" class="form-control" name="pricePerPerson" value="<?php echo e(old('pricePerPerson')); ?>" id="title"
                                     placeholder="Ví dụ: 200000">
                          </div>
                          <?php if($errors->has('pricePerPerson')): ?>
                              <span class="text-danger"><?php echo e($errors->first('pricePerPerson')); ?></span>
                          <?php endif; ?>
                      </div>
                      <div class="form-group row border-bottom pb-4">
                          <label for="image" class="col-sm-2 col-form-label">Ảnh</label>
                          <div class="col-sm-10">
                              <img id="imagePreview" src="" alt="Ảnh được chọn" style="max-width: 100px; max-height: 100px; display: none;">
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
                  imagePreview.style.display = 'block';
              };

              reader.readAsDataURL(input.files[0]);
          } else {
              imagePreview.style.display = 'none';
          }
      }
  </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layoutadmin.layoutadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\btlcuoiky\resources\views/admin/hotel/create.blade.php ENDPATH**/ ?>
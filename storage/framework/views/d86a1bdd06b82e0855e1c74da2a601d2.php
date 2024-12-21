

<?php $__env->startSection('header'); ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Quản trị viên</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Địa danh</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Địa danh</h6>
    </nav>
<?php $__env->stopSection(); ?>




<?php $__env->startSection('search'); ?>
    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <form action="<?php echo e(route('sites.search')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="input-group">
                <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                <input type="text" class="form-control" name="query" placeholder="Tìm theo tên">
            </div>

        </form>
    </div>
<?php $__env->stopSection(); ?>






<?php $__env->startSection('content'); ?>


    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
              <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                  <h6 class="mb-0">Danh sách địa danh</h6>
                  <a href="<?php echo e(route('sites.create')); ?>" class="btn btn-primary btn-sm">
                      Thêm địa danh
                  </a>
              </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tên địa danh</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mô tả</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Vị trí</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ảnh</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $sites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $site): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td class="align-middle text-center">
                          <p class="text-xs font-weight-bold mb-0"><?php echo e($site->id); ?></p>
                        </td>
                        <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0"><?php echo e($site->siteName); ?></p>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold"><?php echo e($site->description); ?></span>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold"><?php echo e($site->location->locationName); ?></span>
                        </td>
                        <td class="align-middle text-center">
                            <a href="<?php echo e(Storage::url($site->image)); ?>" target="_blank">
                                <img width="100" src="<?php echo e(Storage::url($site->image)); ?>" alt="<?php echo e($site->siteName); ?>">
                            </a>
                        </td>
                          <td class="align-middle">
                              <a href="<?php echo e(route('sites.edit', [$site])); ?>" class="text-primary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit hotel">
                                  Sửa
                              </a>
                              <form onclick="return confirm('Bạn có chắc chắn muốn xóa địa danh này không?');" class="d-inline-block" action="<?php echo e(route('sites.destroy', [$site])); ?>" method="post">
                                  <?php echo csrf_field(); ?>
                                  <?php echo method_field('delete'); ?>
                                  <a href="#" class="text-danger font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Delete hotel" onclick="event.preventDefault(); this.closest('form').submit();">
                                      Xóa
                                  </a>
                              </form>
                          </td>


                      </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer clearfix">
              <ul class="pagination justify-content-center">
                <?php if($sites->onFirstPage()): ?>
                  <li class="page-item disabled">
                    <span class="page-link">&laquo;</span>
                  </li>
                <?php else: ?>
                  <li class="page-item">
                    <a class="page-link" href="<?php echo e($sites->previousPageUrl()); ?>" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                <?php endif; ?>

                <?php $__currentLoopData = $sites->getUrlRange(1, $sites->lastPage()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class="page-item <?php echo e($page == $sites->currentPage() ? 'active' : ''); ?>">
                    <a class="page-link" href="<?php echo e($url); ?>"><?php echo e($page); ?></a>
                  </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php if($sites->hasMorePages()): ?>
                  <li class="page-item">
                    <a class="page-link" href="<?php echo e($sites->nextPageUrl()); ?>" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                <?php else: ?>
                  <li class="page-item disabled">
                    <span class="page-link">&raquo;</span>
                  </li>
                <?php endif; ?>
              </ul>
            </div>

          </div>
        </div>
      </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layoutadmin.layoutadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\btlcuoiky\resources\views/admin/site/index.blade.php ENDPATH**/ ?>
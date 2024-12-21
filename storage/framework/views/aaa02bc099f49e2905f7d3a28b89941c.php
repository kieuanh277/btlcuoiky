

<?php $__env->startSection('content'); ?>

    <div class="hero-wrap js-fullheight" style="background-image: url(<?php echo e(asset('images/bg_3.jpg')); ?>);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Tour</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Danh Sách Tour vv</h1>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
        	
          <div class="col-lg-12">
          	<div class="row">
			  <?php $__currentLoopData = $tours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php $__currentLoopData = $tour->tourDetail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          		<div class="col-md-4 ftco-animate">
		    				<div class="destination">
		    					<a href="<?php echo e(route('tour.detail', ['detail'=>$detail])); ?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo e(Storage::url($tour->image)); ?>);">
		    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="<?php echo e(route('tour.detail', ['detail'=>$detail])); ?>"><?php echo e($tour->tourName); ?></a></h3>
				    						<!-- <p class="rate">
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star-o"></i>
				    							<span>8 Rating</span>
				    						</p> -->
			    						</div>


		    						</div>

									<p><span style="color: red; font-size: 16px;" class="price"><?php echo e($detail->childrenPrice); ?> - <?php echo e($detail->adultPrice); ?> VNĐ</span></p>

<!-- 		    						
		    						<p>Far far away, behind the word mountains, far from the countries</p> -->
		    						<p class="days"><span><?php echo e(date('d/m/Y', strtotime($detail->checkInDate))); ?> - <?php echo e(date('d/m/Y', strtotime($detail->checkOutDate))); ?></span></p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><i class="icon-map-o"></i> <?php echo e($detail->depatureLocation); ?></span> 
		    							<span class="ml-auto"><a href="<?php echo e(route('tour.detail', ['detail'=>$detail])); ?>">Đặt Ngay</a></span>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          	</div>
          	<div class="row mt-5">
		          <div class="col text-center">
		            <div class="block-27">
		              <ul>
					  <?php if($tours->onFirstPage()): ?>
					  <li><a href="#">&lt;</a></li>
                <?php else: ?>
                  <li class="page-item">
				  <li><a href="<?php echo e($tours->previousPageUrl()); ?>" aria-label="Previous"> &lt;</a></li>
                  </li>
                <?php endif; ?>

                <?php $__currentLoopData = $tours->getUrlRange(1, $tours->lastPage()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class="active"  <?php echo e($page == $tours->currentPage() ? 'active' : ''); ?>">
                    <a href="<?php echo e($url); ?>"><?php echo e($page); ?></a>
                  </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php if($tours->hasMorePages()): ?>
				<li><a href="<?php echo e($tours->nextPageUrl()); ?>" aria-label="Next">&gt;</a></li>

                <?php else: ?>
				<li><a href="#">&gt;</a></li>
                <?php endif; ?>
		              </ul>
		            </div>
		          </div>
		        </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\btlcuoiky\resources\views/tour.blade.php ENDPATH**/ ?>
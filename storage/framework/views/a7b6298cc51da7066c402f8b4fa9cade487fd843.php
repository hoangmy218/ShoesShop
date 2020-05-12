<!--  Tiên -->


<?php $__env->startSection('content'); ?>

   <div class="hero-wrap hero-bread" style="background-image: url(<?php echo e(URL::to('public/frontend/images/bg_6.jpg')); ?>);">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo e(URL::to('/')); ?>"><?php echo e(__('Trang chủ')); ?></a></span> <span><?php echo e(__('Cửa hàng')); ?></span></p>
            <h1 class="mb-0 bread"><?php echo e(__('Cửa hàng')); ?></h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
              <!-- <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4"><?php echo e(__('Kết Quả Tìm Kiếm')); ?></h2>
              </div> -->
            </div>          
        </div>
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $search; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><!-- Tiên -->
                <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
                     
                    <div class="product d-flex flex-column">
                        <a href="#" class="img-prod"><img class="img-fluid" src="public/upload/product/<?php echo e($product->ha_ten); ?>" alt="Colorlib Template">
                            <div class="overlay"></div>
                            <span class="status"><?php echo e(__('Giảm 50%')); ?></span>
                        </a>
                        <div class="text py-3 pb-4 px-3">
                            <div class="d-flex">
                                <div class="cat">
                                    <span><?php echo e(__('Phong cách thời thượng')); ?></span>
                                    
                                </div>
                                <div class="rating">
                                    <p class="text-right mb-0">
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    </p>
                                </div>
                            </div>
                            <!-- Tiên -->
                            <h3><a href="<?php echo e(URL::to('/product-detail/'.$product->sp_ma)); ?>"><?php echo e($product->sp_ten); ?></a></h3>
                            <div class="pricing">
                                <p class="price"><span><?php echo e(number_format($product->sp_donGiaBan).' '.'VNĐ'); ?></span></p>
                            </div>
                            <p class="bottom-area d-flex px-3">
                                <a href="#" class="add-to-cart text-center py-2 mr-1"><span><?php echo e(__('Thêm giỏ hàng')); ?><i class="ion-ios-add ml-1"></i></span></a>
                                <a href="#" class="buy-now text-center py-2"><?php echo e(__('Mua ngay')); ?><span><i class="ion-ios-cart ml-1"></i></span></a>
                            </p>
                        </div>

                        
                    </div>
                    
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
            </div>
        </div>
    </section>
              
        <!--/recommended_items-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('shop_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shoesshop\resources\views/pages/product/search.blade.php ENDPATH**/ ?>
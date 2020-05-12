<?php $__env->startSection('content'); ?>

    <section id="home-section" class="hero">
        <div class="home-slider owl-carousel">
            <!-- Start Ngân (17/4/2020) -->

                <?php $__currentLoopData = $list_ad; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="slider-item js-fullheight">
                        <div class="overlay"></div>
                        <div class="container-fluid p-0">
                          <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                            <img class="one-third order-md-last img-fluid" src="public/upload/advertisement/<?php echo e($ad->qc_hinhAnh); ?>" alt="">
                              <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                                <div class="text">
                                    <span class="subheading"><?php echo e($ad->qc_chuDe); ?></span>
                                    <div class="horizontal">
                                        <h1 class="mb-4 mt-3"><?php echo e($ad->qc_quangCao); ?></h1>
                                        
                                      </div>
                                </div>
                              </div>
                            </div>
                        </div>
                      </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!-- End Ngân (17/4/2020) -->
          
        

        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row no-gutters ftco-services">
              <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services p-4 py-md-5">
                  <div class="icon d-flex justify-content-center align-items-center mb-4">
                        <span class="flaticon-bag"></span>
                  </div>
                  <div class="media-body">
                    <h3 class="heading"><?php echo e(__('Khuyến mãi')); ?></h3>
                    <p><?php echo e(__('Nhiều mã giảm giá hấp dẫn')); ?></p>
                  </div>
                </div>      
              </div>
              <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services p-4 py-md-5">
                  <div class="icon d-flex justify-content-center align-items-center mb-4">
                        <span class="flaticon-customer-service"></span>
                  </div>
                  <div class="media-body">
                    <h3 class="heading"><?php echo e(__('Hỗ trợ khách hàng')); ?></h3>
                    <p><?php echo e(__('Nhanh chóng, kinh nghiệm và hiệu quả. Chúng tôi luôn luôn sẵn sàng giải đáp tất cả các thằc mắc và giải quyết nhanh chóng vấn đề của bạn!')); ?></p>
                  </div>
                </div>    
              </div>
              <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services p-4 py-md-5">
                  <div class="icon d-flex justify-content-center align-items-center mb-4">
                        <span class="flaticon-payment-security"></span>
                  </div>
                  <div class="media-body">
                    <h3 class="heading"><?php echo e(__('Thanh toán bảo mật')); ?></h3>
                    <p><?php echo e(__('Dịch vụ được đảm bảo an toàn, nhanh chóng và bảo mật với hình thức thanh toán trực tuyến.')); ?></p>
                  </div>
                </div>      
              </div>
            </div>
        </div>
    </section>

  <section class="ftco-section bg-light">
        <div class="container">
                <div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4"><?php echo e(__('Sản phẩm mới')); ?></h2>
            <p><?php echo e(__('Nâng niu bàn chân bạn')); ?></p>
          </div>
        </div>          
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-10 order-md-last"> 
                    <div class="row"> 
                        <?php $__currentLoopData = $all_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><!-- Tiên -->
                            <div class="col-sm-12 col-md-12 col-lg-4 ftco-animate d-flex">
                            
                             
                                <div class="product d-flex flex-column">
                                    <a href="#" class="img-prod"><img class="img-fluid" src="public/upload/product/<?php echo e($product->ha_ten); ?>" alt="Colorlib Template">
                                        <div class="overlay"></div>
                                        
                                    </a>
                                    <div class="text py-3 pb-4 px-3">
                                        <div class="d-flex">
                                            <div class="cat">
                                                <span><?php echo e($product->th_ten); ?></span>
                                                
                                            </div>
                                            
                                        </div>
                                        <!-- Tiên -->
                                        <h3><a href="<?php echo e(URL::to('/product-detail/'.$product->sp_ma)); ?>"><?php echo e($product->sp_ten); ?></a></h3>
                                        <div class="pricing">
                                            <p class="price"><span><?php echo e(number_format($product->sp_donGiaBan).' '.'VNĐ'); ?></span></p>
                                        </div>
                                        <p class="bottom-area d-flex px-3">
                                           
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    
                    <div class="row mt-5">
                      <div class="col text-center">
                        <div class="block-27">
                          <ul>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                </div>

                

                <div class="col-md-4 col-lg-2">
                    <div class="sidebar">
                        <div class="sidebar-box-2">
                            <h2 class="heading"><?php echo e(__('Danh mục')); ?></h2>
                            <div class="fancy-collapse-panel">

                                <div class="panel-group"  role="tablist" aria-multiselectable="true">
                                    <?php $__currentLoopData = $list_cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="panel panel-default">
                                         <div class="panel-heading" role="tab">
                                             <h4 class="panel-title">
                                                 <a class="collapsed" href="#collapseTwo"><?php echo e($cate->dm_ten); ?>

                                                 </a>
                                             </h4>
                                         </div>
                                     </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                     
                            </div>

                            
                            <h2 class="heading"><?php echo e(__('Thương hiệu')); ?></h2>
                            <div class="fancy-collapse-panel">

                                <div class="panel-group"  role="tablist" aria-multiselectable="true">
                                     <?php $__currentLoopData = $list_brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="panel panel-default">
                                         <div class="panel-heading" role="tab">
                                             <h4 class="panel-title">
                                                 <a class="collapsed" href="#collapseTwo"><?php echo e($brand->th_ten); ?>

                                                 </a>
                                             </h4>
                                         </div>
                                     </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                     
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



  
 


    <section class="ftco-gallery">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 heading-section text-center mb-4 ftco-animate">
            
          </div>
            </div>
        </div>
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                    <div class="col-md-4 col-lg-2 ftco-animate">
                        <a href="<?php echo e(URL::to('public/frontend/images/gallery-1.jpg')); ?>" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php echo e(URL::to('public/frontend/images/gallery-1.jpg')); ?>);">
                            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-2 ftco-animate">
                        <a href="<?php echo e(URL::to('public/frontend/images/gallery-2.jpg')); ?>" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php echo e(URL::to('public/frontend/images/gallery-2.jpg')); ?>);">
                            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-2 ftco-animate">
                        <a href="<?php echo e(URL::to('public/frontend/images/gallery-3.jpg')); ?>" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php echo e(URL::to('public/frontend/images/gallery-3.jpg')); ?>);">
                            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-2 ftco-animate">
                        <a href="<?php echo e(URL::to('public/frontend/images/gallery-4.jpg')); ?>" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php echo e(URL::to('public/frontend/images/gallery-4.jpg')); ?>);">
                            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-2 ftco-animate">
                        <a href="<?php echo e(URL::to('public/frontend/images/gallery-5.jpg')); ?>" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php echo e(URL::to('public/frontend/images/gallery-5.jpg')); ?>);">
                            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-2 ftco-animate">
                        <a href="<?php echo e(URL::to('public/frontend/images/gallery-6.jpg')); ?>" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php echo e(URL::to('public/frontend/images/gallery-6.jpg')); ?>);">
                            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                        </a>
                    </div>
        </div>
        </div>
    </section>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('shop_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shoesshop\resources\views/pages/home.blade.php ENDPATH**/ ?>
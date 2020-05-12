<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shoes Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/css/searchmodal.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/css/open-iconic-bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/css/animate.css')); ?>">
    
    
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/css/owl.theme.default.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/css/magnific-popup.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/css/aos.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/css/ionicons.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/css/bootstrap-datepicker.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/css/jquery.timepicker.css')); ?>">

    
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/css/flaticon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/css/icomoon.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/css/style.css')); ?>">
    <?php echo $__env->yieldContent('script_thumbnail'); ?>
  



 
  </head>
 <body class="goto-here">
    <div class="py-1 bg-black">
      <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
          <div class="col-lg-12 d-block">
            <div class="row d-flex">
              <div class="col-md pr-4 d-flex topper align-items-center">
                <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                <span class="text">034 888 3338</span>
              </div>
              <div class="col-md pr-4 d-flex topper align-items-center">
                <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                <span class="text">shoesshop@gmail.com</span>
              </div>
              <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                
                <span class="text"><a href="<?php echo e(URL::to('/switchlang/en')); ?>"><?php echo e(__('Tiếng Anh')); ?></a> | <a href="<?php echo e(URL::to('/switchlang/vi')); ?>"><?php echo e(__('Tiếng Việt')); ?></a></span>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="<?php echo e(URL::to('/')); ?>">Shoes Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> 
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="<?php echo e(URL::to('/')); ?>" class="nav-link"><?php echo e(__('Trang chủ')); ?></a></li>
            <li class="nav-item"><a data-toggle="modal" data-target="#myModal" class="nav-link"><?php echo e(__('Tìm kiếm')); ?></a></li>
            
            <li class="nav-item"><a href="about.html" class="nav-link"><?php echo e(__('Giới thiệu')); ?></a></li>
         
            <li class="nav-item"><a href="contact.html" class="nav-link"><?php echo e(__('Liên hệ')); ?></a></li>

            <?php 
              $customer_name = Session::get('nd_ten');
              $customer_cv = Session::get('ltk_ma'); 
            ?>
            <?php if($customer_cv == 2): ?>
             <li class="nav-item dropdown">
              <a href="<?php echo e(URL::to('/')); ?>" class="nav-link"><?php echo e($customer_name); ?></a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="<?php echo e(URL::to('/info-customer')); ?>"><?php echo e(__('Thông tin của tôi')); ?></a>
                <a class="dropdown-item" href="<?php echo e(URL::to('/status-order')); ?>"><?php echo e(__('Đơn hàng của tôi')); ?></a>
             <a class="dropdown-item" onclick="<?php echo "return confirm('"; ?><?php echo e(__("Bạn chắc chắn muốn đăng xuất tài khoản này?")); ?><?php echo "')";?>" href="<?php echo e(URL::to('/log_out')); ?>"><?php echo e(__('Đăng xuất')); ?></a>
              </div>
            </li>
            <?php else: ?>
              <li class="nav-item"><a href="<?php echo e(URL::to('userLogin')); ?>" class="nav-link"><?php echo e(__('Đăng nhập')); ?></a></li>
              <li class="nav-item"><a href="<?php echo e(URL::to('register')); ?>" class="nav-link"><?php echo e(__('Đăng ký')); ?></a></li>
            <?php endif; ?>

             <li class="nav-item dropdown nav-item cta cta-colored">
              <a class="nav-link dropdown-toggle" href="<?php echo e(URL::to('/show-cart')); ?>" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="icon-shopping_cart"></span> 
              <?php
                $content = Cart::content();
                $sl = 0;
                if ($content){
                  foreach ($content as $v_content){
                      $sl = $sl + $v_content->qty; 
                  }
                  
                }
                
              ?>
              [<?php echo e($sl); ?>]</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="<?php echo e(URL::to('/show-cart')); ?>"><?php echo e(__('Giỏ hàng của tôi')); ?></a>
                <a class="dropdown-item" href="<?php echo e(URL::to('/removeCart')); ?>"><?php echo e(__('Xóa giỏ hàng của tôi')); ?></a>
                
              </div>
            </li>
            

          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                  </div>
                  <div class="modal-body">

                    <h1><?php echo e(__('Tìm kiếm')); ?></h1>
                    <form class="navbar-form " role="search" action="<?php echo e(URL::to('/tim-kiem')); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                      <div class="form-group">
                        <input type="text" class="form-control" name="keywords_submit" placeholder="Nike Air Max...">
                      </div>
                      <button type="submit" class="btn btn-theme btn-primary py-3 px-4"><?php echo e(__('Tìm kiếm')); ?></button>
                    </form>
                 </div>
              </div>
            </div>
          </div>


<?php echo $__env->yieldContent('content'); ?>


    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row">
          <div class="mouse">
            <a href="#" class="mouse-icon">
              <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
            </a>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Shoesshop</h2>
              <p><?php echo e(__('Nâng niu bàn chân bạn')); ?></p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2"><?php echo e(__('Danh mục')); ?></h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block"><?php echo e(__('Mua sắm')); ?></a></li>
                <li><a href="#" class="py-2 d-block"><?php echo e(__('Giới thiệu')); ?></a></li>
                <li><a href="#" class="py-2 d-block"><?php echo e(__('Liên hệ')); ?></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><?php echo e(__('Giúp đỡ')); ?></h2>
              <div class="d-flex">
                <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                  <li><a href="#" class="py-2 d-block"><?php echo e(__('Thông tin vận chuyển')); ?></a></li>
                  <li><a href="#" class="py-2 d-block"><?php echo e(__('Đổi & trả hàng')); ?></a></li>
                </ul>
                <ul class="list-unstyled">
                  <li><a href="#" class="py-2 d-block"><?php echo e(__('Câu hỏi thường gặp')); ?></a></li>
                  <li><a href="#" class="py-2 d-block"><?php echo e(__('Liên hệ')); ?></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><?php echo e(__('Bạn có thắc mắc?')); ?></h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text"><?php echo e(__('888A Đường 3/2, Phường Xuân Khánh, Quận Ninh Kiều, Thành phố Cần Thơ')); ?></span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">034 888 3338</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">shoesshop@gmail.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?php echo e(asset('public/frontend/js/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('public/frontend/js/jquery-migrate-3.0.1.min.js')); ?>"></script>
  <script src="<?php echo e(asset('public/frontend/js/popper.min.js')); ?>"></script>
  <script src="<?php echo e(asset('public/frontend/js/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('public/frontend/js/jquery.easing.1.3.js')); ?>"></script>
  <script src="<?php echo e(asset('public/frontend/js/jquery.waypoints.min.js')); ?>"></script>
  <script src="<?php echo e(asset('public/frontend/js/jquery.stellar.min.js')); ?>"></script>
  <script src="<?php echo e(asset('public/frontend/js/owl.carousel.min.js')); ?>"></script>
  <script src="<?php echo e(asset('public/frontend/js/jquery.magnific-popup.min.js')); ?>"></script>
  <script src="<?php echo e(asset('public/frontend/js/aos.js')); ?>"></script>
  <script src="<?php echo e(asset('public/frontend/js/jquery.animateNumber.min.js')); ?>"></script>
  <script src="<?php echo e(asset('public/frontend/js/bootstrap-datepicker.js')); ?>"></script>
  <script src="<?php echo e(asset('public/frontend/js/scrollax.min.js')); ?>"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo e(asset('public/frontend/js/google-map.js')); ?>"></script>
  <script src="<?php echo e(asset('public/frontend/js/main.js')); ?>"></script>

  
    <?php echo $__env->yieldContent('script_qty'); ?>

  </body>
</html><?php /**PATH C:\xampp\htdocs\ShoesStore\ShoesShop\resources\views/shop_layout.blade.php ENDPATH**/ ?>
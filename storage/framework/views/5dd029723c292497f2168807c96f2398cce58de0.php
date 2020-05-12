<?php $__env->startSection('content'); ?>
 <div class="hero-wrap hero-bread" style="background-image: url(<?php echo e(URL::to('public/frontend/images/bg_6.jpg')); ?>);">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo e(URL::to('/')); ?>"><?php echo e(__('Trang chủ')); ?></a></span> <span><?php echo e(__('Thông tin của tôi')); ?></span></p>
            <h1 class="mb-0 bread"><?php echo e(__('Thông tin của tôi')); ?></h1>
          </div>
        </div>
      </div>
    </div>
    <section class="ftco-section ftco-cart">
			<div class="container">
                <?php
                $message = Session::get('message');
                if ($message){
                    echo '<span class="alert alert-success">'.$message."</span>";
                    
                    Session::forget('message');
                }
                $message = Session::get('error');
                if ($message){
                    echo '<span class="alert alert-danger">'.$message."</span>";
                    
                    Session::forget('error');
                }
            ?>
               
    		<div class="row justify-content-start">
    			<div class="col col-lg-12 col-md-12 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3 class="billing-heading mb-4"><?php echo e(__('Thông tin của tôi')); ?></h3>
    					
    					<?php $__currentLoopData = $nguoi_dung; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ndma): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    					<p class="d-flex">
    						<span><?php echo e(__('Mã khách hàng')); ?></span>
    						<span><?php echo e($ndma->nd_ma); ?></span>
    					</p>
	          			<p class="d-flex">
    						<span><?php echo e(__('Họ và tên')); ?></span>
    						<span><?php echo e($ndma->nd_ten); ?></span>
    					</p>
    					<p class="d-flex">
    						<span><?php echo e(__('Email')); ?></span>
    						<span><?php echo e($ndma->nd_email); ?></span>
    					</p>
    					<p class="d-flex">
    						<span><?php echo e(__('SĐT')); ?></span>
    						<span><?php echo e($ndma->nd_dienThoai); ?></span>
    					</p>
    					<p class="d-flex">
    						<span><?php echo e(__('Giới tính')); ?></span>
    					
    						<?php if($ndma->nd_gioiTinh==1): ?>
    							<span><?php echo e(__('Nữ')); ?></span>
    						<?php else: ?>
    							<span><?php echo e(__('Nam')); ?></span>
    						<?php endif; ?>
    						
    					</p>
    					<p class="d-flex">
    						<span><?php echo e(__('Ngày sinh')); ?></span>
    						<span><?php echo e(date('d/m/Y',strtotime($ndma->nd_ngaySinh))); ?></span>
    					</p>
    					<p class="d-flex">
    						<span><?php echo e(__('Địa chỉ')); ?></span>
    						<span><?php echo e($ndma->nd_diaChi); ?></span>
    					</p>
    					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    				</div>
    				<p class="text-center"><a href="<?php echo e(URL::to('/chinhsua-thongtin')); ?>" class="btn btn-primary py-3 px-4"><?php echo e(__('Chỉnh sửa thông tin của tôi')); ?></a></p>
    			</div>
    		</div>
			</div>
		</section>
    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('shop_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\ShoesShopWebsite\shoesshop\resources\views/pages/customer/thongtin_nguoidung.blade.php ENDPATH**/ ?>
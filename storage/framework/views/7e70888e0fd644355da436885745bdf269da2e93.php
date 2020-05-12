<?php $__env->startSection('content'); ?>
	<div class="hero-wrap hero-bread" style="background-image: url(<?php echo e(asset('public/frontend/images/bg_6.jpg')); ?>);">
     	<div class="container">
        	<div class="row no-gutters slider-text align-items-center justify-content-center">
          		<div class="col-md-9 ftco-animate text-center">
          			<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo e(URL::to('/')); ?>"><?php echo e(__('Trang chủ')); ?></a></span> <span><?php echo e(__('Đơn hàng của tôi')); ?></span></p>
            		<h1 class="mb-0 bread"><?php echo e(__('Đơn hàng của tôi')); ?></h1>
          		</div>
        	</div>
      	</div>
    </div>

    <section class="ftco-section">
    	<div class="container">
        	<?php
                    $message = Session::get('fail_message');
                    if ($message){
                        echo '<span class="alert alert-danger">'.$message."</span>";
                        
                        Session::put('fail_message',null);
                    }
                    $message = Session::get('success_message');
                    if ($message){
                        echo '<span class="alert alert-success">'.$message."</span>";
                        
                        Session::put('success_message',null);
                    }
                ?>
				<?php if($status->isempty()): ?>
                <p class="text-center">Chưa có đơn hàng nào!<br><br><a href="<?php echo e(URL::to('/')); ?>" class="btn btn-primary py-3 px-4"><?php echo e(__('Mua sắm ngay')); ?></a></p>
            <?php else: ?>
          		<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
                        
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th><?php echo e(__('STT')); ?></th>
						        <th><?php echo e(__('Mã đơn hàng')); ?></th>
						        <th><?php echo e(__('Người nhận')); ?></th>
						        <th><?php echo e(__('Ngày đặt')); ?></th>
						        <th><?php echo e(__('Tổng tiền')); ?></th>
						        <th><?php echo e(__('Trạng thái')); ?></th>
						        
						        <th>&nbsp;</th>
                                <th><?php echo e(__('Xem chi tiết')); ?></th>
						      </tr>
						    </thead>
						    <tbody>
                                <?php {{$i=1;}} ?>
                                <?php $__currentLoopData = $status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
                                    <th scope="row"><?php echo e($i); ?></th>
                                    <td><?php echo e($status->dh_ma); ?></td>
                                    <td><?php echo e($status->dh_tenNhan); ?></td>
                                    <td><?php echo e($status->dh_ngayDat); ?></td>
                                    <td><?php echo e(number_format($status->dh_tongTien).' VND'); ?></td>
                                    <td><?php echo e($status->dh_trangThai); ?></td>
                                    <td class="product-remove"> 
                                        <?php if($status->dh_trangThai != 'Đã hủy'): ?>
                                    <a onclick="<?php echo "return confirm('"; ?><?php echo e(__("Bạn có chắc chắn muốn hủy đơn hàng này?")); ?><?php echo "')";?>" class="ion-ios-close" href="<?php echo e(URL::to('/cus-cancel-order/'.$status->dh_ma)); ?>"><i class="fa fa-times"></i></a>
                                        <?php else: ?>
                                            &nbsp;
                                        <?php endif; ?>
                                    </td>
                                     <td><a href="<?php echo e(URL::to('/view-customerdetails/'.$status->dh_ma)); ?>" class="btn btn-primary py-2 px-3"><?php echo e(__('Xem thêm')); ?></a></td>
                                </tr>
                                <?php {{$i++;}} ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
            <?php endif; ?>


	         
	          	</div>
          
      
    </section> <!-- .section -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('shop_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\ShoesShopWebsite\shoesshop\resources\views/pages/customer/status_order.blade.php ENDPATH**/ ?>
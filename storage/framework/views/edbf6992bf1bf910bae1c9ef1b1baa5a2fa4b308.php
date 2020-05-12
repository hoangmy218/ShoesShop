<?php $__env->startSection('content'); ?>
	<div class="hero-wrap hero-bread" style="background-image: url(<?php echo e(asset('public/frontend/images/bg_6.jpg')); ?>);">
     	<div class="container">
        	<div class="row no-gutters slider-text align-items-center justify-content-center">
          		<div class="col-md-9 ftco-animate text-center">
          			<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo e(URL::to('/')); ?>"><?php echo e(__('Trang chủ')); ?> </a></span> <span><?php echo e(__('Đơn hàng của tôi')); ?></span></p>
            		<h1 class="mb-0 bread"><?php echo e(__('Đơn hàng của tôi')); ?></h1>
          		</div>
        	</div>
      	</div>
    </div>

    <section class="ftco-section">
    	<div class="container">
        	   <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="cart-list">
                        <table class="table" border="0">
                            <thead class="thead-primary">
                              <tr class="text-center">
                                <th><h3 class=" float-left"><?php echo e(__('Mã đơn hàng')); ?>: <?php echo e($order->dh_ma); ?></h3></th>
                                <th></th>
                                <th><h3 class=" float-right"><?php echo e(__('Ngày đặt')); ?>: <?php echo e(date('d-m-Y',strtotime($order->dh_ngayDat))); ?></h3></th>
                                
                                <th>&nbsp;</th>
                              </tr>
                            </thead>
                            <tbody>
                                <td class=" float-left " > 
                                        <?php echo e(__('Người gửi')); ?> 
                                        <address>
                                            <strong>Shoesshop</strong><br><?php echo e(__('888A Đường 3/2, Quận Ninh Kiều, Thành phố Cần Thơ')); ?><br><?php echo e(__('SĐT')); ?>: 034 888 3338<br><?php echo e(__('Email')); ?>: shoesshop@gmail.com
                                        </address>
                                </td>
                                <td>
                                    <?php echo e(__('Người nhận')); ?> 
                                        <address>
                                            <strong><?php echo e($order->dh_tenNhan); ?></strong><br><?php echo e($order->dh_diaChiNhan); ?><br><?php echo e(__('SĐT')); ?>: <?php echo e($order->dh_dienThoai); ?><br><?php echo e(__('Email')); ?>: <?php echo e($order->dh_email); ?>

                                        </address>
                                </td>
                                <td>
                                         
                                        <b><?php echo e(__('Hình thức vận chuyển')); ?>:</b> <?php echo e($order->vc_ten); ?><br>
                                        <b><?php echo e(__('Ghi chú')); ?>:</b> <?php echo e($order->dh_ghiChu); ?>

                                </td>
                            </tbody>
                          </table>
                      </div>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="cart-list">
                        <table class="table">
                            <thead class="thead-primary">
                              <tr class="text-center">
                                <th><?php echo e(__('STT')); ?></th>
                                <th><?php echo e(__('Tên sản phẩm')); ?></th>
                                <th><?php echo e(__('Số lượng')); ?></th>
                                <th><?php echo e(__('Đơn giá')); ?></th>
                                <th><?php echo e(__('Thành tiền')); ?></th>
                                <th>&nbsp;</th>
                              </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $i=1;
                                    $congTien=0;
                                    ?>
                                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($i++); ?></td>
                                    <td><?php echo e($item->sp_ten); ?></td>
                                    <td><?php echo e($item->soLuongDat); ?></td>
                                    <td><?php echo e(number_format($item->donGiaBan).' VND'); ?></td>
                                    <td><?php echo e(number_format($item->thanhTien).' VND'); ?></td>
                                    <?php $congTien = $congTien + $item->thanhTien; ?>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                          </table>
                      </div>
                </div>
            </div>
            

            <div class="row">
                <div class="col-6">
                    <p class="lead"><?php echo e(__('Phương thức thanh toán')); ?>:</p>
                    <b><?php echo e($order->tt_ten); ?></b>
                    <p class="lead"><?php echo e(__('Trạng thái thanh toán')); ?>:</p>
                     <?php if($order->tt_ten=='Tiền mặt'): ?>
                        <b><?php echo e(__('Chưa thanh toán')); ?></b>
                    <?php else: ?>
                         <b><?php echo e(__('Đã thanh toán')); ?></b>
                    <?php endif; ?>
                </div>
                <div class="col-6 d-flex">
                   
                        <div class="cart-detail cart-total bg-light p-3 p-md-4">
                            <h3 class="billing-heading mb-4">Cart Total</h3>
                            <p class="d-flex">
                                        <span><?php echo e(__('Cộng tiền')); ?></span>
                                        <span><?php echo e(number_format($congTien).' VND'); ?></span>
                                    </p>
                                    <p class="d-flex">
                                        <span><?php echo e(__('Phí vận chuyển')); ?></span>
                                        <span><?php echo e(number_format($order->vc_phi).' VND'); ?></span>
                                    </p>
                                    <p class="d-flex">
                                        <span><?php echo e(__('Khuyến mãi')); ?></span>
                                        <span>
                                            <?php 
                                                if (($order->km_ma != NULL) || ($order->km_ma != 0))
                                                    $disc = $congTien*$order->km_giamGia/100;
                                                else
                                                    $disc = 0;                                                        
                                            ?>
                                            <?php echo e(number_format($disc).' VND'); ?>

                                        </span>
                                    </p>
                                    <hr>
                                    <p class="d-flex total-price">
                                        <span><?php echo e(__('Tổng tiền thanh toán')); ?></span>
                                        <span><?php echo e(number_format($congTien+$order->vc_phi - $disc).' VND'); ?></span>
                                    </p>
                        </div>
                    </div>
                
                
            </div>
            <div>
        </div>
          
      
    </section> <!-- .section -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('shop_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\ShoesShopWebsite\shoesshop\resources\views/pages/customer/view_customerdetails.blade.php ENDPATH**/ ?>
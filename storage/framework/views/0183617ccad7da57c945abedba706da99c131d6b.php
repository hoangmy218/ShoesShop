<?php $__env->startSection('content'); ?>
 <div class="hero-wrap hero-bread" style="background-image: url(<?php echo e(URL::to('public/frontend/images/bg_6.jpg')); ?>);">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo e(URL::to('/')); ?>"><?php echo e(__('Trang chủ')); ?></a></span> <span><?php echo e(__('Thông tin của tôi')); ?></span></p>
            <h1 class="mb-0 bread"><?php echo e(__('Chỉnh sửa thông tin của tôi')); ?></h1>
          </div>
        </div>
      </div>
    </div>

         <section class="ftco-section">
        <div class="container">
             <div class="row mt-5 pt-3 d-flex">
                <div class="col-md-12 d-flex">
                    <div class="cart-detail cart-total bg-light p-3 p-md-4">
                        <h3 class="billing-heading mb-4"><?php echo e(__('Chỉnh sửa thông tin của tôi')); ?></h3>
                        <?php $__currentLoopData = $nguoi_dung; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ndma): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <form action="<?php echo e(URL::to('capnhat-thongtin/'.$ndma->nd_ma)); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <h5><label for="firstname"><?php echo e(__('Họ và tên')); ?></label><h5>
                            <input style="text-align: left;" type="text" class="form-control" name="capnhat_nd_ten" value="<?php echo e($ndma->nd_ten); ?> " required> 
                        </div>
                        <div class="form-group">
                            <h5><label for=""><?php echo e(__('Email')); ?></label><h5>
                            <input style="text-align: left;" type="" class="form-control" name="capnhat_nd_email" value="<?php echo e($ndma->nd_email); ?>" required="" title="The domain portion of the email address is invalid (the portion after the @)." pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$"> 
                        </div>
                        <div class="form-group">
                            <h5><label for=""><?php echo e(__('SĐT')); ?></label><h5>
                            <input style="text-align: left;" type="text" class="form-control" name="capnhat_nd_dienThoai" value="<?php echo e($ndma->nd_dienThoai); ?>"  required=""  pattern="[0]{1}[0-9]{9}" title="SĐT hợp lệ là số có 10 số và bắt đầu bằng 0"> 
                        </div>
                        <div class="form-group">
                            <h5><label for=""><?php echo e(__('Giới tính')); ?></label><h5>
                        <select name="capnhat_nd_gioiTinh" class="form-control m-bot15">
                             <?php if($ndma->nd_gioiTinh==0): ?>
                                <option selected value="0"><?php echo e(__('Nam')); ?></option>
                                <option value="1"><?php echo e(__('Nữ')); ?></option>
                                <?php else: ?>
                                <option value="0"><?php echo e(__('Nam')); ?></option>
                                <option selected value="1"><?php echo e(__('Nữ')); ?></option>
                                <?php endif; ?>
                               
                            }
                                     
                        </select>
                        </div>
                        <div class="form-group">
                            <h5><label for=""><?php echo e(__('Ngày sinh')); ?></label><h5>
                            <input  style="text-align: left;" type="date" class="form-control" name="capnhat_nd_ngaySinh" value="<?php echo e($ndma->nd_ngaySinh); ?>" required> 
                        </div>
                        <div class="form-group">
                            <h5><label for=""><?php echo e(__('Địa chỉ')); ?></label></h5>
                            <input style="text-align: left;" type="text" class="form-control" name="capnhat_nd_diaChi" value="<?php echo e($ndma->nd_diaChi); ?>" required> 
                        </div>
                        <button type="submit" class="btn btn-theme btn-primary py-3 px-4"><?php echo e(__('Cập nhật')); ?></button>
                        </form>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
              
              </div>
          
      </div>
    </section> <!-- .section -->


    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('shop_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\ShoesShopWebsite\shoesshop\resources\views/pages/customer/chinhsua_thongtin.blade.php ENDPATH**/ ?>
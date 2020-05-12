<?php $__env->startSection('content'); ?>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-10 ftco-animate">
             <div class="col-md-12">
            <div class="container"><h3 class="mb-4 billing-heading" style="text-align: center; font-size: 35px;"><?php echo e(__('Đăng ký tài khoản')); ?></h3> <!-- Ngân (6/3/2020), sửa tiếng việt và thêm khúc if -> endif -->
                <?php if(count($errors)>0): ?>
                    <div class="alert alert-danger">
                        <strong><?php echo e(__('Lỗi')); ?></strong><br>
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                  <!-- start  Ngân (11/4/2020) -->
                 <p style="color: red;"><b><?php
                $message=Session::get('message');
                 if($message){
                   echo $message; 
                  Session::put('message',null);
               }
            ?></b></p>
            <!-- end  Ngân (11/4/2020) -->
                 <form action="<?php echo e(URL::to('postregister')); ?>" method="post" name="formRegister">
                                <?php echo e(csrf_field()); ?> <!-- Ngân (6/3/2020) bỏ onsubmit cũ ở trong thẻ form -->
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

                                
                            <!-- <p>Join us today! It takes only few steps</p> 
                                Ngân (6/3/2020) -> bỏ dòng này -->
            <div class="row">
                <div class="col-md-6">
                     <div class="form-group"> <!-- Ngân (6/3/2020) -> chỗ placeholder sửa thành tiếng việt -->
                                    <input type="text" name="user_name" class="form-control" placeholder="<?php echo e(__('Họ và tên')); ?>" required="">
                                    <i class="ik ik-user"></i>
                                </div>
                                <div class="form-group">
                                    <input type="date" name='user_birth' class="form-control" placeholder="<?php echo e(__('Ngày sinh')); ?>"  required="">
                                    <i class="ik ik-user"></i>
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" name="user_phone" class="form-control" placeholder="<?php echo e(__('SĐT')); ?>" required="">
                                    <i class="ik ik-user"></i>
                                </div>
                                <div class="form-group">
                                    <input type="radio" name="rdGioitinh" value="Male" checked> <?php echo e(__('Nam')); ?>&emsp;&emsp;&emsp;
                                    <input type="radio" name="rdGioitinh" value="Female"> <?php echo e(__('Nữ')); ?><br>
                                </div>
                                 <div class="form-group">
                                    <textarea name="user_address"  class="form-control" rows="3" cols="20" placeholder="<?php echo e(__('Địa chỉ')); ?>" required=""></textarea>                
                                </div>
                </div>
                <div class="col-md-6">
                     <!-- <div style="background-color: red;">Cột thứ 2 tỉ lệ 2</div> -->

                                <div class="form-group">
                                    <input type="text" name="user_email" class="form-control" placeholder="<?php echo e(__('Email')); ?>" required="">
                                    <i class="ik ik-user"></i>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="user_password" class="form-control" placeholder="<?php echo e(__('Mật khẩu')); ?>" required="">
                                    <i class="ik ik-lock"></i>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="user_confirm_pass" class="form-control" placeholder="<?php echo e(__('Nhập lại mật khẩu')); ?>" required="">
                                    <i class="ik ik-eye-off"></i>
                                </div>
                               
                                
                                 
                                <div class="sign-btn text-center">
                                    <button type="submit" class="btn btn-theme btn-primary py-3 px-4"><?php echo e(__('Tạo tài khoản')); ?></button> <!-- Ngân(6/3/2020) đổi tiếng việt tên nút-->
                                </div>
                            </form> <br> <!-- Ngân(6/3/2020) thêm <br>-->
                            <div class="register">
                                <p style="text-align: center;"><?php echo e(__('Bạn đã có tài khoản?')); ?><a href="<?php echo e(URL::to('/userLogin')); ?>" style="color: red;"> <?php echo e(__('Đăng nhập')); ?></a></p> <!-- Ngân(6/3/2020) đổi tiếng việt -->
                            </div>
                        </div>


          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('shop_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\ShoesShopWebsite\shoesshop\resources\views/pages/customer/user_register.blade.php ENDPATH**/ ?>
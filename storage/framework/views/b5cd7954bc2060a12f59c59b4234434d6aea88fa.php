<?php $__env->startSection('content'); ?>
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-10 ftco-animate">
             <div class="col-md-6">
            
            <h2 style="color: black; text-align: center;"><b><?php echo e(__('Đăng nhập')); ?></b></h1>
            <h5 style="color: black; text-align: center;"><b><?php echo e(__('Khách hàng')); ?></b></h3>
            <p style="color: red;"><b><?php
                $message=Session::get('message');
                 if($message){
                   echo $message; 
                  Session::put('message',null);
               }
            ?></b></p> 


            <p style="color: red;"><b><?php
                $message1=Session::get('message1');
                 if($message1){
                  echo $message1;
                  Session::put('message1',null);
               }
            ?></b></p>
            <!-- Ngân(6/3/2020) thêm dòng thông báo sau đây -->
            <p style="color: red;"><b><?php 
                $message2=Session::get('message2');
                 if($message2){
                  echo $message2;
                  Session::put('message2',null);
               }
            ?></b></p>
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
           
                  <form action="<?php echo e(URL::to('user_home')); ?>" method="post">
                    <?php echo e(csrf_field()); ?>

                     
                <!--/<div class="row align-items-end">  --> 
            
                    <div class="form-group">
                      <input type="text" class="form-control" name="user_email" placeholder="Email" required=""> 
                    </div>
                    <div class="form-group">
                      <input type="password" name="user_password" class="form-control" placeholder="<?php echo e(__('Mật khẩu')); ?>" required=""><br>
                    </div>

                    <div class="sign-btn text-center">
                        <button type="submit" class="btn btn-theme btn-primary py-3 px-4"><?php echo e(__('Đăng nhập')); ?></button>
                   </div>
                
                  
                </form>
                <br>
                 <div class="register">
                     <p style="text-align: center;"><?php echo e(__('Bạn chưa có tài khoản?')); ?> <a href="<?php echo e(URL::to('/register')); ?>" style="color: red;"><?php echo e(__('Tạo tài khoản')); ?></a></p>
                  </div>
           </div>     


          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('shop_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\shoesshop7\ShoesShop\resources\views/pages/customer/user_login.blade.php ENDPATH**/ ?>
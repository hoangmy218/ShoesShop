<?php $__env->startSection('content'); ?>

<div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-credit-card bg-blue"></i>
                                        <div class="d-inline"> 
                                             <?php $__currentLoopData = $ten; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $nd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <h5>Lịch sử mua hàng của người dùng <?php echo e($nd->nd_ten); ?></h5>
                                            
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="<?php echo e(URL::to('/dashboard')); ?>"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item active">
                                               
                                                <a href="<?php echo e(URL::to('/history-customer')); ?>">Quản lý lịch sử</a>
                                                
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">Lịch sử đơn</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
								<div class="card">
                                    <div class="card-header d-block">
                                        <h3>Danh sách đơn hàng của người dùng</h3>
                                        <?php
                                        $message =Session::get('message');
                                        if($message){
                                          echo '<span class="text-alert">'.$message.'</span>';
                                          Session::put('message', null);
                                        }
                                      ?>
                                    </div>
                                    <div class="card-body p-0 table-border-style">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>STT</th>
                                                        <th>Mã đơn hàng</th>
                                                        <th>Người nhận</th>
                                                        <th>Ngày đặt</th>
                                                        <th>Tổng tiền</th>
                                                        <th>Trạng Thái</th>
                                                        <th>Xem chi tiết</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php {{$i=1;}} ?>
                                                	<?php $__currentLoopData = $don_hang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $don_hang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                    <tr>
                                                        <th scope="row"><?php echo e($i); ?></th>
                                                        <td><?php echo e($don_hang->dh_ma); ?></td>
                                                        <td><?php echo e($don_hang->dh_tenNhan); ?></td>
                                                        <td><?php echo e(date('d-m-Y',strtotime($don_hang->dh_ngayDat))); ?></td>
                                                        <td><?php echo e($don_hang->dh_tongTien); ?></td>
                                                        <td><?php echo e($don_hang->dh_trangThai); ?></td>
                                                        
                                                        
                                                        <td><div class="">                                                  
                                                           <a href="<?php echo e(URL::to('/view-order/'.$don_hang->dh_ma)); ?>"><i class="ik ik-eye"></i></a>
                                                        </div></td>
                                                    </tr>
                                                    <?php {{$i++;}} ?>
                                                   	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

        $('#nguoidung').parent().addClass('active open');
         $("#lichsumua").addClass("active");
     });
</script>
            


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\ShoesShopWebsite\shoesshop\resources\views/admin/view_history.blade.php ENDPATH**/ ?>
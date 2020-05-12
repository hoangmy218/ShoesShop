<?php $__env->startSection('content'); ?>

                       


<div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-credit-card bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Quản lý khuyến mãi</h5>
                                            
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
                                                <a href="#">Quản lý khuyến mãi</a>
                                            </li>
                                            
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
								<div class="card">
                                    <div class="card-header d-block">
                                        <h3>Danh sách khuyến mãi</h3>
                                        <?php
                                            $message=Session::get('message');
                                            if($message){
                                                echo $message;
                                                Session::put('message',null);
                                            }
                                        ?> 
                                    </div>
                                    <div class="card-body p-0 table-border-style">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                         <th>STT</th>
                                                        <th>Mã khuyến mãi</th>
                                                        <th>Chủ đề</th>
                                                        <th>Đoạn mã code</th>
                                                        <!-- start Ngân (7/4/2020) -->
                                                        <th>Ngày bắt đầu</th>
                                                        <th>Ngày kết thúc</th>
                                                        <th>Số lần giảm</th>
                                                        <!-- end Ngân (7/4/2020) -->
                                                        <th>Giảm giá (%)</th>
                                                        <th>Thao tác</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php {{$i=1;}} ?>
                                                    <?php $__currentLoopData = $list_coupon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                    <tr>
                                                        <th scope="row"><?php echo e($i); ?></th>
                                                        <td><?php echo e($cate->km_ma); ?></td>
                                                        <td><?php echo e($cate->km_chuDe); ?></td>
                                                        <td><?php echo e($cate->km_doanMa); ?></td>
                                                        <!-- start Ngân (7/4/2020) -->
                                                        <td><?php echo e(date('d-m-Y',strtotime($cate->km_ngayBD))); ?></td>
                                                        <td><?php echo e(date('d-m-Y',strtotime($cate->km_ngayKT))); ?></td>
                                                        <td><?php echo e($cate->km_soLan); ?></td>
                                                        <!-- end Ngân (7/4/2020) -->
                                                        <td><?php echo e($cate->km_giamGia); ?></td>
                                                        <td><div class="table-actions">   
                                                            <a href="<?php echo e(URL::to('/edit-coupon/'.$cate->km_ma)); ?>"><i class="ik ik-edit-2"></i></a>
                                                            <a onclick="return confirm('Bạn chắc chắn muốn xóa?')" href="<?php echo e(URL::to('/delete-coupon/'.$cate->km_ma)); ?>"><i class="ik ik-trash-2"></i></a>
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
                    </div>
                </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

        $('#khuyenmai').parent().addClass('active open');
         $("#danhsachkhuyenmai").addClass("active");
     });
</script>

            


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\ShoesShopWebsite\shoesshop\resources\views/admin/manage_coupon.blade.php ENDPATH**/ ?>
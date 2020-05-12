<?php $__env->startSection('content'); ?>

                       


<div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-edit bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Kho</h5>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="<?php echo e(URL::to('/dashboard')); ?>"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#">Quản lý kho</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Phiếu nhập</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header d-block">
                                        <h3>Phiếu nhập mới #<?php echo e($ma_pn); ?> </h3>
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
                                            <form class="form-inline repeater" action="<?php echo e(URL::to('/save-price-receipt')); ?>" method="POST" enctype="multipart/form-data" >
                                                        <?php echo e(csrf_field()); ?>

                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>STT</th>
                                                        <th>Mã sản phẩm</th>  
                                                        <th>Tên sản phẩm</th>
                                                        <th>Đơn giá nhập</th>
                                                        <th>Đơn giá bán</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    <?php $i=1; ?>
                                                    <?php $__currentLoopData = $list_pro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <th scope="row"><?php echo e($i); ?></th>
                                                        <td><?php echo e($pro->sp_ma); ?><input type="hidden" class="form-control" name="sp_ma[]"   value="<?php echo e($pro->sp_ma); ?>"></td>
                                                         
                                                        <td><?php echo e($pro->sp_ten); ?></td>
                                                       
                                                        <td> <input type="number" class="form-control" name="giaNhap[]"  id="giaNhap<?php echo $i; ?>" min="100000" step="1000" max="5000000" value="<?php echo e($pro->sp_donGiaNhap); ?>"></td>
                                                        <td> <input type="number" class="form-control" name="giaBan[]" id="giaBan<?php echo $i; ?>" min="100000" step="1000" max="5000000" value="<?php echo e($pro->sp_donGiaBan); ?>"></td>
                                                       
                                                    </tr>
                                                    <?php $i++; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                             <button type="submit" name="add_cate" class="btn btn-primary mr-2">Thêm</button>
                                            <button class="btn btn-light">Hủy</button>
                                        </form>
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

        $('#kho').parent().addClass('active open');
         $("#nhaphang").addClass("active");


        $('#cancel').click(function(e){
            e.preventDefault();
            window.history.back();
        });
    });

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\ShoesShopWebsite\shoesshop\resources\views/admin/add_price_receipt.blade.php ENDPATH**/ ?>
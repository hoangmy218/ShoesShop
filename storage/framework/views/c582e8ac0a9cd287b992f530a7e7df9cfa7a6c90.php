<?php $__env->startSection('content'); ?>

<div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-file-text bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Màu Sắc</h5>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="<?php echo e(URL::to('/dashboard')); ?>"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="<?php echo e(URL::to('/manage-color')); ?>">Quản lý màu sắc</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">Cập nhật màu sắc</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                                <div class="card">
                                    <div class="card-header"><h3>Cập nhật màu sắc sản phẩm</h3></div>
                                    <div class="card-body">
                                        <?php $__currentLoopData = $edit_color; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $edit_value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="position-center">
                                            <form role="form" action="<?php echo e(URL::to('/update-color/'.$edit_value->ms_ma)); ?>" method="post">
                                                <?php echo e(csrf_field()); ?>

                                            <div class="form-group">
                                                <label for="exampleInputName1">Mã màu sắc</label>
                                                <input type="text" class="form-control" id="exampleInputName1" name="color_id" value="<?php echo e($edit_value->ms_ma); ?>" disabled="disabled"> 
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName1">Tên màu sắc</label>
                                                <input type="text" value="<?php echo e($edit_value->ms_ten); ?>" name="color_name" class="form-control" id="exampleInputName1" placeholder="Name" >
                                            </div>
                                            
                                           
                                            <button type="submit" name="add_color" class="btn btn-primary mr-2">Cập nhật</button>
                                             <a href="<?php echo e(url()->previous()); ?>" class="btn btn-default">Hủy</a>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                    </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

        $('#mausac').parent().addClass('active open');
         $("#danhsachmausac").addClass("active");
     });
</script>               
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shoesshop1\resources\views/admin/edit_color.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>

<div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-file-text bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Danh mục</h5>
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
                                                <a href="<?php echo e(URL::to('/manage-category')); ?>">Quản lý danh mục</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">Cập nhật danh mục</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                                <div class="card">
                                    <div class="card-header"><h3>Chỉnh sửa danh mục</h3></div> <!-- Ngân (6/4/2020) Chỉnh thành Chỉnh sửa danh mục -->
                                     <?php $__currentLoopData = $edit_cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $edit_value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="card-body">

                                        <form class="forms-sample" action="<?php echo e(URL::to('/update-category/'.$edit_value->dm_ma)); ?>" method="POST">
                                             <?php echo e(csrf_field()); ?>

                                            <div class="form-group">
                                                <label for="exampleInputName1">Mã danh mục</label>
                                                <input type="text" class="form-control" id="exampleInputName1" name="cate_id" value="<?php echo e($edit_value->dm_ma); ?>" disabled="disabled"> <!-- Ngân (6/4/2020) thêm disabled="disabled" -->
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName1">Tên danh mục</label>
                                                <input type="text" value="<?php echo e($edit_value->dm_ten); ?>" class="form-control" id="exampleInputName1" name="cate_name" >
                                            </div>   
                                            
                                            <div class="form-group pull-right">
                                                <button type="submit" name="update_cate" class="btn btn-primary mr-2">Cập nhật</button>
                                                <a href="<?php echo e(url()->previous()); ?>" class="btn btn-default">Hủy</a>
                                              
                                            </div>
                                            
                                        </form>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

        $('#danhmuc').parent().addClass('active open');
         $("#danhsachdanhmuc").addClass("active");
     });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\ShoesShopWebsite\shoesshop\resources\views/admin/edit_category.blade.php ENDPATH**/ ?>
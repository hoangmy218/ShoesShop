<?php $__env->startSection('content'); ?>

<div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-file-text bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Chỉnh sửa thông tin hình thức vận chuyển</h5>
                                           
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
                                                <a href="<?php echo e(URL::to('/manage-transport')); ?>">Quản lý hình thức vận chuyển</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">Chỉnh sửa thông tin hình thức vận chuyển</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>


                                <div class="card">
                                    <div class="card-header"><h3>Chỉnh sửa thông hình thức vận chuyển</h3></div>
                                    <div class="card-body">
                                        <?php $__currentLoopData = $list_transport; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $edit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <form class="forms-sample" action="<?php echo e(URL::to('/update-transport/'.$edit->htvc_ma)); ?>" method="POST" enctype="multipart/form-data" >
                                             <?php echo e(csrf_field()); ?>

                                            <div class="form-group">
                                                <label for="exampleInputName1">Tên hình thức vận chuyển</label>
                                                <input type="text" name="transport_name" class="form-control" id="exampleInputName1" value="<?php echo e($edit->htvc_ten); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName1">Chi phí</label>
                                                <input type="text" name="transport_price" class="form-control" id="exampleInputName1" value="<?php echo e($edit->htvc_phi); ?>">
                                            </div>
                                            
                                            <button type="submit" name="add_pro" class="btn btn-primary mr-2">Cập nhật</button>
                                            <button id="cancel" class="btn btn-light">Hủy</button>
                                        </form>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

        $('#vanchuyen').parent().addClass('active open');
         $("#danhsachvanchuyen").addClass("active");
     });
$('#cancel').click(function(e){
    e.preventDefault();
     window.location.replace("<?php echo url('/manage-transport');?>");
            // e.preventDefault();
            // window.history.back();
        });
</script>
                
<?php $__env->stopSection(); ?>


<?php $__env->startSection('script_components'); ?>

        <script src="<?php echo e(asset('public/backend/dist/js/theme.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/backend/js/form-components.js')); ?>"></script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\shoesshop7\ShoesShop\resources\views/admin/edit_transport.blade.php ENDPATH**/ ?>
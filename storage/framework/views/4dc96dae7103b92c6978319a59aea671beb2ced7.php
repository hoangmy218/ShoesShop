<?php $__env->startSection('head_repeat'); ?>

<link rel="stylesheet" href="<?php echo e(URL::to('public/backend/plugins/select2/dist/css/select2.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(URL::to('public/backend/plugins/summernote/dist/summernote-bs4.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(URL::to('public/backend/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(URL::to('public/backend/plugins/mohithg-switchery/dist/switchery.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

 <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-7">
                                    <div class="page-header-title">
                                        <i class="ik ik-edit bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Kho</h5>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="<?php echo e(URL::to('/dashboard')); ?>"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#">Quản lý kho</a></li>
                                             <li class="breadcrumb-item">
                                                <a href="<?php echo e(URL::to('/manage-goods-receipt')); ?>">Quản lý phiếu nhập</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">Chỉnh sửa phiếu nhập</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card hidden">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-12 col-xl-4 mb-30">
                                                
                                                <input type="checkbox hidden" class="js-single" checked />
                                            </div>
                                            <div class="col-sm-12 col-xl-4 mb-30">
                                                
                                                <input type="checkbox" class="js-switch" checked />
                                                <input type="checkbox" class="js-switch" checked />
                                                <input type="checkbox" class="js-switch" checked />
                                            </div>
                                            <div class="col-sm-12 col-xl-4 mb-30">
                                               
                                                <input type="checkbox" class="js-dynamic-state" checked />
                                                <button class="btn btn-primary js-dynamic-enable">Enable</button>
                                                <button class="btn btn-inverse js-dynamic-disable">Disable</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <input type="checkbox" class="js-default" checked />
                                                <input type="checkbox" class="js-primary" checked />
                                                <input type="checkbox" class="js-success" checked />
                                                <input type="checkbox" class="js-info" checked />
                                                <input type="checkbox" class="js-warning" checked />
                                                <input type="checkbox" class="js-danger" checked />
                                                <input type="checkbox" class="js-inverse" checked />
                                            </div>
                                            <div class="col-sm-4">
                                                
                                                <input type="checkbox" class="js-large" checked />
                                                <input type="checkbox" class="js-medium" checked />
                                                <input type="checkbox" class="js-small" checked />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="row">
                           
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header"><h3>Nhập hàng</h3></div>
                                    <div class="card-body">                                       
                                        <form class="form-inline repeater" action="<?php echo e(URL::to('/save-goods-receipt')); ?>" method="POST" enctype="multipart/form-data">
                                            <?php echo e(csrf_field()); ?>

                                            <div class="row col-md-12">
                                                <div class="form-group" style="padding-bottom: 10px;">
                                                    <label for="date">Ngày nhập</label>
                                                    <input type="text" name="ngayNhap" class="form-control datetimepicker-input" id="datepicker" data-toggle="datetimepicker" value="<?php echo e(date('d-m-Y',strtotime($receipt->pn_ngayNhap))); ?>" data-target='#datepicker'>
                                                </div>                                                        
                                            </div>
                                            <?php 
                                                $count=1;
                                            ?>
                                                  
                                            <?php $__currentLoopData = $receipt_detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $receipt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="row">
                                            <div data-repeater-list="group-a">
                                                <div data-repeater-item="item-a" class="d-flex mb-2">
                                                    <label for="exampleInputName1">Tên sản phẩm </label>
                                                    <div class="form-group  mb-2 mr-sm-2 mb-sm-0">
                                                       <select class="form-control" name="masp" >
                                                            <?php $__currentLoopData = $list_pro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($pro->sp_ma == $receipt->sp_ma): ?>
                                                                    <option value="<?php echo e($pro->sp_ma); ?>" selected="true"><?php echo e($pro->sp_ten); ?></option>
                                                                <?php else: ?>
                                                                    <option value="<?php echo e($pro->sp_ma); ?>"><?php echo e($pro->sp_ten); ?></option>
                                                                <?php endif; ?>                                             
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                    
                                                    <label for="exampleInputName1">Kích cỡ </label>
                                                    <div class="form-group mb-2 mr-sm-2 mb-sm-0">
                                                        <input type="number" class="form-control" name="kichCo" min="1" step="0.5" max="40" value="<?php echo e($receipt->ctsp_kichCo); ?>">
                                                    </div>
                                                    <label for="exampleInputName1">Số lượng nhập </label>
                                                    <div class="form-group mb-2 mr-sm-2 mb-sm-0">
                                                        <input type="number" class="form-control" name="soLuongNhap" min="1" step="1" max="40" value="<?php echo e($receipt->ctsp_soLuongNhap); ?>">
                                                    </div>
                                                   
                                                    <button data-repeater-delete type="button" class="btn btn-danger btn-icon ml-2" ><i class="ik ik-trash-2"></i></button>
                                                </div>
                                            </div>
                                            <?php 
                                                $count++;
                                              ;?>
                                            <button data-repeater-create type="button" class="btn btn-success btn-icon ml-2 mb-2"><i class="ik ik-plus"></i></button>
                                            
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <div class="row col-md-12"> 
                                            <button type="submit" name="add_cate" class="btn btn-primary mr-2">Thêm</button>
                                            <button class="btn btn-light">Hủy</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script_repeat'); ?>
<script src="<?php echo e(URL::to('public/backend/plugins/select2/dist/js/select2.min.js')); ?>"></script>
        <script src="<?php echo e(URL::to('public/backend/plugins/summernote/dist/summernote-bs4.min.js')); ?>"></script>
        <script src="<?php echo e(URL::to('public/backend/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')); ?>"></script>
        <script src="<?php echo e(URL::to('public/backend/plugins/jquery.repeater/jquery.repeater.min.js')); ?>"></script>
        <script src="<?php echo e(URL::to('public/backend/plugins/mohithg-switchery/dist/switchery.min.js')); ?>"></script>
        <script src="<?php echo e(URL::to('public/backend/dist/js/theme.min.js')); ?>"></script>
        <script src="<?php echo e(URL::to('public/backend/js/form-advanced.js')); ?>"></script>
                <script src="<?php echo e(URL::to('public/backend/plugins/datedropper/datedropper.min.js')); ?>"></script>
                        <script src="<?php echo e(URL::to('public/backend/js/form-picker.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\ShoesShopWebsite\shoesshop\resources\views/admin/edit_receipt.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>

<div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-file-text bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Khuyến mãi</h5>
                                           
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
                                                <a href="<?php echo e(URL::to('/manage-coupon')); ?>">Quản lý khuyến mãi</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">Thêm khuyến mãi</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                                <div class="card">
                                    <div class="card-header"><h3>Thêm khuyến mãi</h3></div>
                                    <div class="card-body">
                                        <form class="forms-sample" action="<?php echo e(URL::to('/save-coupon')); ?>" method="POST">
                                             <?php echo e(csrf_field()); ?>

                                            <div class="form-group">
                                                <label for="exampleInputName1">Mã khuyến mãi</label>
                                                <input type="text" class="form-control" id="exampleInputName1" name="coupon_code" placeholder="Vd:lmnt1998">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName1">Tên khuyến mãi</label>
                                                <input type="text" class="form-control" id="exampleInputName1" name="coupon_topic" placeholder="Vd: Black Friday">
                                            </div> 
                                            <!-- start Ngân (7/4/2020) -->
                                            <div class="form-group">
                                                <label for="exampleInputName1">Ngày bắt đầu</label>
                                                <input type="date" name="coupon_dateB" /> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                <label for="exampleInputName1">Ngày kết thúc</label>
                                                <input type="date" name="coupon_dateE" />
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName1">Số lần giảm giá</label>
                                                <input name="coupon_discount_SL" type="number" value="1">
                                                &nbsp&nbsp&nbsp
                                                <label for="exampleInputName1">Giảm giá mỗi lần</label>
                                                <input name="coupon_discount" type="number" value="1">
                                            </div> 
                                            <button type="submit" name="add_coupon" class="btn btn-primary mr-2">Thêm</button>
                                            <button onclick="history.go(0)" class="btn btn-light">Hủy</button>
                                            <!-- end Ngân (7/4/2020) -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

        $('#khuyenmai').parent().addClass('active open');
         $("#themkhuyenmai").addClass("active");
     });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\ShoesShopWebsite\shoesshop\resources\views/admin/add_coupon.blade.php ENDPATH**/ ?>
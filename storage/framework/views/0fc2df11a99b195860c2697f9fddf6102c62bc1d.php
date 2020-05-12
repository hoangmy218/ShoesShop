<?php $__env->startSection('content'); ?>

                       


<div class="main-content">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-credit-card bg-blue"></i>
                        <div class="d-inline">
                            <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <h5> Mã <?php echo e($sp->sp_ma); ?> : <?php echo e($sp->sp_ten); ?></h5>
                                                    
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
                                <a href="<?php echo e(URL::to('/manage-product')); ?>">Quản lý sản phẩm</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Chi tiết sản phẩm</li>
                        </ol>
                    </nav>
                 </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-block">
                        <h3>Hình ảnh của sản phẩm</h3>
                    </div>
                    <div class="card-body p-0 table-border-style">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Mã ảnh</th>
                                        <th>Tên ảnh</th>
                                        <th>Nội dung ảnh</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php 
                                        $hinhanh= DB::table('hinhanh')->where('sp_ma',$sp->sp_ma)->get();
                                        ?>
                                    <?php $i=1; ?>
                                    <?php $__currentLoopData = $hinhanh; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ha): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th scope="row"><?php echo e($i); ?></th>
                                        <th scope="row"><?php echo e($ha->ha_ma); ?></th>
                                        <th scope="row"><?php echo e($ha->ha_ten); ?></th>
                                        <td><img src="<?php echo e(URL::to('public/upload/product/'.$ha->ha_ten)); ?>" height="100" width="100"></td> 
                                    </tr>
                                    <?php $i++; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br>
                </div>                 
        </div>
    </div>

        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-header d-block">
                        <h3>Thông tin chi tiết sản phẩm</h3>
                    </div>
                    <div class="card-body p-0 table-border-style">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Kích thước(Size)</th>
                                        <th>Số lượng nhập</th>
                                        <th>Số lượng tồn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; ?>
                                    <?php $__currentLoopData = $kichco; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th scope="row"><?php echo e($i); ?></th>
                                        <th scope="row"><?php echo e($size->ctsp_kichCo); ?></th>
                                        
                                        <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php 
                                            $tslnhapsize= DB::table('chitietsanpham')->select(DB::raw("sum(ctsp_soLuongNhap) as tslnhap"))->where('ctsp_kichCo',$size->ctsp_kichCo)->where('sp_ma',$sp->sp_ma)->get();
                                        ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                       <?php $__currentLoopData = $tslnhapsize; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$tn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <th scope="row"><?php echo e($tn->tslnhap); ?></th>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        

                                        <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php 
                                            $tsltonsize= DB::table('chitietsanpham')->select(DB::raw("sum(ctsp_soLuongTon) as tslton"))->where('ctsp_kichCo',$size->ctsp_kichCo)->where('sp_ma',$sp->sp_ma)->get();
                                        ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                        <?php $__currentLoopData = $tsltonsize; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$tnn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <th scope="row"><?php echo e($tnn->tslton); ?></th>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tr>
                                    <?php $i++; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br>
                </div>                 
            </div>
            <div class="col-4">
                 <div class="row">
                            <div class="col-12">
                                <p class="lead">Tổng số lượng nhập:
                                    <?php $__currentLoopData = $tongslnhap; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $slnhap): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <b><?php echo e($slnhap->slnhap); ?></b>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                </p> 
                                <p class="lead">Tổng số lượng tồn:
                                     <?php $__currentLoopData = $tongslton; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $slton): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <b><?php echo e($slton->slton); ?></b>   
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                </p>
                                <p class="lead">Ghi chú:
                                     <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <b><?php echo e($sp->sp_ghiChu); ?></b>   
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                </p>
                                        
                            </div>
                </div>               
            </div>
        </div>
        
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

        $('#sanpham').parent().addClass('active open');
         $("#danhsachsanpham").addClass("active");
     });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\ShoesShopWebsite\shoesshop\resources\views/admin/chitiet_sanpham.blade.php ENDPATH**/ ?>
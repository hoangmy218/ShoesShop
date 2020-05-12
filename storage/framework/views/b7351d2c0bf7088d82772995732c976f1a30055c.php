<?php $__env->startSection('content'); ?>

                       


<div class="main-content">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-credit-card bg-blue"></i>
                        <div class="d-inline">
                            <h5>Quản lý quảng cáo</h5>
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
                                <a href="<?php echo e(URL::to('/manage-advertisement')); ?>">Quản lý quảng cáo</a>
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
                        <h3>Danh sách quảng cáo</h3>
                            <?php
                                $message =Session::get('message');
                                if($message){
                                    echo '<span style="color:green" class="text-alert"><b>'.$message.'</b></span>';
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
                                    <th>Mã quảng cáo</th>
                                    <th>Hình ảnh</th>
                                    <th>Chủ đề quảng cáo</th>
                                    <th>Đoạn giới thiệu</th><!-- Ngân (14/4/2020) -->
                                    <th>Trạng thái</th> <!-- Ngân (14/4/2020) -->
                                    <th>Thao tác</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; ?>
                                    <?php $__currentLoopData = $list_ad; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <th scope="row"><?php echo e($i); ?></th>
                                            <td><?php echo e($ad->qc_ma); ?></td>
     
                                            <td><img src="<?php echo e(URL::to('public/upload/advertisement/'.$ad->qc_hinhAnh)); ?>" height="100" width="200"></td> 

                                            <td><?php echo e($ad->qc_chuDe); ?></td>
                                             <!-- Start Ngân (14/4/2020) -->
                                            <td><?php echo e($ad->qc_quangCao); ?></td>
                                           
                                            <td><span class="text-ellipsis">
                                                          <?php
                                                          if($ad->qc_trangThai==0){
                                                            ?>
                                                            <a href ="<?php echo e(URL::to('/unactive-advertisement/'.$ad->qc_ma)); ?>"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                                                            <?php
                                                          }else{
                                                            ?>
                                                            <a href="<?php echo e(URL::to('/active-advertisement/'.$ad->qc_ma)); ?>"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
                                                          <?php
                                                          }

                                                          ?>
                                                        </span>
                                            </td>
                                            <!-- End Ngân (14/4/2020) -->
                                            <td><div class="table-actions">   
                                                    <a href="<?php echo e(URL::to('/edit-advertisement/'. $ad->qc_ma)); ?>"><i class="ik ik-edit-2"></i></a>
                                                    <a onclick="return confirm('Bạn chắc chắn muốn xóa?')" href="<?php echo e(URL::to('/delete-advertisement/'. $ad->qc_ma)); ?>"><i class="ik ik-trash-2"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
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

        $( '#quangcao').parent().addClass('active open');
         $("#danhsachquangcao").addClass("active");
});
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\ShoesShopWebsite\shoesshop\resources\views/admin/manage_Advertisement.blade.php ENDPATH**/ ?>
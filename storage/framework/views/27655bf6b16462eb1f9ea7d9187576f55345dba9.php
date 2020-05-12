<?php $__env->startSection('content'); ?>

                       


<div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-credit-card bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Quản lý hình thức vận chuyển</h5>
                                            
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
                                                <a href="#">Quản lý hình thức vận chuyển</a>
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
                                        <h3>Danh sách hình thức vận chuyển</h3>
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
                                                        <th>Mã vận chuyển</th>
                                                        <th>Tên vận chuyển</th>
                                                        <th>Chi phí vận chuyển</th>
                                                        <th>Thao tác</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php {{$i=1;}} ?>
                                                    <?php $__currentLoopData = $list_transport; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $transport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                    <tr>
                                                        <th scope="row"><?php echo e($i); ?></th>
                                                        <td><?php echo e($transport->vc_ma); ?></td>
                                                        <td><?php echo e($transport->vc_ten); ?></td>
                                                        <td><?php echo e(number_format($transport->vc_phi).' VND'); ?></td>
                                                        <td><div class="table-actions">                                                  
                                                            <a href="<?php echo e(URL::to('/edit-transport/'.$transport->vc_ma)); ?>"><i class="ik ik-edit-2"></i></a>
                                                            <a onclick="return confirm('Bạn chắc chắn muốn xóa hình thức vận chuyển này?')"  href="<?php echo e(URL::to('/delete-transport/'.$transport->vc_ma)); ?>"><i class="ik ik-trash-2"></i></a>
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

        $('#vanchuyen').parent().addClass('active open');
         $("#danhsachvanchuyen").addClass("active");
     });
</script>
            


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\ShoesShopWebsite\shoesshop\resources\views/admin/manage_transport.blade.php ENDPATH**/ ?>
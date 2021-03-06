<?php $__env->startSection('content'); ?>

                       


<div class="main-content">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-credit-card bg-blue"></i>
                        <div class="d-inline">
                            <h5>Quản lý sản phẩm</h5>
                                            
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
                                <a href="#">Quản lý sản phẩm</a>
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
                        <h3>Danh sách sản phẩm</h3>
                            <?php
                                $message =Session::get('message');
                                if($message){
                                    echo '<span style="color:red" class="text-alert">'.$message.'</span>';
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
                                    <th>Mã sản phẩm</th>
                                    <th>Hình ảnh</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Thương hiệu</th>
                                    <th>Danh mục</th>
                                    <th>Đơn giá bán</th>
                                    <th>Đơn giá nhập</th>
                                    <th>Thao tác</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; ?>
                                    <?php $__currentLoopData = $list_pro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <th scope="row"><?php echo e($i); ?></th>
                                            <td><?php echo e($pro->sp_ma); ?></td>
                                            
                                            <?php 
                                                $hinhanh= DB::table('hinhanh')->where('sp_ma',$pro->sp_ma)->limit(1)->get();

                                            ?>
                                           
                                            <?php $__currentLoopData = $hinhanh; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                           
                                            <td><img src="<?php echo e(URL::to('public/upload/product/'.$image->ha_ten)); ?>" height="100" width="100"></td> 
                                            
                                           
                                            
                                            

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <td><?php echo e($pro->sp_ten); ?></td>
                                            <td><?php echo e($pro->th_ten); ?></td>
                                            <td><?php echo e($pro->dm_ten); ?></td>
                                            <td><?php echo e($pro->sp_donGiaBan); ?></td>
                                            <td><?php echo e($pro->sp_donGiaNhap); ?></td>
                                            <td>
                                                <a href="<?php echo e(URL::to('/chitiet-sanpham/'.$pro->sp_ma)); ?>"><i class="ik ik-eye"></i></a>
                                                <a href="<?php echo e(URL::to('/chinhsua-sanpham/'.$pro->sp_ma)); ?>"><i class="ik ik-edit-2"></i></a>
                                                
                                                <a id="xoa" onclick="return confirm('Bạn chắc chắn muốn xóa sản phẩm này?')" href="<?php echo e(URL::to('/xoa-sanpham/'.$pro->sp_ma)); ?>"><i class="ik ik-trash-2"></i></a>

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

        $('#sanpham').parent().addClass('active open');
         $("#danhsachsanpham").addClass("active");
     });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shoesshop\resources\views/admin/manage_product.blade.php ENDPATH**/ ?>
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
        <?php
                            $message = Session::get('fail_message');
                            if ($message){
                                echo '<span class="alert alert-danger">'.$message."</span>";
                                
                                Session::put('fail_message',null);
                            }
                            $message = Session::get('success_message');
                            if ($message){
                                echo '<span class="alert alert-success">'.$message."</span>";
                                
                                Session::put('success_message',null);
                            }
                        ?>
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
                                    <th>Khuyến mãi</th>
                                    <th>Trạng thái</th>
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
                                            <?php 
                                                $khuyenmai= DB::table('khuyenmai')->where('km_ma',$pro->km_ma)->limit(1)->get();

                                            ?>
                                           
                                            <?php $__currentLoopData = $khuyenmai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$km): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                           
                                            <td><?php echo e($km->km_chuDe); ?></td> 
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            <td><span class="text-ellipsis">
                                                          <?php
                                                          if($pro->sp_trangThai==0){
                                                            ?>
                                                            <span class="text-green ik ik-eye cancel" id="<?php echo e($pro->sp_ma); ?>"></span>
                                                            <?php
                                                          }else{
                                                            ?>
                                                            <span class="text-red ik ik-eye-off cancel1" id="<?php echo e($pro->sp_ma); ?>"></span>
                                                          <?php
                                                          }

                                                          ?>
                                                        </span>
                                                    </td>
                                            <td>

                                                <a href="<?php echo e(URL::to('/chitiet-sanpham/'.$pro->sp_ma)); ?>"><i class="ik ik-eye"></i></a>
                                                <a href="<?php echo e(URL::to('/chinhsua-sanpham/'.$pro->sp_ma)); ?>"><i class="ik ik-edit-2"></i></a>
                                                
                                                <a><i id="<?php echo e($pro->sp_ma); ?>" class="ik ik-trash-2 cancel2"></i></a>




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
<div class="modal fade" id="cancelModal" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            
                            <div class="modal-header">
                                <h5 class="modal-title" id="demoModalLabel">Thay đổi trạng thai của sản phẩm</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                            Bạn có chắc chắn muốn ẩn sản phẩm này?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Hủy</button>
                                <button type="button" id="ok_ansp_btn" class="btn btn-success">Xác nhận</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="cancelModal1" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            
                            <div class="modal-header">
                                <h5 class="modal-title" id="demoModalLabel">Thay đổi trạng thái của sản phẩm</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                            Bạn có chắc chắn muốn hiện sản phẩm này?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Hủy</button>
                                <button type="button" id="ok_hiensp_btn" class="btn btn-success">Xác nhận</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="cancelModal2" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            
                            <div class="modal-header">
                                <h5 class="modal-title" id="demoModalLabel">Xóa sản phẩm</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                            Bạn có chắc chắn muốn xóa sản phẩm này?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Hủy</button>
                                <button type="button" id="ok_xoasp_btn" class="btn btn-success">Xác nhận</button>
                            </div>
                        </div>
                    </div>
                </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

        $('#sanpham').parent().addClass('active open');
        $("#danhsachsanpham").addClass("active");
         setTimeout(function(){
           $("span.alert").remove();
        }, 5000 );
         $(document).on('click','.cancel', function(){
            sp_ma = $(this).attr('id');
            console.log(sp_ma);
            $('#cancelModal').modal('show');
            
        });
        $(document).on('click','.cancel1', function(){
            sp_ma = $(this).attr('id');
            console.log(sp_ma);
            $('#cancelModal1').modal('show');
        });

        $('#ok_ansp_btn').click(function(){
            $.ajax({
                url: '<?php echo url('unactive-product');?>/'+sp_ma,
                type: 'get',
                success: function(data)
                {
                    window.location.replace("<?php echo url('/manage-product');?>");
                }
            });
        });
        $('#ok_hiensp_btn').click(function(){
            $.ajax({
                url: '<?php echo url('active-product');?>/'+sp_ma,
                type: 'get',
                success: function(data)
                {
                    window.location.replace("<?php echo url('/manage-product');?>");
                }
            });
        });
        $(document).on('click','.cancel2', function(){
            sp_ma = $(this).attr('id');
            console.log(sp_ma);
            $('#cancelModal2').modal('show');
        });

        $('#ok_xoasp_btn').click(function(){
            $.ajax({
                url: '<?php echo url('xoa-sanpham');?>/'+sp_ma,
                type: 'get',
                success: function(data)
                {
                    window.location.replace("<?php echo url('/manage-product');?>");
                }
            });
        });
     });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ShoesStore\ShoesShop\resources\views/admin/manage_product.blade.php ENDPATH**/ ?>
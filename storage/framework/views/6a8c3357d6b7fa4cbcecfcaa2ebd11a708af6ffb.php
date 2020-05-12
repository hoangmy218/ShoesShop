<?php $__env->startSection('content'); ?>

                       


<div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-credit-card bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Quản lý màu sắc sản phẩm</h5>
                                            
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
                                                <a href="<?php echo e(URL::to('/manage-color')); ?>">Quản lý màu sắc</a>
                                            </li>
                                            
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!-- Tien 07/05 -->
                        
                        <?php
                            $message1 = Session::get('fail_message1');
                            if ($message1){
                                echo '<span class="alert alert-danger">'.$message1."</span>";
                                
                                Session::put('fail_message1',null);
                            }
                            $message1 = Session::get('success_message1');
                            if ($message1){
                                echo '<span class="alert alert-success">'.$message1."</span>";
                                
                                Session::put('success_message1',null);
                            }
                        ?>
                        <div class="row">
                            <div class="col-md-12">
								<div class="card">
                                    <div class="card-header d-block">
                                        <h3>Danh sách màu sắc</h3>
                                    
                                        
                                    </div>
                                    <div class="card-body p-0 table-border-style">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>STT</th>
                                                        <th>Mã màu sắc</th>
                                                        <th>Tên màu sắc</th>
                                                        <th>Thao tác</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php {{$i=1;}} ?>
                                                	<?php $__currentLoopData = $list_color; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                    <tr>
                                                        <th scope="row"><?php echo e($i); ?></th>
                                                        <td><?php echo e($color->ms_ma); ?></td>
                                                        <td><?php echo e($color->ms_ten); ?></td>
                                                        <td><div class="table-actions">                                                  
                                                            <a href="<?php echo e(URL::to('/edit-color/'.$color->ms_ma)); ?>"><i class="ik ik-edit-2"></i></a>

                                                             <i class="ik ik-trash-2 delete text-red" id="<?php echo e($color->ms_ma); ?>"></i>

                                                             <!-- <a onclick="return confirm('Bạn chắc chắn muốn xóa?')" href="<?php echo e(URL::to('/delete-colort/'.$color->ms_ma)); ?>"><i class="ik ik-trash-2"></i></a> -->

                                                            
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

                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            
                            <div class="modal-header">
                                <h5 class="modal-title" id="demoModalLabel">Xóa màu sắc</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                            Bạn có chắc chắn muốn xóa màu sắc này?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Hủy</button>
                                <button type="button" id="ok_delete_btn" class="btn btn-success">Xác nhận</button>
                            </div>
                        </div>
                    </div>
                </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="http://www.codermen.com/js/jquery.js"></script>
<script>
$(document).ready(function(){

        $('#mausac').parent().addClass('active open');
        $("#danhsachmausac").addClass("active");
         // Tien 07/05
         //dat thi gian tat thong bao
        setTimeout(function(){
           $("span.alert").remove();
        }, 5000 ); // 5 secs

         var ms_ma;
        $(document).on('click','.delete', function(){
            ms_ma = $(this).attr('id');
            $('#deleteModal').modal('show');

        });

        $('#ok_delete_btn').click(function(){
            $.ajax({
                url: '<?php echo url('/delete-color');?>/'+ms_ma,
                type: 'get',
                success: function(data)
                {
                    window.location.replace("<?php echo url('/manage-color');?>");
                }
            });
        });

});
</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shoesshop1\resources\views/admin/manage_Color.blade.php ENDPATH**/ ?>
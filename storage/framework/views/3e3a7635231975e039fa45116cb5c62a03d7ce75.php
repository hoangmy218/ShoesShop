<?php $__env->startSection('content'); ?>
<div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-credit-card bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Quản lý hình thức thanh toán</h5>
                                            
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
                                                <a href="#">Quản lý hình thức thanh toán</a>
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
                                        <h3>Danh sách phương thức thanh toán</h3>
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
                                                        <th>Mã thanh toán</th>
                                                        <th>Tên phương thức thanh toán</th>
                                                        <th>Thao tác</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php {{$i=1;}} ?>
                                                    <?php $__currentLoopData = $list_pay; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $pay): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                    <tr>
                                                        <th scope="row"><?php echo e($i); ?></th>
                                                        <td><?php echo e($pay->httt_ma); ?></td>
                                                        <td><?php echo e($pay->httt_ten); ?></td>
                                                        <td><div class="table-actions">                                                  
                                                            <a href="<?php echo e(URL::to('/edit-pay/'.$pay->httt_ma)); ?>"><i class="ik ik-edit-2"></i></a>
                                                            <a>
                                                            <i class="ik ik-trash-2 cancel text-red" id="<?php echo e($pay->httt_ma); ?>"></i></a>
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
                <div class="modal fade" id="cancelModal" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            
                            <div class="modal-header">
                                <h5 class="modal-title" id="demoModalLabel">Xóa hình thức thanh toán</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                            Bạn có chắc chắn muốn xóa hình thức thanh toán này?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Hủy</button>
                                <button type="button" id="ok_httt_btn" class="btn btn-success">Xác nhận</button>
                            </div>
                        </div>
                    </div>
                </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

        $('#thanhtoan').parent().addClass('active open');
        $("#danhsachthanhtoan").addClass("active");
            setTimeout(function(){
            $("span.alert").remove();}, 5000 );
     });
$(document).on('click','.cancel', function(){
            httt_ma = $(this).attr('id');
            $('#cancelModal').modal('show');
        });
$('#ok_httt_btn').click(function(){
            $.ajax({
                url: '<?php echo url('delete-pay');?>/'+httt_ma,
                type: 'get',
                success: function(data)
                {
                    window.location.replace("<?php echo url('/manage-pay');?>");
                }
            });
        });
</script>

            


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\shoesshop7\ShoesShop\resources\views/admin/manage_pay.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>

                       


<div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-credit-card bg-blue"></i>
                                        <div class="d-inline"> 
                                            <h5>Quản lý bình luận</h5>
                                            
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
                                                <a href="<?php echo e(URL::to('/manage-comment')); ?>">Quản lý bình luận</a>
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
                                        <h3>Danh sách bình luận</h3>
                                        <br>
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
                                    </div>
                                    <div class="card-body p-0 table-border-style">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                         <th>STT</th>
                                                        <!-- <th>Mã bình luận</th> -->
                                                        <th>Mã sản phẩm</th>
                                                        <th>Mã người dùng</th>
                                                        <!-- <th>Tên</th>
                                                        <th>Email</th> -->
                                                        <th>Nội dung bình luận</th>
                                                        <th>Ngày bình luận</th>
                                                        <th>Thao tác</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php {{$i=1;}} ?>
                                                    <?php $__currentLoopData = $list_comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ds_binhluan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                    <tr>
                                                        <th scope="row"><?php echo e($i); ?></th>
                                                        
                                                        <td><?php echo e($ds_binhluan->sp_ma); ?></td>
                                                        <td><?php echo e($ds_binhluan->nd_ma); ?></td>
                                                        
                                                        <td><?php echo e($ds_binhluan->noiDung); ?></td>
                                                        <td><?php echo e($ds_binhluan->ngayBinhLuan); ?></td>
                                                        <td>
                                                            
                                                            <span class="text-ellipsis">
                                                              <?php
                                                              if($ds_binhluan->trangThai==0){
                                                                ?>
                                                                <a href ="<?php echo e(URL::to('unactive-comment/'.$ds_binhluan->nd_ma.'/'.$ds_binhluan->sp_ma.'/'.$ds_binhluan->ngayBinhLuan)); ?>"><span class="text-green ik ik-eye"></span></a>
                                                                <?php
                                                              }else{
                                                                ?>
                                                                <a href="<?php echo e(URL::to('active-comment/'.$ds_binhluan->nd_ma.'/'.$ds_binhluan->sp_ma.'/'.$ds_binhluan->ngayBinhLuan)); ?>"><span class=" text-red ik ik-eye-off"></span></a>
                                                              <?php
                                                              }

                                                              ?>
                                                            </span>
                                                        </td>
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

<script src="http://www.codermen.com/js/jquery.js"></script>
<script>
$(document).ready(function(){

         // Tien 08/05
         //dat thi gian tat thong bao
        setTimeout(function(){
           $("span.alert").remove();
        }, 5000 ); // 5 secs

         

});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shoesshop1\resources\views/admin/manage_comment.blade.php ENDPATH**/ ?>
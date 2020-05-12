<?php $__env->startSection('content'); ?>

<div class="main-content">
                <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-file-text bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Thống kê theo doanh thu</h5>
                                          
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
                                                <a href="<?php echo e(URL::to('/statistical_Revenue')); ?>">Thống kê theo doanh thu</a>
                                            </li>
                                        </ol>
                                    </nav>
                                </div>

                            </div>
                        </div>
                      
                        <div class="row">
                        	<div class="col-md-7">
                        		 <?php echo $chart->html(); ?> 
                        	</div>
                        	<div class="col-md-5">
                        		 <?php echo $line_chart->html(); ?>

                        	</div>
                        </div>
		               

				</div>
</div>
<?php echo Charts::scripts(); ?>

<?php echo $chart->script(); ?>

<?php echo $line_chart->script(); ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

        $('#thongke').parent().addClass('active open');
         $("#theodoanhthu").addClass("active");
     });
</script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\ShoesShopWebsite\shoesshop\resources\views/admin/statistical_Revenue.blade.php ENDPATH**/ ?>
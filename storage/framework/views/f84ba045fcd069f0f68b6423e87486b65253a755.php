<?php $__env->startSection('content'); ?>

<div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-file-text bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Đơn hàng</h5>
                                           
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
                                                <a href="<?php echo e(URL::to('/manage-order')); ?>">Quản lý đơn hàng</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">
                                                <a href="<?php echo e(URL::to('/view-history/'.$order->nd_ma)); ?>">Lịch sử đơn</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Chi tiết đơn</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header"><h3 class="d-block w-100">Mã đơn hàng: <?php echo e($order->dh_ma); ?> <small class="float-right">Ngày đặt: <?php echo e(date('d-m-Y',strtotime($order->dh_ngayDat))); ?></small></h3></div>
                            <div class="card-body">
                                <div class="row invoice-info">
                                    <div class="col-sm-4 invoice-col">
                                        Người đặt
                                        <address>
                                            <strong><?php echo e($order->nd_ten); ?></strong><br><?php echo e($order->nd_diaChi); ?> <br>Phone: <?php echo e($order->nd_dienThoai); ?><br>Email: <?php echo e($order->nd_email); ?>

                                        </address>
                                    </div>
                                    <div class="col-sm-4 invoice-col">
                                        Người nhận
                                        <address>
                                            <strong><?php echo e($order->dh_tenNhan); ?></strong><br><?php echo e($order->dh_diaChiNhan); ?><br>Phone: <?php echo e($order->dh_dienThoai); ?><br>Email: <?php echo e($order->dh_email); ?>

                                        </address>
                                    </div>
                                    <div class="col-sm-4 invoice-col">
                                        <b>Mã đơn hàng #<?php echo e($order->dh_ma); ?></b><br>          
                                        <b>Hình thức vận chuyển:</b> <?php echo e($order->vc_ten); ?><br>
                                        <b>Hình thức thanh toán:</b> <?php echo e($order->tt_ten); ?>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 table-responsive">
                                        <table class="table table-striped">
                                            <thead>                                                
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Tên sản phẩm</th>
                                                    <th>Số lượng</th>
                                                    <th>Đơn giá</th>
                                                    <th>Thành tiền</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $i=1;
                                                    $congTien=0;

                                                ?>
                                                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($i++); ?></td>
                                                    <td><?php echo e($item->sp_ten); ?></td>
                                                    <td><?php echo e($item->soLuongDat); ?></td>
                                                    <td><?php echo e(number_format($item->donGiaBan).' VND'); ?></td>
                                                    <td><?php echo e(number_format($item->thanhTien).' VND'); ?></td>
                                                    <?php $congTien = $congTien + $item->thanhTien; ?>
                                                </tr>
                                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <p class="lead">Phương thức thanh toán:</p>
                                        <h5><b><?php echo e($order->tt_ten); ?></b></h5>
                                        <p class="lead">Trạng thái thanh toán:</p>
                                        <?php if($order->tt_ten=='Tiền mặt'): ?>
                                            <h5><b>Chưa thanh toán</b></h5>
                                        <?php else: ?>
                                             <h5><b>Đã thanh toán</b></h5>
                                        <?php endif; ?>
                                        
                                        <p class="lead">Ghi chú:</p>
                                        <div class="alert alert-secondary mt-20">
                                          <?php echo e($order->dh_ghiChu); ?>

                                        </div>
                                    </div>
                                    <div class="col-6">
                                       
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tr>
                                                    <th style="width:50%">Cộng tiền:</th>
                                                    <td><?php echo e(number_format($congTien).' VND'); ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Khuyến mãi:</th>
                                                    <td><?php if (($order->km_ma != NULL) || ($order->km_ma != 0))
                                                            $disc = $congTien*$order->km_giamGia/100;
                                                        else
                                                            $disc = 0;                                                        
                                                        ?>
                                                        <?php echo e(number_format($disc).' VND'); ?>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Phí vận chuyển:</th>
                                                    <td><?php echo e(number_format($order->vc_phi).' VND'); ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Tổng tiền thanh toán:</th>
                                                    <td><?php echo e(number_format($congTien + $order->vc_phi - $disc).' VND'); ?></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-print">
                                    <div class="col-12">
                                        
                                        <a href="<?php echo e(URL::to('/createOrderPdf/'.$order->dh_ma)); ?>"><button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    <script src="http://www.codermen.com/js/jquery.js"></script>
    <script>
        $(document).ready(function(){
            $( '#donhang').parent().addClass('active');
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\ShoesShopWebsite\shoesshop\resources\views/admin/view_order.blade.php ENDPATH**/ ?>
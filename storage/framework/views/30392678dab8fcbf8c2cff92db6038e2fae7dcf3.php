
<!DOCTYPE html>
<html >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title>Order Pdf</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    	body{margin-top:10px;
			background:#FFFFFF;
			}

			.invoice {
			    padding: 0px;
			}

			.invoice h2 {
				margin-top: 0px;
				line-height: 0.8em;
			}

			.invoice .mdall {
				font-weight: 300;
			}

			.invoice hr {
				margin-top: 10px;
				border-color: #ddd;
			}

			.invoice .table tr.line {
				border-bottom: 1px solid #ccc;
			}

			.invoice .table td {
				border: none;
			}

			.invoice .identity {
				margin-top: 10px;
				font-size: 1.1em;
				font-weight: 300;
			}

			.invoice .identity strong {
				font-weight: 600;
			}


			.grid {
			    position: relative;
				width: 100%;
				background: #fff;
				color: #666666;
				border-radius: 2px;
				margin-bottom: 10px;
				box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.1);
			}
			tr.tongtien td {
			  border-top: 2px solid black;
			  background: #E0E0E0;
			}
			.table{
				 border-collapse: collapse;
			}
    </style>
</head>
<body style="font-family:  DejaVu Sans, sans-serif;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="grid invoice">
					<div class="grid-body">
						<div class="invoice-title">
							<div class="row">
								<div class="col-md-12">
									<img src="<?php echo e(asset('public/backend/img/logo.png')); ?>" alt="" height="35">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-12">
									<strong>Hóa đơn<br>
									Mã #<?php echo e($order->dh_ma); ?></strong>
								</div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-xs-5">
								<address>
									<strong>Người đặt:</strong><br>
									<strong><?php echo e($order->nd_ten); ?></strong><br>
									<?php echo e($order->nd_diaChi); ?> <br>
									Phone: <?php echo e($order->nd_dienThoai); ?><br>
									Email: <?php echo e($order->nd_email); ?>

								</address>
							</div>
							<div class="col-xs-6 text-right">
								<address>
									<strong>Người nhận:</strong><br>
									<strong><?php echo e($order->dh_tenNhan); ?></strong><br>
									<?php echo e($order->dh_diaChiNhan); ?><br>
									Phone: <?php echo e($order->dh_dienThoai); ?><br>
									Email: <?php echo e($order->dh_email); ?>

								</address>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6">
								<address>											        
                                    <b>Hình thức vận chuyển:</b> <?php echo e($order->vc_ten); ?><br>
                                    <b>Hình thức thanh toán:</b> <?php echo e($order->tt_ten); ?><br>
                                    <b>Ghi chú:</b> <?php echo e($order->dh_ghiChu); ?>

								</address>
							</div>
							<div class="col-xs-5 text-right">
								<address>
									<strong>Ngày đặt:</strong><br>
									<?php echo e(date('d-m-Y',strtotime($order->dh_ngayDat))); ?>

								</address>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-12">
								<h3><strong>NỘI DUNG ĐƠN HÀNG</strong></h3>
								
								<table class="table table-striped">
									<thead>
										<tr class="line">
											<td><strong>STT</strong></td>
											<td class="text-center"><strong>TÊN SẢN PHẨM</strong></td>
											<td class="text-center"><strong>SỐ LƯỢNG</strong></td>
											<td class="text-right"><strong>ĐƠN GIÁ</strong></td>
											<td class="text-right"><strong>THÀNH TIỀN</strong></td>
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
                                                <td><strong><?php echo e($item->sp_ten); ?></strong></td>
												<td class="text-center"><?php echo e($item->soLuongDat); ?></td>
												<td class="text-center"><?php echo e(number_format($item->donGiaBan).' VND'); ?></td>
												<td class="text-right"><?php echo e(number_format($item->thanhTien).' VND'); ?></td>
											</tr>
                                            <?php $congTien = $congTien + $item->thanhTien; ?>
                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                         <tr class="tongtien">
											<td colspan="3"></td>
											<td class="text-right "><strong>Cộng tiền</strong></td>
											<td class="text-right"><strong><?php echo e(number_format($congTien).' VND'); ?></strong></td>
										</tr>
										<tr>
											<td colspan="3"></td>
											<td class="text-right"><strong>Khuyến mãi</strong></td>
											<td class="text-right">
												<strong> 
													<?php if (($order->km_ma != NULL) || ($order->km_ma != 0))
                                                            $disc = $congTien*$order->km_giamGia/100;
                                                        else
                                                            $disc = 0;                                                        
                                                        ?>
                                                        <?php echo e(number_format($disc).' VND'); ?>

                                                    </strong>
                                                </td>
										</tr>
										<tr>
											<td colspan="3">
											</td><td class="text-right"><strong>Vận chuyển</strong></td>
											<td class="text-right"><strong><?php echo e(number_format($order->vc_phi).' VND'); ?></strong></td>
										</tr>
										<tr class="tongtien">
											<td colspan="2">
											</td><td  colspan="2" class="text-right"><strong>Tổng tiền thanh toán</strong></td>
											<td class="text-right"><strong><?php echo e(number_format($congTien+$order->vc_phi - $disc).' VND'); ?></strong></td>
										</tr>
									</tbody>
								</table>
							</div>									
						</div>
					</div>
				</div>
			</div>		
		</div>
	</div>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html><?php /**PATH C:\xampp\htdocs\GitHub\ShoesShopWebsite\shoesshop\resources\views/admin/order_pdf.blade.php ENDPATH**/ ?>
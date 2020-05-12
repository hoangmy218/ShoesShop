<?php $__env->startSection('content'); ?>
	<div class="hero-wrap hero-bread" style="background-image: url(<?php echo e(asset('public/frontend/images/bg_6.jpg')); ?>);">
     	<div class="container">
        	<div class="row no-gutters slider-text align-items-center justify-content-center">
          		<div class="col-md-9 ftco-animate text-center">
          			<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo e(URL::to('/')); ?>"><?php echo e(__('Trang chủ')); ?></a></span> <span><?php echo e(__('Đặt hàng')); ?></span></p>
            		<h1 class="mb-0 bread"><?php echo e(__('Đặt hàng')); ?></h1>
          		</div>
        	</div>
      	</div>
    </div>

    <section class="ftco-section">
    	<div class="container">
        	
			<?php
                $message = Session::get('message');
                if ($message){
                    echo '<span class="alert alert-danger">'.$message."</span>";
                    
                    Session::put('message',null);
                }
                $content = Cart::content();
            ?>
          	<div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="cart-list">

                        <table class="table">
                            <thead class="thead-primary">
                                 <tr class="text-center">
                                    <th><?php echo e(__('STT')); ?></th>
                                    <th><?php echo e(__('Mã sản phẩm')); ?></th>
                                    <th><?php echo e(__('Hình ảnh')); ?></th>
                                    <th><?php echo e(__('Tên sản phẩm')); ?></th>
                                    <th><?php echo e(__('Kích cỡ')); ?></th>
                                    <th><?php echo e(__('Đơn giá')); ?></th>
                                    <th><?php echo e(__('Số lượng')); ?></th>
                                    <th><?php echo e(__('Thành tiền')); ?></th>
                                    
                                    
                                </tr>
                            </thead>
                            <?php $i=1; ?>
                            <?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v_content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><!-- tien -->
                                <tbody>
                                    <tr class="text-center">
                                        <td class="product-price">
                                            <h4><?php echo e($i++); ?></h4>
                                        </td>
                                        <td class="product-price">
                                            <h4><?php echo e($v_content->id); ?></h4>
                                        </td>
                                        <td class="image-prod"><div class="img" style="background-image:url(<?php echo e(URL::to('public/upload/product/'.$v_content->options->image)); ?>);" ></div></td>
                                        
                                        <td class="product-name">
                                            <h3><?php echo e($v_content->name); ?></h3>
                                            
                                        </td>
                                        <td class="quantity">
                                            <h3><?php echo e($v_content->options->size); ?></h3>                                          
                                        </td>
                                        
                                        <td class="price"><?php echo e(number_format($v_content->price).' '.'VND'); ?></td>
                                        
                                        <td class="quantity">
                                            <h4><?php echo e($v_content->qty); ?></h4>
                                                               
                                                
                                        </td>
                                        <td class="total">
                                            <p class="cart_total_price">
                                            
                                            <?php
                                            $subtotal = $v_content->price * $v_content->qty;
                                            echo number_format($subtotal).' '.'VND';
                                            ?><!-- Tien -->
                                        </p>
                                        </td>
                                        </tr><!-- END TR-->
                                    </tbody>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                        </table>
                    </div>
                </div>
            </div>
            <div class="row mt-5 pt-3 d-flex">
                <div class="col-md-6 d-flex">
                    <div class="cart-detail cart-total bg-light p-3 p-md-4">
                        <h3 class="billing-heading mb-4"><?php echo e(__('Thông tin giao hàng')); ?></h3>
                        <form action="<?php echo e(URL::to('save-checkout-customer')); ?>" method="post">
                            <?php echo e(csrf_field()); ?>


                            <div class="form-group">
                                <input type="text" name="dh_tenNhan" class="form-control" placeholder="<?php echo e(__('Họ và tên người nhận')); ?>" required="">
                                <i class="ik ik-lock"></i>
                            </div>
                            <div class="form-group">
                                <input type="" name="dh_email" class="form-control" placeholder="<?php echo e(__('Email')); ?>" required="" title="The domain portion of the email address is invalid (the portion after the @)." pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$" >
                                
                                
                                <i class="ik ik-user"></i>
                            </div>
                            
                            <div class="form-group">
                                <textarea name="dh_diaChiNhan"  class="form-control" rows="3" cols="20" placeholder="<?php echo e(__('Địa chỉ nhận hàng')); ?>" required></textarea>                
                            </div>
                            <div class="form-group">
                                <input type="tel" name="dh_dienThoai" class="form-control" placeholder="<?php echo e(__('SĐT')); ?>" required=""  pattern="[0]{1}[0-9]{9}" title="Số điện thoại phải là 10 số và bắt đầu bằng 0">
                               
                                <i class="ik ik-lock"></i>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1"><?php echo e(__('Hình thức vận chuyển')); ?></label>
                                <div>
                                    
                                    <select  required="" id="vanc_id" name="vanc_id" class="form-control m-bot15">
                                        <option value=""><?php echo e(__('Chọn hình thức vận chuyển')); ?></option>
                                        <?php $__currentLoopData = $ma_vanchuyen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $mavc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        
                                        <option value="<?php echo e($mavc->vc_ma); ?>"><?php echo e($mavc->vc_ten); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div> 
                            </div>
                            <div class="form-group">
                                <textarea name="dh_ghiChu"  class="form-control" rows="3" cols="20" placeholder="<?php echo e(__('Ghi chú')); ?>" required></textarea>                
                            </div>
                            <div class="sign-btn text-center">
                                <button type="submit" class="btn btn-theme btn-primary py-3 px-4"><?php echo e(__('Thanh toán ngay')); ?></button>
                            </div>

                        </form> 
                    </div>
                </div>
               <div class="col-md-6 d-flex" id="show_total" >
                    <div class="cart-detail cart-total bg-light p-3 p-md-4">
                        
                        <div class="form-group">
                                <input name="coupon_code" id="coupon_id" class="form-control" rows="3" cols="20" placeholder="<?php echo e(__('Mã khuyến mãi')); ?>" required>            
                        </div>
                        <div class="sign-btn text-center">
                                <input type="button" value="<?php echo e(__('Áp dụng')); ?>" id="coupon_btn" class="btn btn-theme btn-primary py-3 px-4">
                        </div>
                         <br>
                        
                        <h3 class="billing-heading mb-4"><?php echo e(__('Tổng tiền thanh toán')); ?></h3>
                        <p class="d-flex">
                            <span><?php echo e(__('Cộng tiền')); ?></span>
                            <span><?php echo e(number_format((double)Cart::subtotal(2,'.','')).' VND'); ?></span>
                        </p>
                        <p  class="d-flex">
                            <span><?php echo e(__('Phí vận chuyển')); ?></span>
                            
                          
                          <?php (int)$phi= 0; ?>
                            
                          <a id="price" name="price"><?php echo e(number_format($phi).' VND'); ?></a>
                        </p>
                         <?php
                            Session::put('ti_le_giamgia', 0);
                            Session::put('tien_giamgia', 0);
                            Session::put('ma_khuyenmai',null); ?>
                        
                        <hr>
                        <p class="d-flex total-price">
                            <span><b><?php echo e(__('Tổng tiền thanh toán')); ?></b></span>
                            <?php $subtt =(int)Cart::subtotal(2,'.',''); ?> 
                            
                            <span>
                                <input id="tong" name="tong" value="<?php echo e($subtt); ?>" type="hidden" placeholder="<?php echo e(gettype($subtt)); ?>">
                                <div id="tongtext"><?php echo e(number_format($subtt).' VND'); ?></div>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
           

          
      </div>
      
    <script src="http://www.codermen.com/js/jquery.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-latest.pack.js"></script>
     <script type="text/javascript" src="https://code.jquery.com/jquery-latest.pack.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){ 
        
            //dat thi gian tat thong bao
            setTimeout(function(){
               $("span.alert").remove();
            }, 5000 ); // 5 secs


            $('select[name="vanc_id"]').on('change',function(){
                    var vc_ma = $(this).val();
                    console.log(vc_ma);
                    var tongtien = $('#tong').val(); 
                    console.log(tongtien);
                    if(vc_ma){
                        $.ajax({
                            url: "<?php echo e(url('get-price')); ?>?vc_ma="+vc_ma,
                            type: 'GET',
                            dataType: 'json',
                            success: function(data){
                                console.log(data);
                               $('select[name="value"]').empty();
                                 $.each(data, function(key,value){
                                   var tongn =parseInt(tongtien)+value;
                                   console.log(tongn,' tongn');
                                   console.log(tongtien,' tongtien');
                                   console.log(value,' value');
                                   console.log(typeof tongtien, ' type tongtien');
                                   console.log(typeof value,' type value')
                                    $('a[name="price"]').replaceWith('<a id="price" name="price">'+value+' VND</a>');
                                     // $('input[name="tong"]').replaceWith('<input id="tong" name="tong" value="'+tongn+'" type="hidden" placeholder=""');
                                    $('div[id="tongtext"]').text(tongn+' VND');
                                 });
                            }
                        });
                    }else{
                         $('select[name="price"]').empty();
                    }
                });

            // Start Ngân (12/3/2020) 

            $('#coupon_btn').click(function(){
                var coupon_id= $('#coupon_id').val();
                //alert(coupon_id);
                console.log(coupon_id);
                $.ajax({
                    url:'<?php echo e(url('/checkCoupon')); ?>',
                    data: 'code=' + coupon_id,
                    success:function(res){
                    console.log(res);
                   $('#show_total').html(res);
                    }
                })
            });
        });
    </script>
        
  
   
    </section> <!-- .section -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('shop_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\ShoesShopWebsite\shoesshop\resources\views/pages/checkout/checkout.blade.php ENDPATH**/ ?>
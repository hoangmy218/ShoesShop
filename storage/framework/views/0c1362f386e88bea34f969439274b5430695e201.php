<?php $__env->startSection('content'); ?>


    <div class="hero-wrap hero-bread" style="background-image: url(<?php echo e(URL::to('public/frontend/images/bg_6.jpg')); ?>);">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo e(URL::to('/')); ?>"><?php echo e(__('Trang chủ')); ?></a></span> <span><?php echo e(__('Giỏ hàng của tôi')); ?></span></p>
            <h1 class="mb-0 bread"><?php echo e(__('Giỏ hàng của tôi')); ?></h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart">

		<div class="container">
			
            <?php
            	$message = Session::get('message');
            	if ($message){
            		echo '<span class="alert alert-danger">'.$message."</span>";
            		
            		Session::put('message',null);
            	}
            	$success_message = Session::get('success_message');
            	if ($success_message){
            		echo '<span class="alert alert-success">'.$success_message."</span>";
            		
            		Session::put('success_message',null);
            	}
            ?>
			<?php
				$content = Cart::content();
			?>

			<?php if($content->isempty()): ?>
				<p class="text-center"><a href="<?php echo e(URL::to('/')); ?>" class="btn btn-primary py-3 px-4"><?php echo e(__('Mua sắm ngay')); ?></a></p>
			<?php else: ?>

			<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div id='updateDiv'>
					
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
							        <th>&nbsp;</th>
							    </tr>
						    </thead>
						    <?php $count=1; ?>
							<?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v_content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><!-- tien -->
							    <tbody>
								    <tr class="text-center">
								      	<td class="product-price">
								        	<h4><?php echo e($count++); ?></h4>
								        </td>
								        <td class="product-id">
								        	<h3><?php echo e($v_content->id); ?></h3>
								        	
								        </td>
								        <td class="image-prod"><div class="img" style="background-image:url(<?php echo e(URL::to('public/upload/product/'.$v_content->options->image)); ?>);" ></div></td>
								        
								        <td class="product-name">
								        	<h3><?php echo e($v_content->name); ?></h3>
								        	
								        </td>
								        <td class="quantity">
								        	
								        	<select name="size" id="size"  class="form-control size<?php echo $count; ?>">
							                    
							                    <?php 
								                    $product = DB::Table('chitietsanpham')->select('sp_ma','ctsp_soLuongTon')->where('ctsp_ma',$v_content->id)->first();
								                    $sizes = DB::Table('chitietsanpham')->select('ctsp_kichCo','ctsp_ma')->where([['sp_ma',$product->sp_ma],['ctsp_soLuongTon','!=',0]])->orderBy('ctsp_kichCo','asc')->get();
								                    $array = array();
						                 	
								                 	foreach($sizes as $key => $sz){
								                 		
								                 		$array[$sz->ctsp_ma] = $sz->ctsp_kichCo;
								                 		
								                 	}  
							                    ?>

							                    
							                    <?php $__currentLoopData = array_unique($array); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							                    	<?php if($v_content->options->size == $val ): ?>
							                        <option value="<?php echo e($val); ?>" selected><?php echo e($val); ?></option>
							                        <?php else: ?>
							                        	<option value="<?php echo e($val); ?>"><?php echo e($val); ?></option>
							                        <?php endif; ?>
							                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							                </select>
							               								        	
								        </td>
								        
								        <td class="price"><?php echo e(number_format($v_content->price).' '.'vnđ'); ?></td>
								        
								        <td class="quantity">
									        
										        <div class="input-group mb-3" id="divquantity">		
										        	<input type="hidden" value="<?php echo e($v_content->rowId); ?>" id="rowId<?php echo $count; ?>" name="rowId" class="form-control">
										        	<input type="hidden" value="<?php echo e($product->sp_ma); ?>" id="sp_ma<?php echo $count; ?>" name="sp_ma" class="form-control">
										        	<input type="hidden" value="<?php echo e($v_content->id); ?>" id="ctsp_ma<?php echo $count; ?>" name="ctsp_ma" class="form-control">								        	
														
							             			<input type="number" name="quantity" id="upCart<?php echo $count; ?>" class="quantity form-control input-number" value="<?php echo e($v_content->qty); ?>" min="1" max="<?php echo e($product->ctsp_soLuongTon); ?>">
							             			    	
									          	</div>
									          	
									        
							         	</td>
								        <td class="total">
								        	<p class="cart_total_price">
											
											<?php
											$subtotal = $v_content->price * $v_content->qty;
											echo number_format($subtotal).' '.'VNĐ';
											?><!-- Tien -->
										</p>
								        </td>
								        <td class="product-remove">
								         	<a class="ion-ios-close" onclick="<?php echo "return confirm('"; ?><?php echo e(__("Bạn chắc chắn muốn xóa sản phẩm này?")); ?><?php echo "')";?>" href="<?php echo e(URL::to('/delete-to-cart/'.$v_content->rowId)); ?>"><i class="fa fa-times"></i></a>
								         	
								         </td>
								         
							         
							      		</tr><!-- END TR-->
							    	</tbody>
							   
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

						</table>
						<h3 class="billing-heading mb-4" align="right"><?php echo e(__('Tổng tiền')); ?>: &emsp;<?php echo e(Cart::subtotal().' '.'vnđ'); ?></h3>	
					</div>

				</div>

    			</div>

    		</div>
	    	<div class="row justify-content-start">
	    		<div class="col-md-12 ftco-animate">
	    			
	    			<br>
	    			<p class="text-center"><a href="<?php echo e(URL::to('/')); ?>" class="btn btn-primary py-3 px-4"><?php echo e(__('Mua sắm ngay')); ?></a>
	    			<a href="<?php echo e(URL::to('/checkout')); ?>" class="btn btn-primary py-3 px-4"><?php echo e(__('Đặt hàng ngay')); ?></a></p>
	    		</div>
	    	</div>
	  
	    	<?php endif; ?>
	    

	</div>


	<script src="http://www.codermen.com/js/jquery.js"></script>
    <script type="text/javascript">
    	    function rating(a){
			  console.log((a.parentElement).parentElement.parentElement.childNodes[3].childNodes[1].innerHTML);
			  var ctsp_ma = (a.parentElement).parentElement.parentElement.childNodes[3].childNodes[1].innerHTML;
			 /* var size_id = a.innerHTML;
                console.log(size_id);*/
			}
			
			
        $(document).ready(function(){
        	 //dat thi gian tat thong bao
        setTimeout(function(){
           $("span.alert").remove();
        }, 5000 ); // 5 secs

        	
            $('select[name="size"]').on('change',function(){
                var size_id = $(this).val();
                console.log(size_id);
                var ctsp_ma = $.trim(($(this).parent()).parent().children().eq(1).text());
            		console.log(ctsp_ma,'ctsp_ma');
                if(size_id){

                    $.ajax({

                        url: "<?php echo e(url('getStock')); ?>",
                        dataType: 'json',
                        type: 'GET',
                        data:{
                        	size_id: size_id,
                        	ctsp_ma: ctsp_ma
                        },
                        
                        success: function(data){
                            console.log(data);
                             $('select[name="stock"]').empty();
                             $.each(data, function(name,stock){
                                /*$('select[name="stock"]').append('<option value="'+stock+'">'+stock+'</option>');
*/
								 /*$('input[name="quantity"]').replaceWith('<input type="number" onchange="this.form.submit()" name="quantity" class="quantity form-control input-number" value="1" min="1" max="'+stock+'">');*/
								 /* $('input[name="quantity"]').replaceWith('<input type="number"  name="quantity" id="upCart" class="quantity form-control input-number" value="1" min="1" max="'+stock+'">');*/
								  $('input[name="quantity"]').attr({
								       "max" : stock,        // substitute your own
								       "min" : 1          // values (or variables) here
								    });
                              
                             });
                        }
                    });
                }else{
                     $('select[name="stock"]').empty();
                }
            });

			<?php 
				$count = Cart::count();

				for($i=1; $i<=$count; $i++){
			?>
			$('#upCart<?php echo $i; ?>').on('change keyup', function(){
				var newqty = $('#upCart<?php echo $i; ?>').val();
				var rowId = $('#rowId<?php echo $i; ?>').val();
				var ctsp_ma = $('#ctsp_ma<?php echo $i; ?>').val();
				var sp_ma = $('#sp_ma<?php echo $i; ?>').val();
				var size = $('.size<?php echo $i; ?>').val();

				// alert(newqty+' '+rowId+' '+ctsp_ma);
				if (newqty <=0 ){
					alert('Số lượng không hợp lệ! Số lượng lớn hơn 0');
				} else{

					$.ajax({
						type: 'get',
						dataType: 'html',
						url: '<?php echo url('update-qty');?>/'+ctsp_ma,
						data: "qty="+newqty+"&rowId="+rowId+"&ctsp_ma="+ctsp_ma+"&sp_ma="+sp_ma+"&size="+size,
						success: function(response){
							console.log(response);
							  $('#updateDiv').html(response);
						}
					});

					/*alert(newqty+' '+rowId+' '+ctsp_ma);*/
				}


			});
			<?php } ?>

        });
    </script>
</section>
<?php $__env->stopSection(); ?>
		
<?php echo $__env->make('shop_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shoesshop\resources\views/pages/cart/show_cart.blade.php ENDPATH**/ ?>
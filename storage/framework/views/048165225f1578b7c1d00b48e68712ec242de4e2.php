
		<div class="cart-list">
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
		            	$content = Cart::content();
		            ?>
			
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
								        	<h4><?php echo e($count); ?></h4>
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
							                    <option value="">Size</option>
							                    <?php 
								                    $product = DB::Table('chitietsanpham')->select('sp_ma','ctsp_soLuongTon')->where('ctsp_ma',$v_content->id)->first();
								                    $sizes = DB::Table('chitietsanpham')->select('ctsp_kichCo','ctsp_ma')->where([['sp_ma',$product->sp_ma],['ctsp_soLuongTon','!=',0]])->orderBy('ctsp_kichCo','asc')->get();    
							                    ?>
							                    <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							                    	<?php if($v_content->options->size == $value->ctsp_kichCo ): ?>
							                        <option value="<?php echo e($value->ctsp_kichCo); ?>" selected><?php echo e($value->ctsp_kichCo); ?></option>
							                        <?php else: ?>
							                        	<option value="<?php echo e($value->ctsp_kichCo); ?>"><?php echo e($value->ctsp_kichCo); ?></option>
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
							    <?php $count++; ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

						</table>
						<h3 class="billing-heading mb-4" align="right"><?php echo e(__('Tổng tiền')); ?>: &emsp;<?php echo e(Cart::subtotal().' '.'vnđ'); ?></h3>	
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
    </script><?php /**PATH C:\xampp\htdocs\GitHub\ShoesShopWebsite\shoesshop\resources\views/pages/cart/upCart.blade.php ENDPATH**/ ?>
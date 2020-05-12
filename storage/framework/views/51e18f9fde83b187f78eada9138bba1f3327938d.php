<?php $__env->startSection('script_thumbnail'); ?>


<!--theme-style-->
<link href="<?php echo e(asset('public/frontend/css/ThumbnailGallery/style.css')); ?>" rel="stylesheet" type="text/css" media="all" />	
<link rel="stylesheet" href="<?php echo e(asset('public/frontend/css/ThumbnailGallery/etalage.css')); ?>" type="text/css" media="all" />

<!--//fonts-->
<script src="<?php echo e(asset('public/frontend/js/ThumbnailGallery/jquery.min.js')); ?>"></script>

<script src="<?php echo e(asset('public/frontend/js/ThumbnailGallery/jquery.etalage.min.js')); ?>"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 500,
					thumb_image_height: 500,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					
				});

			});
		</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>




    <div class="hero-wrap hero-bread" style="background-image: url(<?php echo e(URL::to('public/frontend/images/bg_6.jpg')); ?>);">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo e(URL::to('/')); ?>"><?php echo e(__('Trang chủ')); ?></a></span> <span><?php echo e(__('Cửa hàng')); ?></span></p>
            <h1 class="mb-0 bread"><?php echo e(__('Cửa hàng')); ?></h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<?php $__currentLoopData = $details_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    		<form action="<?php echo e(URL::to('/save-cart')); ?>" method="POST">
				<?php echo e(csrf_field()); ?>

    		<div class="row">
    		
    			
    			<div class="col-lg-6 mb-5 ftco-animate">
    			<div class="grid images_3_of_2">
						<ul id="etalage">
							<?php $__currentLoopData = $image_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $img_pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li>
								<a href="<?php echo e(URL::to('public/upload/product/'.$img_pro->ha_ten)); ?>">
									<img class="etalage_thumb_image" src="<?php echo e(URL::to('public/upload/product/'.$img_pro->ha_ten)); ?>" class="img-responsive" />
									<img class="etalage_source_image" src="<?php echo e(URL::to('public/upload/product/'.$img_pro->ha_ten)); ?>" class="img-responsive" title="" />
								</a>
							</li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							
						</ul>
							<div class="clearfix"> </div>		
				  </div>
				</div>
				
				<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				
    				<h3><?php echo e($value->sp_ten); ?></h3>
    				
    				<div class="rating d-flex">
							
							<p class="text-left mr-4">
								<a href="#" class="mr-2" style="color: #000;">0 <span style="color: #bbb;"><?php echo e(__('Đánh giá')); ?></span></a>
							</p>
							<p class="text-left">
								
								<a href="#" class="mr-2" style="color: #000;">
									
									 <?php echo e($sold_product); ?> <!-- tiên 18/04 -->
									
								 	<span style="color: #bbb;"><?php echo e(__('Đã bán')); ?></span>
								</a>
								
							</p>
						</div>
    				<p class="price"><span><?php echo e(number_format($value->sp_donGiaBan).' '.'VNĐ'); ?></span></p>
    				
						<div class="row mt-4">

							<div class="col-md-6">
								<div class="form-group d-flex">
						            <div class="select-wrap">
					                  <div class="icon">
					                  	<span class="ion-ios-arrow-down"></span>
					                  </div>
					                  	<?php 
						                 	$array = array();
						                 	
						                 	foreach($sz_product as $key => $sz){
						                 		
						                 		$array[$sz->ctsp_ma] = $sz->ctsp_kichCo;
						                 		
						                 	}
						                 	
						                 	/*echo '<pre>';
						                 	print_r($array);echo '</pre>';
						                 	echo '<pre>';
						                 	print_r(array_unique($array));echo '</pre>';
						                 	$a = array();
						                 	$a = array_unique($array);*/	

								        ?>
					           
										<select id="size" name="size" class="form-control" required="" pattern="Bạn chưa chọn size" style="width:200px" >
						                	<option value=""  selected disabled><?php echo e(__('Chọn kích cỡ')); ?></option>
						                 	<?php $__currentLoopData = array_unique($array); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						                  		<option value="<?php echo e($key); ?>"><?php echo e($val); ?></option>
						                  		
						                  	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						                  
						                </select>
						                
						                  		
					                </div>
						        </div>
							</div>
							<div class="w-100"></div>

							<!-- <div class="col-md-6">
								<div class="form-group d-flex">
						            <div class="select-wrap">
					                  <div class="icon">
					                  	<span class="ion-ios-arrow-down"></span>
					                  </div>
					                  <select name="slton" id="slton" class="form-control" style="width:200px">
               						  </select>
					                </div>
						        </div>
							</div> -->
															                
							<div class="input-group col-md-6 d-flex mb-3">
					             	<span class="input-group-btn mr-2">
					                	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
					                   <i class="ion-ios-remove"></i>
					                	</button>
					            	</span>

					            	
						                <input type="text" id="quantity" name="quantity" class="quantity form-control input-number" value="1" min="1" max="5">
						           
					             	

					             	
					             	<span class="input-group-btn ml-2">
					                	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
					                     <i class="ion-ios-add"></i>
					                 	</button>
					             	</span>
					        </div>

					        <input type="hidden" name="productid_hidden" id="spma" value="<?php echo e($value->sp_ma); ?>">

					        <div class="w-100"></div>
					        <div class="col-md-12">
					          		
					        </div>
				        	</div>

				        	
				          	<!-- <p><a href="cart.html" class="btn btn-primary py-3 px-5"><?php echo e(__('Mua ngay')); ?></a></p> -->

						</div>
				
				    			
    			</div>
    			<div class="row">
    				<div class="col-lg-6 ">
    					
    				</div>
    				<div class="col-lg-6 ">
    					<div class="sign-btn text-center ">
				        	<button type="submit" class="btn btn-theme btn-primary py-3 px-5"><?php echo e(__('Thêm giỏ hàng')); ?></button>
				        	
				        </div>
    				</div>
    			</div>
    					
    		</form>


<!-- Tien 13/3 -->
    		<!-- <form action="<?php echo e(URL::to('/reviews')); ?>" method="POST">
				<?php echo e(csrf_field()); ?>

					<div class="col-lg-8 ">
    					<div class="sign-btn text-right ">
				     <button type="submit" class="btn btn-theme btn-primary py-3 px-5"><?php echo e(__('Đánh giá')); ?></button>
				       </div>
    				</div>
			</form> -->
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



    		<div class="row mt-5">
          <div class="col-md-12 nav-link-wrap">
            <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link ftco-animate active mr-lg-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true"><?php echo e(__('Mô tả')); ?></a>

              <a class="nav-link ftco-animate mr-lg-1" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false"><?php echo e(__('Nhà sản xuất')); ?></a>

              <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false"><?php echo e(__('Đánh giá')); ?></a>

            </div>
          </div>
          <div class="col-md-12 tab-wrap">
            
            <div class="tab-content bg-light" id="v-pills-tabContent">
            	<?php $__currentLoopData = $details_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
              	<div class="p-4">
              		
	              	<h3 class="mb-4"><?php echo e($value->sp_ten); ?></h3>
	              	<p><?php echo e($value->sp_ghiChu); ?></p>

              	</div>
              </div>

              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
              	<div class="p-4">
	              	<h3 class="mb-4"><?php echo e($value->th_ten); ?></h3>
	              	<p>...</p>
              	</div>

              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
              	<div class="row p-4">
              		
						   		 <div class="col-md-7 "> <!-- Tiên 14/03 -->
						   		 	<h3 class="mb-4"><?php echo e($total_view); ?> <?php echo e(__('nhận xét:')); ?></h3>
						   		 	<?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						   		 	
						   						   			
						   			<div class="review">
								   		<div class="user-img" style="background-image: url(<?php echo e(URL::to('public/frontend/images/avatar.jpg')); ?>)"></div>
								   		<div class="desc">
								   			<h4>
								   				<span class="text-left"><?php echo e($comment->bl_ten); ?></span>
								   				<span class="text-right"><?php echo e(date('d/m/Y H:i',strtotime($comment->created_at))); ?></span>
								   			</h4>
								   			<p class="star">
								   				<span>
								   					<i class="ion-ios-star-outline"></i>
								   					<i class="ion-ios-star-outline"></i>
								   					<i class="ion-ios-star-outline"></i>
								   					<i class="ion-ios-star-outline"></i>
								   					<i class="ion-ios-star-outline"></i>
							   					</span>
							   					<span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
								   			</p>
								   			<p><?php echo e($comment->bl_noidung); ?></p>
								   		</div>
								   	</div>
								   	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>		
								   	
						   		</div>
					
						   		
								<!-- Tiên 14/03 -->
								<?php $__currentLoopData = $all_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="col-md-6">
					    				<div class="well">
					    					<h3><?php echo e(__('Viết nhận xét của bạn')); ?></h3>
					 						
					    					<form method="post" action="<?php echo e(URL::to('/comment/'.$product->sp_ma)); ?>">
					    						<?php echo e(csrf_field()); ?>

					    						<div class="form-group">
					    							<label for="email"><?php echo e(__('Email')); ?></label>
					    							<input required type="email" class="form-control" id="email" name="email">
					    						</div>

					    						<div class="form-group">
					    							<label for="name"><?php echo e(__('Tên')); ?></label>
					    							<input required type="text" class="form-control" id="name" name="name">
					    						</div>
					    						<div class="form-group">
					    							<label for="cm"><?php echo e(__('Nhận xét')); ?></label>
					    							<textarea class="form-control" rows="5" id="cm" name="content"></textarea>
					    						</div>
					    						<div class="form-group text-left">
					    							<button type="submit" class="btn btn-primary"><?php echo e(__('Gửi')); ?></button>
					    						</div>
					    						

					    					</form>
					    					
					    				</div>
					    		</div>
					    		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						   	</div>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>
   <script src="http://www.codermen.com/js/jquery.js"></script>

        <script type="text/javascript">
    	
        $(document).ready(function(){
        	var slt = 1;

            $('select[name="size"]').on('change',function(){
                var ctsp_ma = $(this).val(); // size_id => ctsp_ma
                console.log(ctsp_ma,'ctsp_ma'); 
                
                if(ctsp_ma){

                    $.ajax({

                        url: "<?php echo e(url('getSlt')); ?>",
                        dataType: 'json',
                        type: 'GET',
                        data:{
                        	ctsp_ma: ctsp_ma
                        },
                        success: function(data){
                            console.log(data);
                            
                             $.each(data, function(name,stock){
                                $('input[name="quantity"]').attr({
								       "max" : stock,        // substitute your own
								       "min" : 1          // values (or variables) here
								    });
                              console.log(stock, 'stock');
                              $('input[name="quantity"]').val("1");
                              slt = stock;

                             
                             
                        
                    		});
                        }
                    });
                }
            });


            var quantitiy=0;

		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		        if (quantity < slt){
		            
		            $('#quantity').val(quantity + 1);

		        }
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>1){
		            $('#quantity').val(quantity - 1);
		            }
		    });
        });
    </script>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('shop_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shoesshop\resources\views/pages/product/show_detail.blade.php ENDPATH**/ ?>
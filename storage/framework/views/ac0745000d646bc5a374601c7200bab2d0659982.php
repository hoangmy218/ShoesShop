<?php $__env->startSection('content'); ?>

<div class="main-content">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-file-text bg-blue"></i>
                        <div class="d-inline">
                        <h5>Sản phẩm</h5>
                                           
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
                                <a href="#">Quản lý sản phẩm</a>
                            </li>
                            
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header"><h3>Thêm sản phẩm</h3></div>
                <div class="card-body">
                    <form class="forms-sample" action="<?php echo e(URL::to('/save-product')); ?>" method="POST" enctype="multipart/form-data" >
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                        <label for="exampleInputName1">Tên sản phẩm</label>
                        <input type="text" name="pro_name" class="form-control" placeholder="Tên sản phẩm" required="" title="Vui lòng nhập tên sản phẩm">
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Đơn giá bán</label>
                        <input type="number" class="form-control" name="pro_price" id="exampleInputName1" min="100000" step="1000" max="5000000" required="" placeholder="Giá  tối thiểu 100,000 VND">

                        
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Thương hiệu</label>
                        <select class="form-control" required="" name="pro_brand" id="exampleSelectGender">
                        <option value="">Chọn thương hiệu</option>
                        <?php $__currentLoopData = $list_cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($cate->th_ma); ?>"><?php echo e($cate->th_ten); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Danh mục</label>
                        <select class="form-control" required="" name="pro_cate" id="exampleSelectGender">
                            <option value="">Chọn danh mục</option>
                            <?php $__currentLoopData = $list_brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($brand->dm_ma); ?>"><?php echo e($brand->dm_ten); ?></option>  
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                <table width="100%">
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="exampleSelectGender">Màu sắc</label>
                                <select class="form-control" required="" name="pro_color" id="exampleSelectGender">
                                    <option value="">Chọn màu sắc  </option>
                                    <?php $__currentLoopData = $list_color; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($color->ms_ma); ?>"><?php echo e($color->ms_ten); ?></option>  
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </td>
                        <td> , </td>
                        <td>
                            <div class="form-group">
                                <label for="exampleSelectGender">Kích cỡ</label>
                                <select class="form-control" required="" name="pro_size" id="exampleSelectGender">
                                    <option value="">Chọn kích cỡ</option>
                                    <?php $__currentLoopData = $list_size; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($size->kc_ma); ?>"><?php echo e($size->kc_ten); ?></option>  
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                </table>
                    
                    
                    <div class="form-group">
                                                
                        <label  for="exampleInputEmail1">Hình ảnh</label>
                        
                        <input type="file" name="product_image[]"  class="selectImage" id="images"  multiple required="" pattern="Chọn ít nhât 1 hình và tối đa 3 hình ảnh" />
        
                    </div>
                        
                    
                    

                    <div class="form-group">
                        <label for="exampleTextarea1">Mô tả</label>
                        <textarea required="" class="form-control" name="pro_des" id="exampleTextarea1" rows="4"></textarea>
                    </div>
                    <button type="submit" id="uploadImage" name="add_pro" class="btn btn-primary mr-2">Thêm</button>
                    <button id ="cancel" class="btn btn-light cancel">Hủy</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="cancelModal" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            
                            <div class="modal-header">
                                <h5 class="modal-title" id="demoModalLabel">Hủy thêm sản phẩm mới</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                            Bạn có chắc chắn muốn hủy thêm sản phẩm mới này?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Hủy</button>
                                <button type="button" id="ok_cancel_btn" class="btn btn-success">Xác nhận</button>
                            </div>
                        </div>
                    </div>
                </div>
    
<script src="http://www.codermen.com/js/jquery.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-latest.pack.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.form.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#images').change(function(){
        var fileName = document.getElementById('images').files.length;
        console.log(fileName);
        for (var index = 0; index < fileName; index++) {
            var checkImage=document.getElementById('images').files[index].name;
            var ext = checkImage.substring(checkImage.lastIndexOf('.') + 1).toLowerCase();
            console.log(ext);
            if (ext=="gif"|| ext == "png" || ext == "PNG" || ext == "jpg" || ext == "jpeg")
                {
                    return true;
                }
                else
                    alert("Vui lòng nhập hình đúng định dạng (jpg, jpeg, png).")
                    $('#images').val('');
                    return false; 
                }
    });


        $('#sanpham').parent().addClass('active open');
         $("#themsanpham").addClass("active");
    
    $('#images').change(function(){
        var files = $(this)[0].files;
        var limit = 3;
        if(files.length > limit){
            alert("Bạn chỉ được nhập tối đa 3 hình ảnh");
            $('#images').val('');
            return false;
        }else{
            return true;
        }
    });

});
$(document).on('click','.cancel', function(){
            $('#cancelModal').modal('show');
            });
$('#ok_cancel_btn').click(function(){
            window.location.replace("<?php echo url('/manage-product');?>");
        });
 // $('#cancel').click(function(){
 //     window.location.replace("<?php echo url('/manage-product');?>");
 //            // e.preventDefault();
 //            // window.history.back();
 //        });
</script>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('script_components'); ?>

        <script src="<?php echo e(asset('public/backend/dist/js/theme.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/backend/js/form-components.js')); ?>"></script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\shoesshop7\ShoesShop\resources\views/admin/add_product.blade.php ENDPATH**/ ?>
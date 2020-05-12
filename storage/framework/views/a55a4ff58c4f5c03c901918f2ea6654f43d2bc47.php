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
                                           
                            <?php
                                $message =Session::get('message');
                                if($message){
                                    echo '<span class="text-alert">'.$message.'</span>';
                                              Session::put('message', null);
                                }
                            ?>
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
                                <a href="<?php echo e(URL::to('/manage-product')); ?>">Quản lý sản phẩm</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Chỉnh sửa thông tin sản phẩm</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header"><h3>Chỉnh sửa thông tin sản phẩm</h3></div>
                <div class="card-body">
                    <?php $__currentLoopData = $edit_pro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <form class="forms-sample" action="<?php echo e(URL::to('/capnhat-sanpham/'.$pro->sp_ma)); ?>" method="POST" enctype="multipart/form-data" >
                        <?php echo e(csrf_field()); ?>

                            <div class="form-group">
                                <label for="exampleInputName1">Tên sản phẩm</label>
                                <input type="text" name="pro_name" class="form-control" id="exampleInputName1" value="<?php echo e($pro->sp_ten); ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Đơn giá bán</label>
                                <input type="number" class="form-control" name="pro_price" id="exampleInputName1" min="100000" step="1000" max="5000000" value="<?php echo e($pro->sp_donGiaBan); ?>">
                                
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Đơn giá nhập</label>
                                <input type="number" class="form-control" name="pro_pricegor" id="exampleInputName1" min="100000" step="1000" max="5000000" value="<?php echo e($pro->sp_donGiaNhap); ?>">
                                
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">Thương hiệu</label>
                                <select class="form-control" name="pro_brand" id="exampleSelectGender">
                                <?php $__currentLoopData = $list_brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($brand->th_ma==$pro->th_ma): ?>
                                    <option selected value="<?php echo e($brand->th_ma); ?>"><?php echo e($brand->th_ten); ?></option>
                                <?php else: ?>
                                    <option value="<?php echo e($brand->th_ma); ?>"><?php echo e($brand->th_ten); ?></option>
                                <?php endif; ?>                                            
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">Danh mục</label>
                                <select class="form-control" name="pro_cate" id="exampleSelectGender">
                                <?php $__currentLoopData = $list_cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($cate->dm_ma==$pro->dm_ma): ?>
                                <option selected value="<?php echo e($cate->dm_ma); ?>"><?php echo e($cate->dm_ten); ?></option>
                                <?php else: ?>
                                <option value="<?php echo e($cate->dm_ma); ?>"><?php echo e($cate->dm_ten); ?></option>
                                <?php endif; ?> 
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình ảnh</label>
                                <input type="file" name="product_image[]"  class="selectImage" id="images" max_file_uploads="3" multiple /> 

                            </div>
                            
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Hình ảnh</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php $i=1; ?>
                            <?php $__currentLoopData = $hinh_anh; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>

                                    <th scope="row"><?php echo e($i); ?></th>
                                    
                                    <td><img src="<?php echo e(URL::to('public/upload/product/'.$image->ha_ten)); ?>"height="100" width="100"></td>
                                    <td>
                                        <a id="xoa" onclick="return confirm('Bạn chắc chắn muốn xóa ảnh này?')" href="<?php echo e(URL::to('delete-image-product/'.$image->ha_ma)); ?>"><i class="ik ik-trash-2"></i></a>
                                       
                                    </td>        
                                </tr>
                                
                                <?php $i++; 
                                
                                 ?>
                                
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                            
                            <input type="hidden" name="soluong" id="soluong" value="<?php echo e($i-1); ?>">
                            </tbody>
                            
                        </table>
                            <div class="form-group">
                                <label for="exampleTextarea1">Ghi chú</label>
                                <textarea class="form-control" name="pro_note" id="exampleTextarea1" rows="4"><?php echo e($pro->sp_ghiChu); ?></textarea>
                                </div>
                                <button type="submit" id="capnhat" name="add_pro" class="btn btn-primary mr-2">Cập nhật</button>
                                <button class="btn btn-light">Hủy</button>
                     </form>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

$(document).ready(function(){
    $('#images').change(function(){
        var soluong = $('#soluong').val();
        var files = $(this)[0].files;
        var limit = 3-parseInt(soluong);
        console.log(soluong);
        if(files.length > limit){
            alert("Bạn chỉ được nhập tối đa 3 hình ảnh");
            $('#images').val('');
            return false;
        }else{
            return true;
        }
    });

});
</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-latest.pack.js"></script>
<script>
$(document).ready(function(){
    $('#xoa').click(function(){
        var soluong = $('#soluong').val();
        var x = parseInt(soluong);
        console.log(soluong);
        if(x==1){
            alert("Phải có ít nhất 1 hình ảnh cho sản phẩm này");
            return false;
        }else{
            return true;
        }
    });
    
});
</script>
<script type="text/javascript">
$(document).ready(function(){


        $('#sanpham').parent().addClass('active open');
         $("#danhsachsanpham").addClass("active");

    $('#images').change(function(){
        var fileName = document.getElementById('images').files.length;
        console.log(fileName);
        for (var index = 0; index < fileName; index++) {
            var checkImage=document.getElementById('images').files[index].name;
            var ext = checkImage.substring(checkImage.lastIndexOf('.') + 1).toLowerCase();
            console.log(ext);
            if (ext=="gif"|| ext == "png" || ext == "jpg" || ext == "jpeg")
                {
                    return true;
                }
                else
                    alert("Vui lòng nhập hình đúng định dạng (jpg, jpeg, png).")
                    $('#images').val('');
                    return false; 
                }
    });
});
</script>               
<?php $__env->stopSection(); ?>


<?php $__env->startSection('script_components'); ?>

        <script src="<?php echo e(asset('public/backend/dist/js/theme.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/backend/js/form-components.js')); ?>"></script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\ShoesShopWebsite\shoesshop\resources\views/admin/edit_product.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h2>Dropdown </h2>
            <div class="form-group">
                <label for="size">Select size</label>
                <select name="size" id="size" class="form-control">
                    <option value="">Size</option>
                    <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($value->ctsp_kichCo); ?>"><?php echo e($value->ctsp_kichCo); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                
            </div>
             <div class="form-group">
                <label for="size">Select stock number</label>
                <select name="stock" id="stock" class="form-control">
                    <option value="">Stock</option>
                   
                </select>
                
            </div>
        </div>
       
        

    <script src="http://www.codermen.com/js/jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('select[name="size"]').on('change',function(){
                var size_id = $(this).val();
                console.log(size_id);

                if(size_id){

                    $.ajax({

                        url: "<?php echo e(url('getStock')); ?>?size_id="+size_id,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data){
                            console.log(data);
                             $('select[name="stock"]').empty();
                             $.each(data, function(name,stock){
                                $('select[name="stock"]').append('<option value="'+stock+'">'+stock+'</option>');
                             });
                        }
                    });
                }else{
                     $('select[name="stock"]').empty();
                }
            });
        });
    </script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\GitHub\ShoesShopWebsite\shoesshop\resources\views/welcome.blade.php ENDPATH**/ ?>
@extends('admin_layout')
@section('content')

<div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-credit-card bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Quản lý người dùng</h5>
                                            {{-- <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="{{URL::to('/dashboard')}}"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item active">
                                                <a href="#">Quản lý người dùng</a>
                                            </li>
                                            {{-- <li class="breadcrumb-item active" aria-current="page">Bootstrap Tables</li> --}}
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <?php
                            $message = Session::get('fail_message');
                            if ($message){
                                echo '<span class="alert alert-danger">'.$message."</span>";
                                
                                Session::put('fail_message',null);
                            }
                            $message = Session::get('success_message');
                            if ($message){
                                echo '<span class="alert alert-success">'.$message."</span>";
                                
                                Session::put('success_message',null);
                            }
                        ?>
                        <div class="row">
                            <div class="col-md-12">
								<div class="card">
                                    <div class="card-header d-block">
                                        <h3>Danh sách người dùng</h3>
                                        <?php
                                        $message =Session::get('message');
                                        if($message){
                                          echo '<span class="text-alert">'.$message.'</span>';
                                          Session::put('message', null);
                                        }
                                      ?>
                                    </div>
                                    <div class="card-body p-0 table-border-style">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>STT</th>
                                                        <th>Mã Người dùng</th>
                                                        <th>Tên người dùng</th>
                                                        <th>Thao tác</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php {{$i=1;}} ?>
                                                	@foreach( $list_customer as $key => $customer)

                                                    <tr>
                                                        <th scope="row">{{$i}}</th>
                                                        <td>{{$customer->nd_ma}}</td>
                                                        <td>{{$customer->nd_ten}}</td>
                                                        <td><span class="text-ellipsis">
                                                          <?php
                                                          if($customer->nd_trangThai==0){
                                                            ?>
                                                            {{-- <a href ="{{URL::to('unactive-customer/'.$customer->nd_ma)}}"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a> --}}
                                                            <span class="{{-- ik ik-x-circle --}}fa-thumb-styling fa fa-thumbs-up cancel text-green"  id="{{$customer->nd_trangThai}}"><input id="tong" name="tong" value="{{$customer->nd_ma}}" type="hidden"></span>
                                                            <?php
                                                          }else{
                                                             ?>
                                                            <span class="{{-- ik ik-x-circle --}} fa-thumb-styling fa fa-thumbs-down cancel text-red" id="{{$customer->nd_trangThai}}"><input id="tong" name="tong" value="{{$customer->nd_ma}}" type="hidden"></span>
                                                            {{-- <a href="{{URL::to('active-customer/'.$customer->nd_ma)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a> --}}
                                                          <?php
                                                          }

                                                          ?>
                                                        </span></td>
                                                        
                                                    </tr>
                                                    <?php {{$i++;}} ?>
                                                   	@endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="cancelModal" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            
                            <div class="modal-header">
                                <h5 class="modal-title" id="demoModalLabel">Vô hiệu hóa người dùng</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                            Bạn có chắc chắn muốn vô hiệu hóa người dùng này?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Hủy</button>
                                <button type="button" id="ok_vhh_btn" class="btn btn-success">Xác nhận</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="cancelModal1" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            
                            <div class="modal-header">
                                <h5 class="modal-title" id="demoModalLabel">Vô hiệu hóa người dùng</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                            Bạn có chắc chắn muốn hủy vô hiệu hóa người dùng này?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Hủy</button>
                                <button type="button" id="ok_hvhh_btn" class="btn btn-success">Xác nhận</button>
                            </div>
                        </div>
                    </div>
                </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

        $( '#nguoidung').parent().addClass('active open');
         $("#vohieuhoa").addClass("active");
          //dat thi gian tat thong bao
        setTimeout(function(){
           $("span.alert").remove();
        }, 5000 ); // 5 secs

        $(document).on('click','.cancel', function(){
            nd_trangThai = $(this).attr('id');
            nd_ma =$('#tong').val();
            console.log(nd_ma);
            if(nd_trangThai==0){
                $('#cancelModal').modal('show');
            }else{
                $('#cancelModal1').modal('show');
            }
            

        });

        $('#ok_vhh_btn').click(function(){
            $.ajax({
                url: '<?php echo url('unactive-customer');?>/'+nd_ma,
                type: 'get',
                success: function(data)
                {
                    window.location.replace("<?php echo url('/manage-customer');?>");
                }
            });
        });
        $('#ok_hvhh_btn').click(function(){
            $.ajax({
                url: '<?php echo url('active-customer');?>/'+nd_ma,
                type: 'get',
                success: function(data)
                {
                    window.location.replace("<?php echo url('/manage-customer');?>");
                }
            });
        });

     });
</script>
            


@endsection
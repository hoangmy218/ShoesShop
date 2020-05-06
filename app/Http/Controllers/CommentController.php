<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Carbon\Carbon;
use App\Comment;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

session_start();

class CommentController extends Controller
{
    //Tien 21/03
     public function authLogin(){
        $admin_id = Session::get('nd_ma');
        if ($admin_id) 
            return Redirect::to('/dashboard'); 
        else 
            return Redirect::to('/admin')->send();
    }


    // Tiên 14/03
    public function postComment(Request $request, $id){
        $data = new Comment; // cách 1 insert vào model Comment
        
        
        $data->bl_email = $request->email;
        $data->bl_ten = $request->name;
        $data->bl_noidung = $request->content;
        $data->sp_ma = $id;
        $data->save();
    
        return back(); 

        //$data= array(); // cách 2 insert vo bảng
        // $data['bl_email'] = $request->email;
        // $data['bl_ten'] = $request->name;
        // $data['bl_noidung'] = $request->content;
        // $data['sp_ma'] = $id;
        // DB::table('binhluan')->insert($data); 
        // return Redirect::to('/show_detail/'.$id); 
    }   
    //Tien 21/03
    public function showComment(){
        $this->authLogin();
        $list_comments = DB::table('binhluan')->get();
        $manager_comment = view('admin.manage_comment')->with('list_comments', $list_comments);
        return view('admin_layout')->with('admin.manage_comment', $manager_comment);
        /*return view('admin.manage_category');*/
    }

    public function active_comment($Controll_bl_id){
            //$this->AuthLogin();
            DB::table('binhluan')->where('bl_id', $Controll_bl_id)->update(['bl_trangThai'=>0]);
            Session::put('message', 'Hiển thị bình luận thành công');
            return Redirect::to('manage-comment');
    }
    public function unactive_comment($Controll_bl_id){
            //$this->AuthLogin();
           DB::table('binhluan')->where('bl_id', $Controll_bl_id)->update(['bl_trangThai'=>1]);
            Session::put('message', 'Ẩn bình luận thành công!');
            return Redirect::to('manage-comment');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
session_start();
class PayController extends Controller
{
    public function authLogin(){
        $admin_id = Session::get('nd_ma');
        if ($admin_id) 
            return Redirect::to('/dashboard'); 
        else 
            return Redirect::to('/admin')->send();
    }

    public function manage_pay(){
    	 $this->authLogin();
    	$list_pay = DB::table('hinhthucthanhtoan')->get();
    	$manager_pay = view('admin.manage_pay')->with('list_pay', $list_pay);
    	return view('admin_layout')->with('admin.manage_pay', $manager_pay);
    }
    public function add_pay(){
    	 $this->authLogin();
    	 return view('admin.add_pay');
    }
    public function save_pay(Request $request){
        try{
            $this->authLogin();
        $data = array();
        $data['httt_ten'] = $request->pay_name;
        Db::table('hinhthucthanhtoan')->insert($data);
        Session::put('success_message','Thêm hình thức thanh toán thành công!');
        }catch (\Illuminate\Database\QueryException $e) {
            Session::put('fail_message','Thêm hình thức thanh toán không thành công!');
        }
        return Redirect::to('/manage-pay'); 
    	

    }
    public function edit_pay($edit_id){
        $this->authLogin();     
        $list_pay = DB::table("hinhthucthanhtoan")->where('httt_ma', $edit_id)->orderby('httt_ma','desc')->get();
        
        // echo $hinh_anh;
        return view('admin.edit_pay')->with('list_pay', $list_pay);
    }
    public function update_pay(Request $request, $update_id){
        try{
            $this->authLogin();  
        $data= array();
        $data['httt_ten']=$request->pay_name;
        DB::table('hinhthucthanhtoan')->where('httt_ma', $update_id)->update($data);
        Session::put('success_message','Cập nhật hình thức thanh toánh thành công!');
        }catch (\Illuminate\Database\QueryException $e) {
            Session::put('fail_message','Cập nhật hình thức vthanh toán không thành công!');
    	}
        return Redirect::to('/manage-pay');
    }
    public function delete_pay($delete_id){
        try {
            $this->authLogin();  
        DB::table('hinhthucthanhtoan')->where('httt_ma', $delete_id)->delete();
        Session::put('success_message','Xóa hình thức thanh toán thành công!');
        }catch (\Illuminate\Database\QueryException $e) {
            Session::put('fail_message','Xóa hình thức thanh toán không thành công!');
        }
        // return Redirect::to('/manage-pay');
    }
}

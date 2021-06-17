<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\order;
use App\Model\product;
use Illuminate\Support\Facades\Redirect;

class OrderController extends Controller
{
    public function order(){
        $data['sp'] = order::where('order_status',0)->where('delete',0)->paginate(6);
        return view('backend.order.order',$data);
    }
    //xem đơn hàng
    public function view_order($oder_id){
        $data['order'] = order::find($oder_id);
        return view('backend.order.vieworder',$data);
    }
    //xử lý đơn hàng
    public function pro_order($oder_id){
        $order = order::find($oder_id);
        $order->order_status = 1;
        $order->save();
        return Redirect::to('admin/order/show-order');
    }
    public function show_order(){
        $data['order'] = order::where('order_status',1)->where('delivery',0)->where('delete',0)->get();
        return view('backend.order.pro_order',$data);
    }
    //đơn hàng đang giao
    public function del_order($oder_id){
        $order = order::find($oder_id);
        $order->delivery = 1;
        $order->save();
        return Redirect::to('admin/order/show-del-order');
    }
    public function show_del_order(){
        $data['od'] = order::where('delivery',1)->where('success',0)->get();
        return view('backend.order.del',$data);
    }

    //đơn hàng giao thành công
    public function success($oder_id){
        $order = order::find($oder_id);
        $order->success = 1;
        $order->save();
        return Redirect::to('admin/order/show-success');
    }
    public function show_success(){
        $data['order'] = order::where('success',1)->get();
        return view('backend.order.success',$data);
    }
    //Đơn hàng đã hủy
    public function delete($oder_id){
        $order = order::find($oder_id);
        $order->delete = 1;
        $order->save();
        return Redirect::to('admin/order/show-delete');
    }
    public function show_delete(){
        $data['order'] = order::where('delete',1)->get();
        return view('backend.order.delete',$data);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\bill;
use Illuminate\Support\Facades\Redirect;

class BillController extends Controller
{
    public function bill(){
        $data['sp'] = bill::paginate(3);
        return view('backend.bill.bill',$data);
    }
    public function addbill(){
        return view('backend.bill.addbill');
    }
    public function save_bill(Request $request){
        $data= new bill();
        $data['supplier_id'] = $request->supplier_id;
        $data['bill_total'] = $request->bill_total;
        $data['bill_time'] = $request->bill_time;
        $data->save();
        return Redirect::to('/admin/bill/');
    }
    public function editbill($bill_id){
        $data['sp']= bill::all();
        $data['edit'] = bill::find($bill_id);
        return view('backend.bill.editbill',$data);
    }
    public function save_edit_bill(Request $request,$bill_id){
        $sp = bill::find($bill_id);
        $sp['supplier_id'] = $request->supplier_id;
        $sp['bill_total'] = $request->bill_total;
        $sp['bill_time'] = $request->bill_time;
        $sp->save();
        return Redirect::to('/admin/bill/');
    }
    public function getDelete($id){
        bill::destroy($id);
        return Redirect::to('/admin/bill/');
    }
}

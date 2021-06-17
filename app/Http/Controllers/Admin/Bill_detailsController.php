<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\bill_details;
use Illuminate\Support\Facades\Redirect;

class Bill_detailsController extends Controller
{
    public function billdetails(){
        $data['sp'] = bill_details::paginate(3);
        return view('backend.bill_details.billdetails',$data);
    }
    public function addbilldetails(){
        return view('backend.bill_details.addbilldetails');
    }
    public function save_billdetails(Request $request){
        $data= new bill_details();
        $data['bill_id'] = $request->bill_id;
        $data['configuration_id'] = $request->configuration_id;
        $data['bill_details_quantily'] = $request->bill_details_quantily;
        $data['bill_details_price'] = $request->bill_details_price;
        $data->save();
        return Redirect::to('/admin/bill_details/');
    }
    public function editbilldetails($bill_details_id){
        $data['sp']= bill_details::all();
        $data['edit'] = bill_details::find($bill_details_id);
        return view('backend.bill_details.editbilldetails',$data);
    }
    public function save_edit_billdetails(Request $request,$bill_details_id){
        $sp = bill_details::find($bill_details_id);
        $sp['bill_id'] = $request->bill_id;
        $sp['configuration_id'] = $request->configuration_id;
        $sp['bill_details_quantily'] = $request->bill_details_quantily;
        $sp['bill_details_price'] = $request->bill_details_price;
        $sp->save();
        return Redirect::to('/admin/bill_details/');
    }
    public function getDelete($id){
        bill_details::destroy($id);
        return Redirect::to('/admin/bill_details/');
    }
}

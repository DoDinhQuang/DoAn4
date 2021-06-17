<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\supplier;
use Illuminate\Support\Facades\Redirect;

class SupplierController extends Controller
{
    public function supplier(){
        $data['sp'] = supplier::paginate(3);
        return view('backend.supplier.supplier',$data);
    }
    public function addsupplier(){
        return view('backend.supplier.addsupplier');
    }
    public function save_supplier(Request $request){
        $data= new supplier();
        $data['supplier_name'] = $request->supplier_name;
        $data['supplier_address'] = $request->supplier_address;
        $data['supplier_phone'] = $request->supplier_phone;
        $data['supplier_email'] = $request->supplier_email;
        $data->save();
        return Redirect::to('/admin/supplier/');
    }
    public function editsupplier($supplier_id){
        $data['sp']= supplier::all();
        $data['edit'] = supplier::find($supplier_id);
        return view('backend.supplier.editsupplier',$data);
    }
    public function save_edit_supplier(Request $request,$supplier_id){
        $sp = supplier::find($supplier_id);
        $sp['supplier_name'] = $request->supplier_name;
        $sp['supplier_address'] = $request->supplier_address;
        $sp['supplier_phone'] = $request->supplier_phone;
        $sp['supplier_email'] = $request->supplier_email;
        $sp->save();
        return Redirect::to('/admin/supplier/');
    }
    public function getDelete($id){
        supplier::destroy($id);
        return Redirect::to('/admin/supplier/');
    }
}

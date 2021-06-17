<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\phone_color;
use Illuminate\Support\Facades\Redirect;

class Phone_colorController extends Controller
{
    public function phonecolor(){
        $data['sp'] = phone_color::paginate(3);
        return view('backend.phone_color.phonecolor',$data);
    }
    public function addphonecolor(){
        return view('backend.phone_color.addphonecolor');
    }
    public function save_phonecolor(Request $request){
        $data= new phone_color();
        $data['product_id'] = $request->product_id;
        $data['phone_color_hue'] = $request->phone_color_hue;
        $data->save();
        return Redirect::to('/admin/phone_color/');
    }
    public function editphonecolor($phone_color_id){
        $data['sp']= phone_color::all();
        $data['edit'] = phone_color::find($phone_color_id);
        return view('backend.phone_color.editphonecolor',$data);
    }
    public function save_edit_phonecolor(Request $request,$phone_color_id){
        $sp = phone_color::find($phone_color_id);
        $sp['product_id'] = $request->product_id;
        $sp['phone_color_hue'] = $request->phone_color_hue;
        $sp->save();
        return Redirect::to('/admin/phone_color/');
    }
    public function getDelete($id){
        phone_color::destroy($id);
        return Redirect::to('/admin/phone_color/');
    }
}

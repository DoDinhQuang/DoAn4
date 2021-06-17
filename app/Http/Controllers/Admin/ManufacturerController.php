<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\manufacturer;
use Illuminate\Support\Facades\Redirect;
use Str;

class ManufacturerController extends Controller
{
    public function manufacturer(){
        $data['sp'] = manufacturer::paginate(3);
        return view('backend.manufacturer.manufacturer',$data);
    }
    public function addmanufacturer(){
        return view('backend.manufacturer.addmanufacturer');
    }
    public function save_manufacturer(Request $request){
        $name_image = $request->manufacturer_img->getClientOriginalName();
        $data= new manufacturer();
        $data['manufacturer_name'] = $request->manufacturer_name;
        $data['manufacturer_description'] = $request->manufacturer_description;
        $data['manufacturer_img'] = $name_image;
        $data->save();
        $request->manufacturer_img->storeAs('upload',$name_image);
        return Redirect::to('/admin/manufacturer/');
    }
    public function editmanufacturer($manufacturer_id){
        $data['sp']= manufacturer::all();
        $data['edit'] = manufacturer::find($manufacturer_id);
        return view('backend.manufacturer.editmanufacturer',$data);
    }
    public function save_edit_manufacturer(Request $request,$manufacturer_id){
        $sp = manufacturer::find($manufacturer_id);
        $sp['manufacturer_img'] = $request->manufacturer_img;
        $sp['manufacturer_name'] = $request->manufacturer_name;
        $sp['manufacturer_description'] = $request->manufacturer_description;
        if($request->hasFile('manufacturer_img'))
        {
            $name_image = $request->manufacturer_img->getClientOriginalName();
            $sp['manufacturer_img'] = $name_image;
            $request->manufacturer_img->storeAs('upload',$name_image);
        }
        $sp->save();
        return Redirect::to('/admin/manufacturer/');
    }
    public function getDelete($id){
        manufacturer::destroy($id);
        return Redirect::to('/admin/manufacturer/');
    }
}

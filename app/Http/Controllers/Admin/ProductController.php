<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\product;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function product(){
        $data['sp'] = product::paginate(3);
        return view('backend.product.product',$data);
    }
    public function addproduct(){
        return view('backend.product.addproduct');
    }
    public function save_product(Request $request){
        $name_image = $request->product_img->getClientOriginalName();
        $data= new product();
        $data['product_name'] = $request->product_name;
        $data['manufacturer_id'] = $request->manufacturer_id;
        $data['product_img'] = $name_image;
        $data['product_screen_size'] = $request->product_screen_size;
        $data['product_resolution'] = $request->product_resolution;
        $data['product_operating'] = $request->product_operating;
        $data['product_processor_chip'] = $request->product_processor_chip;
        $data['product_front_camera'] = $request->product_front_camera;
        $data['product_rear_camera'] = $request->product_rear_camera;
        $data['product_battery_capacity'] = $request->product_battery_capacity;
        $data['product_sim'] = $request->product_sim;
        $data['product_hot'] = $request->product_hot;
        $data['product_new'] = $request->product_new;
        $data->save();
        $request->product_img->storeAs('upload',$name_image);
        return Redirect::to('/admin/product/');
    }
    public function editproduct($product_id){
        $data['sp']= product::all();
        $data['edit'] = product::find($product_id);
        return view('backend.product.editproduct',$data);
    }
    public function save_edit_product(Request $request,$product_id){
        $sp = product::find($product_id);
        $sp['product_name'] = $request->product_name;
        $sp['manufacturer_id'] = $request->manufacturer_id;
        $sp['product_screen_size'] = $request->product_screen_size;
        $sp['product_resolution'] = $request->product_resolution;
        $sp['product_operating'] = $request->product_operating;
        $sp['product_processor_chip'] = $request->product_processor_chip;
        $sp['product_front_camera'] = $request->product_front_camera;
        $sp['product_rear_camera'] = $request->product_rear_camera;
        $sp['product_battery_capacity'] = $request->product_battery_capacity;
        $sp['product_sim'] = $request->product_sim;
        $sp['product_hot'] = $request->product_hot;
        $sp['product_new'] = $request->product_new;
        if($request->hasFile('product_img'))
        {
            $name_image = $request->product_img->getClientOriginalName();
            $sp['product_img'] = $name_image;
            $request->product_img->storeAs('upload',$name_image);
        }
        $sp->save();
        return Redirect::to('/admin/product/');
    }
    public function getDelete($id){
        product::destroy($id);
        return Redirect::to('/admin/product/');
    }
}

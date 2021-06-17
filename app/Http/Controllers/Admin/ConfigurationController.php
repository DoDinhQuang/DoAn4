<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\configuration;
use Illuminate\Support\Facades\Redirect;

class ConfigurationController extends Controller
{
    public function configuration(){
        $data['sp'] = Configuration::paginate(3);
        return view('backend.configuration.configuration',$data);
    }
    public function addconfiguration(){
        return view('backend.configuration.addconfiguration');
    }
    public function save_configuration(Request $request){
        $data= new configuration();
        $data['product_id'] = $request->product_id;
        $data['configuration_ram'] = $request->configuration_ram;
        $data['configuration_interna_memory'] = $request->configuration_interna_memory;
        $data['configuration_price'] = $request->configuration_price;
        $data['configuration_number'] = $request->configuration_number;
        $data->save();
        return Redirect::to('/admin/configuration/');
    }
    public function editconfiguration($configuration_id){
        $data['sp']= configuration::all();
        $data['edit'] = configuration::find($configuration_id);
        return view('backend.configuration.editconfiguration',$data);
    }
    public function save_edit_configuration(Request $request,$configuration_id){
        $sp = configuration::find($configuration_id);
        $sp['product_id'] = $request->product_id;
        $sp['configuration_ram'] = $request->configuration_ram;
        $sp['configuration_interna_memory'] = $request->configuration_interna_memory;
        $sp['configuration_price'] = $request->configuration_price;
        $sp['configuration_number'] = $request->configuration_number;
        $sp->save();
        return Redirect::to('/admin/configuration/');
    }
    public function getDelete($id){
        configuration::destroy($id);
        return Redirect::to('/admin/configuration/');
    }
}

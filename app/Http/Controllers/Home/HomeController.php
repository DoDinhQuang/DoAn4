<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Model\manufacturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Model\product;
use App\Cart;
use App\Model\order;
use App\Model\order_details;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
class HomeController extends Controller
{
    public function index()

    {
        $data['product_hot'] = product::where('product_hot',1)->orderBy('updated_at','desc')->take(10)->get();
        $data['product_new'] = product::where('product_new',1)->orderBy('updated_at','desc')->take(3)->get();
        return view('frontend.layout.home',$data);

    }
    //Menu chi tiết
    public function getManufacturer($type){
        $sp = product::where('manufacturer_id',$type)->get();
        $sp_other = product::where('manufacturer_id','<>',$type);
        $type = manufacturer::all();
        return view('frontend.layout.manufacturer_type',compact('sp','type','sp_other'));
    }

    //chi tiet
    public function getType_details(Request $req){
        $typ = product::where('product_id',$req->product_id)->first();
        $sp_similar = product::where('manufacturer_id',$typ->manufacturer_id)->get()->take(3);
        $hot = product::where('product_hot',1)->orderBy('updated_at','desc')->take(10)->get();
        $new = product::where('product_new',1)->orderBy('updated_at','desc')->take(3)->get();
        return view('frontend.layout.type_details',compact('typ','hot','new','sp_similar'));

    }
    //cart
    public function addToCart($product_id){
        $product = product::find($product_id);
        $cart = session()->get('cart');
        if(isset($cart[$product_id])){
            $cart[$product_id]['quantity'] = $cart[$product_id]['quantity'] + 1;
        } else {
            $cart[$product_id] = [
                'name' => $product->product_name,
                'price' => $product->getPrice->configuration_price,
                'quantity' => 1,
                'image' => $product->product_img,
                'product_id' =>$product_id,
                //'color' =>$product->getColor->phone_color_hue
            ];

        }
        $count = count($cart);
        session()->put('cart',$cart);
        return response()->json([
            'code' => 200,
            'messega'=> 'success',
            'count'=>$count
        ],200);

    }
    public function showCart(){
        $carts= session()->get('cart');
        return view('frontend.layout.cart',compact('carts'));
    }

    public function updateToCart(Request $request){ 
        if($request->id && $request->quatity){
            $carts = session()->get('cart');
            $carts[$request->id]['quantity'] = $request->quatity;
            session()->put('cart',$carts);
            $carts = session()->get('cart');
            $cartConpodent = view('frontend.layout.conpondent.cart_conpondent', compact('carts'))->render();
            return response()->json(['cartConpodent' => $cartConpodent, 'code' => 200],200);
        }
    }
    public function deleteCart(Request $request){
        if($request->id){
            $carts = session()->get('cart');
            unset($carts[$request->id]);
            session()->put('cart',$carts);
            $carts = session()->get('cart');
            $cartConpodent = view('frontend.layout.conpondent.cart_conpondent', compact('carts'))->render();
            return response()->json(['cartConpodent' => $cartConpodent, 'code' => 200],200);
        }
    }
    //cart details
    public function save_cartdetalis(Request $request){
        $product = product::find($request->id);
        $cart = session()->get('cart');
        $id = $request->id;
        if($cart!=null){
            if(isset($cart[$id])){
                $cart[$request->id]['quantity']+=$request->quantity;
            }
            else{
                $cart[$id] = [
                    'name' => $product->product_name,
                    'price' => $product->getPrice->configuration_price,
                    'quantity' => $request->quantity,
                    'image' => $product->product_img,
                    'product_id' =>$id,
                ];
            }
        }
        else {
            $cart[$request->id] = [
                'name' => $product->product_name,
                'price' => $product->getPrice->configuration_price,
                'quantity' => $request->quantity,
                'image' => $product->product_img,
                'product_id' =>$request->id,
            ];
        }
        session()->put('cart',$cart);
        return response()->json([
            'code'=>200,
            'message'=>'success'
        ]);
    }
    //checkout
    public function getCheckout(){
        $carts = session()->get('cart');
        return view('frontend.layout.checkout',compact('carts'));
    }
    public function check_out_success(){
        return view('frontend.layout.checkout_success');
    }
    //login
    public function getLogin(){
        return view('frontend.layout.login');
    }
    public function login_customer(Request $request){
        $email = $request->email_account;
        $password = $request->password_account;
        $result = DB::table('customer')->where('customer_email',$email)->where('customer_password',$password)->first();
        if($result){
            Session::put('customer_id',$result->customer_id);
            Session::put('customer_name',$result->customer_name);
            return Redirect::to('home');
        }else{
            return Redirect::to('home/login-user');
        }
    }
    //logout
    public function getLogout(){
        Session::put('customer_id','');
        return Redirect::to('home');
    }
    public function add_customer(Request $request){
        $data = array();
        $data['customer_email'] = $request->customer_email;
        $data['customer_password'] = $request->customer_password;
        $data['customer_name'] = $request->customer_name;
        $data['customer_phone'] = $request->customer_phone;
        $data['customer_address'] = $request->customer_address;
        $customer_id = DB::table('customer')->insertGetId($data);
        Session::put('customer_id',$customer_id);
        Session::put('customer_name',$request->customer_name);
        return Redirect::to('home/login-user');
    }
    public function Logout(){
        Session::put('customer_id','');
        return view('frontend.layout.logout');
    }
    //timkiem
    public function search(Request $request){
        $product = product::where('product_name','like','%'.$request->key.'%')->get();
        return view('frontend.layout.search',compact('product'));
    }
    //luu thong tin don hang
    public function saveInfoShoppingCart(Request $request){
        $carts = session()->get('cart');
        $order =array();
        $order['order_name'] = $request->order_name;
        $order['customer_id'] = Session::get('customer_id');
        $order['order_address'] = $request->order_address;
        $order['order_email'] = $request->order_email;
        $order['order_phone'] = $request->order_phone;
        $order['order_note'] = $request->order_note;
        $order['order_status'] = 0;
        $order['delivery'] = 0;
        $order['delete'] = 0;
        $order['success'] = 0;
        $order_id= DB::table('order')->insertGetId($order);
        Session::put('order_id',$order_id);
            foreach($carts as $v_cart){
                $order_details = array();
                $order_details['order_id'] = Session::get('order_id');
                $order_details['product_id'] = $v_cart['product_id'];
                $order_details['quantily'] = $v_cart['quantity'];
                $order_details['price'] = $v_cart['price'];
                $order_details= DB::table('order_details')->insertGetId($order_details);
                Session::put('cart');
                unset($carts[$v_cart['product_id']]);
        }

        return Redirect::to('home/check_out_success');

    }

    //chi tiết
    public function contact(){
        return view('frontend.layout.contact');
    }

    //Giới thiệu
    public function about(){
        return view('frontend.layout.about');
    }
}


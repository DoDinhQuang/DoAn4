<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//LoginAdmin
Route::group(['namespace' => 'Admin'], function () {
    Route::group(['prefix' => 'login',], function () {
        Route::get('/', 'LoginController@getLogin');
        Route::post('/', 'LoginController@postLogin');
    });
    Route::get('logout', 'HomeController@logout');


    Route::group(['prefix' => 'admin',], function () {
        Route::get('/', 'HomeController@index');

        Route::prefix('product')->group(function () {
            Route::get('/', 'ProductController@product');

            Route::get('/add_product', 'ProductController@addproduct');
            Route::post('/save_product', 'ProductController@save_product');
            Route::get('edit_product/{id}','ProductController@editproduct');
            Route::post('edit_product/{id}','ProductController@save_edit_product');
            Route::get('delete/{id}', 'ProductController@getDelete');
        });

        Route::prefix('manufacturer')->group(function () {
            Route::get('/', 'ManufacturerController@manufacturer');

            Route::get('/add_manufacturer', 'ManufacturerController@addmanufacturer');
            Route::post('/save_manufacturer', 'ManufacturerController@save_manufacturer');
            Route::get('edit_manufacturer/{id}','ManufacturerController@editmanufacturer');
            Route::post('edit_manufacturer/{id}','ManufacturerController@save_edit_manufacturer');
            Route::get('delete/{id}', 'ManufacturerController@getDelete');
        });

        Route::prefix('supplier')->group(function () {
            Route::get('/', 'SupplierController@supplier');

            Route::get('/add_supplier', 'SupplierController@addsupplier');
            Route::post('/save_supplier', 'SupplierController@save_supplier');
            Route::get('edit_supplier/{id}','SupplierController@editsupplier');
            Route::post('edit_supplier/{id}','SupplierController@save_edit_supplier');
            Route::get('delete/{id}', 'SupplierController@getDelete');
        });

        Route::prefix('configuration')->group(function () {
            Route::get('/', 'ConfigurationController@configuration');

            Route::get('/add_configuration', 'ConfigurationController@addconfiguration');
            Route::post('/save_configuration', 'ConfigurationController@save_configuration');
            Route::get('edit_configuration/{id}','ConfigurationController@editconfiguration');
            Route::post('edit_configuration/{id}','ConfigurationController@save_edit_configuration');
            Route::get('delete/{id}', 'ConfigurationController@getDelete');
        });

        Route::prefix('phone_color')->group(function () {
            Route::get('/', 'Phone_colorController@phonecolor');

            Route::get('/add_phonecolor', 'Phone_colorController@addphonecolor');
            Route::post('/save_phonecolor', 'Phone_colorController@save_phonecolor');
            Route::get('edit_phonecolor/{id}','Phone_colorController@editphonecolor');
            Route::post('edit_phonecolor/{id}','Phone_colorController@save_edit_phonecolor');
            Route::get('delete/{id}', 'Phone_colorController@getDelete');
        });

        Route::prefix('bill')->group(function () {
            Route::get('/', 'BillController@bill');

            Route::get('/add_bill', 'BillController@addbill');
            Route::post('/save_bill', 'BillController@save_bill');
            Route::get('edit_bill/{id}','BillController@editbill');
            Route::post('edit_bill/{id}','BillController@save_edit_bill');
            Route::get('delete/{id}', 'BillController@getDelete');
        });

        Route::prefix('bill_details')->group(function () {
            Route::get('/', 'Bill_detailsController@billdetails');

            Route::get('/add_billdetails', 'Bill_detailsController@addbilldetails');
            Route::post('/save_billdetails', 'Bill_detailsController@save_billdetails');
            Route::get('edit_billdetails/{id}','Bill_detailsController@editbilldetails');
            Route::post('edit_billdetails/{id}','Bill_detailsController@save_edit_billdetails');
            Route::get('delete/{id}', 'Bill_detailsController@getDelete');
        });

        Route::prefix('order')->group(function () {
            Route::get('/', 'OrderController@order');
            Route::get('view-oder/{id}','OrderController@view_order');

            Route::get('pro_order/{id}','OrderController@pro_order');
            Route::get('show-order','OrderController@show_order');

            Route::get('del-order/{id}','OrderController@del_order');
            Route::get('show-del-order','OrderController@show_del_order');

            Route::get('success/{id}','OrderController@success');
            Route::get('show-success','OrderController@show_success');

            Route::get('delete/{id}','OrderController@delete');
            Route::get('show-delete','OrderController@show_delete');

        });
    });
});

Route::group(['namespace' => 'Home'], function () {
    Route::group(['prefix' => 'home',], function () {
        Route::get('/', 'HomeController@index');
        //menu
        Route::get('manufacturer_type/{type}', 'HomeController@getManufacturer');
        //chitiet
        Route::get('type_details/{product_id}', 'HomeController@getType_details');
        //cart
        Route::get('add-to-cart/{product_id}','HomeController@addToCart')->name(name:'addToCart');
        Route::get('show-cart','HomeController@showCart')->name(name:'showCart');
        Route::get('update-to-cart','HomeController@updateToCart')->name(name:'updateToCart');
        Route::get('delete-cart','HomeController@deleteCart')->name(name:'deleteCart');
        //cartdetails
        Route::get('save-cartdetalis','HomeController@save_cartdetalis');
        //checkout
        Route::get('check-out', 'HomeController@getCheckout');
        //dangnhap
        Route::get('login-user', 'HomeController@getLogin');
        Route::post('login-customer','HomeController@login_customer');
        //dangky
        Route::get('logout-user', 'HomeController@getLogout');
        Route::get('logout', 'HomeController@Logout');
        Route::post('add-customer','HomeController@add_customer');
        //timkiem
        Route::get('search','HomeController@search');
        //luu thong tin don hang
        Route::post('saveInfoShoppingCart','HomeController@saveInfoShoppingCart');
        Route::get('check_out_success','HomeController@check_out_success');

        //Chi tiết
        Route::get('contact', 'HomeController@contact');

        //Giới thiệu
        Route::get('about', 'HomeController@about');
});
});

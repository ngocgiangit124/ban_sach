<?php
use Gloudemans\Shoppingcart\Facades\Cart;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/test-create','BackEnd\NhanVienController@testCreate');
Route::get('/admin/login', ['as' => 'login', 'uses' => 'BackEnd\HomeController@getLogin']);
//Route::get('/login','BackEnd\HomeController@getLogin');
Route::get('/admin/logout','BackEnd\HomeController@logout');
Route::post('/admin/login','BackEnd\HomeController@postLogin');

//Route::get('/contact','BackEnd\HomeController@logout');


Route::get('/pdf','BackEnd\HomeController@pdf');
Route::get('/pdf1','BackEnd\HomeController@pdf1');

Route::get('/search','FrontEnd\HomeController@search');
Route::post('/search','FrontEnd\HomeController@search');

Route::group(['prefix' => 'admin', 'middleware' => 'auth.simple'], function() {

    Route::get('/','BackEnd\NhanVienController@index');
    Route::get('/danhmuc/{Slug}/sanpham', 'BackEnd\SanPhamController@listSanPham');
    Route::get('/danhmuc/', 'BackEnd\TheLoaiController@index');
    Route::post('/danhmuc', 'BackEnd\TheLoaiController@store');
    Route::get('/danhmuc-create', 'BackEnd\TheLoaiController@create');
    Route::get('/danhmuc/{slug}', 'BackEnd\TheLoaiController@show');
    Route::post('/danhmuc/{slug}/update', 'BackEnd\TheLoaiController@update');
    Route::post('/danhmuc/{slug}/delete', 'BackEnd\TheLoaiController@delete');

//    Route::get('/sanpham/', 'BackEnd\TheLoaiController@index');
    Route::post('/sanpham', 'BackEnd\SanPhamController@store');
    Route::get('/sanpham-create/{id}', 'BackEnd\SanPhamController@create');
    Route::get('/sanpham/{slug}', 'BackEnd\SanPhamController@show');
    Route::post('/sanpham/{slug}/update', 'BackEnd\SanPhamController@update');
    Route::post('/sanpham/{slug}/delete', 'BackEnd\SanPhamController@delete');


    Route::post('/hinhanh/{id}/delete','BackEnd\SanPhamController@deleteImage');
    //----------------------
    Route::resource('slides','BackEnd\SlideController');
    Route::resource('khachhang', 'BackEnd\KhachHangController');
    Route::resource('hoadon','BackEnd\HoaDonController');
    Route::resource('tintuc','BackEnd\TinTucController');
    Route::resource('gioithieu','BackEnd\GioiThieuController');

});
Route::post('/report','FrontEnd\HomeController@report');
Route::get('/logout','FrontEnd\HomeController@logout');
Route::get('/', 'FrontEnd\HomeController@index');
Route::get('/contact','FrontEnd\HomeController@contact');
Route::get('/about','FrontEnd\HomeController@about');
Route::get('/sanphams','FrontEnd\SanPhamController@index');
Route::get('/theloai/{Slug}/sanpham','FrontEnd\TheLoaiController@show');
Route::get('/sanphams/{Slug}','FrontEnd\SanPhamController@show');
Route::get('/login', 'FrontEnd\HomeController@getRegistration');
Route::post('/login', 'FrontEnd\HomeController@postLogin');
Route::get('/registration','FrontEnd\HomeController@getRegistration');
Route::post('/registration','FrontEnd\HomeController@registration');
Route::post('/user/update','FrontEnd\HomeController@update');
Route::get('/tintuc','FrontEnd\TinTucController@index');
Route::get('/tintuc/{id}','FrontEnd\TinTucController@show');

Route::get('/add-cart','FrontEnd\CartController@store');
Route::get('/edit-cart','FrontEnd\CartController@edit');
Route::get('/delete-cart','FrontEnd\CartController@delete');
Route::get('/cart','FrontEnd\CartController@show');
Route::get('/hoadon','FrontEnd\HoadonController@index');
Route::get('/hoadon/{id}/chitiet','FrontEnd\HoadonController@show');
Route::post('/cart','FrontEnd\CartController@buy');
Route::post('/add-cart-data','FrontEnd\CartController@data');
Route::post('/comments','FrontEnd\SanPhamController@storeComment');
Route::get('/payment','FrontEnd\CartController@payment');
Route::get('/my-profile','FrontEnd\HomeController@getRegistration');


Route::get('/view-quick','FrontEnd\SanPhamController@viewQuick');

Route::get('/pdf/{id}','FrontEnd\HoadonController@pdf');
Route::get('add-cart1',function (){
    dd(\Gloudemans\Shoppingcart\Facades\Cart::count());
});
Route::get('save-cart',function () {
    Cart::instance('wishlist')->store('giang');
    echo 'oke';
});
Route::get('save-cart1',function () {
    $a = Cart::instance('wishlist')->restore('giang');
    dd($a);
});
Route::get('show-cart',function () {
    $a = Cart::content();
    dd($a);
});




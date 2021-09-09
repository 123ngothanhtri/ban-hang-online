<?php
use App\Http\Controllers\c;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\LoaisanphamController;
use App\Http\Controllers\SanphamController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'admin','middleware'=>'mdw'],function (){
    
    Route::get('/thongke',[c::class,'thongke'])->name('thongke');
    
    Route::get('/xacnhanstatus/{id}',[c::class,'xacnhanstatus'])->name('xacnhanstatus');

    Route::get('/donhang',[c::class,'donhang'])->name('donhang');
    Route::get('/xoadonhang/{iddh}',[c::class,'xoadonhang']);

    Route::resource('slider',SliderController::class)->only('index','destroy','store');
    Route::resource('loaisanpham',LoaisanphamController::class);
    Route::resource('sanpham',SanphamController::class);
    
    Route::get('/users',[c::class,'danhsachsanpham'])->name('users');
    Route::get('/admin',[AdminController::class,'admin'])->name('admin');
    Route::post('/doimatkhau',[AdminController::class,'doimatkhau'])->name('doimatkhau');
    Route::post('/doiten',[AdminController::class,'doiten'])->name('doiten');

    Route::post('timkiem',[c::class,'timkiem']);

    Route::get('/logout_admin',[AdminController::class,'logout_admin']);
});
Route::get('/',[c::class,'trangchu']);
Route::get('/chitietsanpham/{id}/{maloai}',[c::class,'chitietsanpham']);
Route::post('xulydonhang',[c::class,'xulydonhang']);
Route::get('xulydonhang',[c::class,'xulydonhang']);
  
Route::get('/giohang',[c::class,'cart']);
Route::get('/themvaogiohang/{id}',[c::class,'addToCart']);
Route::get('/xoa/{id}',[c::class,'xoahang'])->name('xoa');
Route::get('/tangsoluong/{rowid}',[c::class,'tangsoluong'])->name('tangsoluong');
Route::get('/giamsoluong/{rowid}',[c::class,'giamsoluong'])->name('giamsoluong');

Route::get('/dathang',[c::class,'dathang']);
Route::view('/dathangthanhcong','home.dathangthanhcong');

Route::post('/xuly_login_admin',[AdminController::class,'xuly_login_admin']);
Route::get('/login_admin',[AdminController::class,'login_admin'])->middleware('MDW_login_admin');
Route::post('/loc',[c::class,'loc']);



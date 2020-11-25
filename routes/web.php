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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/body',function(){
    return view('admin.index');
})->name('master.home');

Route::group(["name" => "admin", "prefix" => "master", "namespace" => "Admin"], function(){

    Route::resource('category','CategoryController');
    Route::resource('product','ProductController');

});


Route::get('/bagan', 'User\UserCategoryController@getIndex')->name('baganmart.home');
// Route::get('/bagan1','User\UserCategoryController@getProduct')->name('baganmart.productpage');
Route::get('/{id}/detail','User\UserCategoryController@getdetail')->name('user.detail');

// Route::get('/addtocart/{id}',[
//     'uses' => 'Admin\ProductController@getaddtocart',
//     'as'=> 'product.addcart'
// ]);

Route::get('/allcart', 'User\UserProductController@index')->name('baganmart.productpage');
 
Route::get('cart', 'User\UserProductController@cart')->name('baganmart.cartpage');
 
Route::get('add-to-cart/{id}', 'User\UserProductController@addToCart');

Route::patch('update-cart', 'User\UserProductController@update');
 
Route::delete('remove-from-cart', 'User\UserProductController@remove');

Route::get('/about','User\UserCategoryController@getabout')->name('baganmart.about');

Route::get('/contact','User\UserCategoryController@getcontact')->name('baganmart.contact');

Route::get('/faq','User\UserCategoryController@getFAQ')->name('baganmart.FAQ');

Route::fallback(function(){
    return view('404page');
});
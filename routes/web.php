<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
$controller_path = 'App\Http\Controllers';

Route::get('/test', function () {
    return view('welcome');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::group(['middleware' => ['role:sub-admin']], function () {
    $controller_path = 'App\Http\Controllers';

// category

Route::post('/add_category', $controller_path . '\Pages\CategoryController@add_category');
Route::get('/delete_category/{id}',$controller_path . '\Pages\CategoryController@delete_category');
Route::get('/update_category/{id}',$controller_path . '\Pages\CategoryController@update_category');
Route::post('/update_category_confirm/{id}',$controller_path . '\Pages\CategoryController@update_category_confirm');
Route::get('/category_list',$controller_path . '\Pages\CategoryController@show_category');
Route::get('/category_search', $controller_path . '\Pages\CategoryController@category_search')->name('category.search');


// Shop
Route::get('/shop', $controller_path . '\Pages\ShopController@Shop_page')->name('admin.store');
Route::post('/add_shop', $controller_path . '\Pages\ShopController@add_Shop');
Route::get('/delete_shop/{id}',$controller_path . '\Pages\ShopController@delete_shop');
Route::get('/update_shop/{id}',$controller_path . '\Pages\ShopController@update_shop');
Route::post('/update_shop_confirm/{id}',$controller_path . '\Pages\ShopController@update_shop_confirm');

Route::get('/vendor/dashboard/{id}', $controller_path . '\Pages\ShopController@vendor_dashboard')->name('vendor.dashboard');


// product
Route::get('/product', $controller_path . '\Pages\ProductController@product_page')->name('admin.product');
Route::get('/product/list', $controller_path . '\Pages\ProductController@product_list')->name('admin.product.list');

Route::post('/add_product/{id}', $controller_path . '\Pages\ProductController@add_product');
Route::get('/delete_product/{id}',$controller_path . '\Pages\ProductController@delete_product');
Route::get('/update_product/{id}',$controller_path . '\Pages\ProductController@update_product');
Route::post('/update_product_confirm/{id}',$controller_path . '\Pages\ProductController@update_product_confirm');

// order
Route::get('/admin/my_order', $controller_path . '\Pages\OrderController@order')->name('admin.order');

Route::get('/delivered/{id}', $controller_path . '\Pages\OrderController@delivered');
Route::get('processed/{id}', $controller_path . '\Pages\OrderController@processed');
Route::get('/print_pdf/{id}', $controller_path . '\Pages\OrderController@print_pdf');
Route::get('/send_email/{id}', $controller_path . '\Pages\OrderController@send_email');
Route::post('/send_user_email/{id}', $controller_path . '\Pages\OrderController@send_user_email');

 



  

});
Route::group(['middleware' => ['role:admin']], function () {
    $controller_path = 'App\Http\Controllers';

// adminpages
Route::get('/admin/tablecontent', $controller_path . '\Pages\HomeController@tablecontent');
Route::get('/admin/hero_pages', $controller_path . '\Pages\HeroSectionController@hero_pages')->name('hero.pages');
Route::post('/admin/add_hero', $controller_path . '\Pages\HeroSectionController@add_hero')->name('add.hero');
Route::get('/admin/hero_update/{id}', $controller_path . '\Pages\HeroSectionController@update_hero')->name('update.hero');
Route::post('/admin/hero_update_confirm/{id}', $controller_path . '\Pages\HeroSectionController@update_hero_confirm')->name('update.hero.confirm');
Route::get('/admindashboard', $controller_path . '\Pages\HomeController@admindashboard')->name('admin.dashboard');
Route::get('admin/vendor/list/user/{id}', $controller_path . '\Pages\HomeController@user')->name('ADM');
Route::get('admin/user_search', $controller_path . '\Pages\HomeController@user_search')->name('user.search');
Route::get('/admin/details', $controller_path . '\Pages\HomeController@admindetails')->name('admin.details')->middleware('auth');



 //search payment
 Route::get('/bkash/search/{trxID}', [App\Http\Controllers\BkashTokenizePaymentController::class,'searchTnx'])->name('bkash-serach');

 //refund payment routes
 Route::get('/bkash/refund', [App\Http\Controllers\BkashTokenizePaymentController::class,'refund'])->name('bkash-refund');
 Route::get('/bkash/refund/status', [App\Http\Controllers\BkashTokenizePaymentController::class,'refundStatus'])->name('bkash-refund-status');


 



  

});

// user-pages

Route::get('/home', $controller_path . '\Pages\HomeController@index')->middleware('auth')->name('home');
Route::get('/', $controller_path . '\Pages\HomeController@index');

Route::get('/user/contact', $controller_path . '\Pages\HomeController@contact')->name('contact');
Route::get('/user/term/condition', $controller_path . '\Pages\HomeController@termscontition')->name('terms');
Route::get('/user/privecy/policy', $controller_path . '\Pages\HomeController@privecy')->name('policy');
Route::get('/user/about/us', $controller_path . '\Pages\HomeController@aboutus')->name('abouts');



// category
Route::get('/categories-with-products/{category}', $controller_path . '\Pages\ProductController@showProductsByCategory')->name('categories.product');
Route::get('/category', $controller_path . '\Pages\CategoryController@category_page')->name('admin.category')->middleware('auth');


Route::get('/shop_details/{slug}', $controller_path . '\Pages\ShopController@shop_details');
Route::get('/user/shop', $controller_path . '\Pages\ShopController@shop_all');
Route::get('/shop_search', $controller_path . '\Pages\ShopController@shop_search');

Route::get('/product_details/{slug}', $controller_path . '\Pages\ProductController@product_details');
Route::get('/user/product', $controller_path . '\Pages\ProductController@product_all');
Route::get('/product_search', $controller_path . '\Pages\ProductController@product_search');



// review
Route::post('/add_review/{id}', $controller_path . '\Pages\ReviewController@add_review');
Route::get('/delete_review/{id}',$controller_path . '\Pages\ReviewController@delete_review');



// wishlist
Route::post('/add_wishlist/{id}', $controller_path . '\Pages\WishlistController@add_wishlist');
Route::get('/delete_wishlist/{id}',$controller_path . '\Pages\WishlistController@delete_wishlist');
Route::get('/my_wishlist', $controller_path . '\Pages\WishlistController@my_wishlist');

// cart
Route::post('/add_cart/{id}', $controller_path . '\Pages\CartController@add_cart');
Route::get('/my_cart', $controller_path . '\Pages\CartController@my_cart');
Route::get('/cart_details/{id}', $controller_path . '\Pages\CartController@cart_details');
Route::get('/delete_cart/{id}',$controller_path . '\Pages\CartController@delete_cart');

// order
Route::get('/cash_order', $controller_path . '\Pages\OrderController@cash_order')->name('cash.order.confirm');
Route::get('/show_order', $controller_path . '\Pages\OrderController@show_order');
Route::get('/cancel_order/{id}', $controller_path . '\Pages\OrderController@cancel_order');






// commentreply
Route::POST('/add_comment/{id}', $controller_path . '\Pages\CommentReply@add_comment');
Route::POST('/add_reply/{id}', $controller_path . '\Pages\CommentReply@add_reply');

Route::post('/send-message', $controller_path . '\Pages\ContactController@sendEmail')->name('contact.send');


 // Payment Routes for bKash
 Route::get('/bkash/payment', [App\Http\Controllers\BkashTokenizePaymentController::class,'index']);
 Route::get('/bkash/create-payment', [App\Http\Controllers\BkashTokenizePaymentController::class,'createPayment'])->name('bkash-create-payment');
 Route::get('/bkash/callback', [App\Http\Controllers\BkashTokenizePaymentController::class,'callBack'])->name('bkash-callBack');

   
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\LogoController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Frontend\SearchController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductsController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\NewController;

// Route::get('/', function () {
//     return view('backend.master');
// });

Route::post('/register',[UserController::class,'Register']);
Route::get('/register',[UserController::class,'OpenRegister']);
Route::post('/login',[UserController::class,'Login']);
Route::get('/login',[UserController::class,'OpenLogin'])->name('login');

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function(){
        //LOGO
        Route::get('/',[DashboardController::class, 'index']);
        Route::get('/add-logo',[LogoController::class, 'OpenAdd']);
        Route::post('/add-logo',[LogoController::class, 'addLogo']);
        Route::get('/list-logo',[LogoController::class,  'ViewLogo']);
        Route::get('/update-logo/{id}',[LogoController::class, 'OpenUpdate']);
        Route::post('/update-logo',[LogoController::class,  'UpdateLogo']);
        Route::post('/delete-logo',[LogoController::class, 'DeleteLogo']);
        //Category
        Route::get('/add-category',[CategoryController::class, 'OpenCategory']);
        Route::post('/add-category',[CategoryController::class, 'AddCategory']);
        Route::get('/list-category',[CategoryController::class, 'ViewCategory']);
        Route::get('/update-category/{id}',[CategoryController::class, 'OpenUpdate']);
        Route::post('/update-category',[CategoryController::class, 'UpdateCategory']);
        Route::post('/delete-category',[CategoryController::class, 'DeleteCategory']);

        //Products
        Route::get('/add-products',[ProductsController::class, 'OpenAdd']);
        Route::post('/add-products',[ProductsController::class, 'AddProducts']);
        Route::get('/list-products',[ProductsController::class, 'ViewProducts']);
        Route::get('/update-product/{id}', [ProductsController::class, 'OpenUpdate']);
        Route::post('/update-product', [ProductsController::class, 'UpdateProduct']);
        Route::post('/delete-product', [ProductsController::class, 'DeleteProduct']);

        //News
        Route::get('/add-news',[NewsController::class,'OpenNews']);
        Route::post('/add-news',[NewsController::class,'AddNews']);
        Route::get('/list-news',[NewsController::class, 'ListNews']);
        Route::get('/update-news/{id}',[NewsController::class, 'OpenUpdate']);
        Route::post('/update-news',[NewsController::class, 'UpdateNews']);
        Route::post('/delete-news',[NewsController::class, 'DeleteNews']);
    });

    
});

Route::get('/',[HomeController::class,'index']);
Route::get('/productdetail/{id}',[HomeController::class,'ProductDetail']);
Route::get('/shop',[ShopController::class,'index']);
Route::get('/search',[SearchController::class,'Search']);

//news
Route::get('/news',[NewController::class, 'index']);
Route::get('/news_detail/{id}',[NewController::class, 'NewsDetail']);

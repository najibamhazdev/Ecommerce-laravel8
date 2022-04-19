<?php

use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\User\UserDashbordComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\Admin\AddCategoryComponent;
use App\Http\Livewire\Admin\EditCategoryComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\ProductComponent;
use App\Http\Livewire\Admin\AddProductComponent;
use App\Http\Livewire\Admin\EditProductComponent;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',HomeComponent::class);

Route::get('/shop',ShopComponent::class);

Route::get('/cart',CartComponent::class)->name('product.cart');

Route::get('/checkout',CheckoutComponent::class);

Route::get('/product/{slug}',DetailsComponent::class)->name('product.details');

Route::get('/product-category/{slug}',CategoryComponent::class)->name('product.category');

// Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

//For User Type
Route::middleware(['auth:sanctum','verified'])->group(function(){
    Route::get('user/dashboard',UserDashbordComponent::class)->name('user.dashboard');
});

//For Admin Type
Route::middleware(['auth:sanctum','verified','authadmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/categories',AdminCategoryComponent::class)->name('admin.categories');
    Route::get('/admin/category/add',AddCategoryComponent::class)->name('admin.addcategory');
    Route::get('/admin/category/edit/{category_id}',EditCategoryComponent::class)->name('admin.editcategory');
    Route::get('/admin/products',ProductComponent::class)->name('admin.products');
    Route::get('/admin/products/add',AddProductComponent::class)->name('admin.addproduct');
    Route::get('/admin/products/edit/{product_id}',EditProductComponent::class)->name('admin.editproduct');
});

Route::get(
    '/admin/categories/add',
    [CategoryController::class, 'add']
)->name('product.category.add');



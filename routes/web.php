<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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



Auth::routes();

Route::get('/password/reset', function () {
    return view('auth.passwords.email');
})->middleware('guest')->name('password.request');

Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
});

// HOME CONTROLLER OR FRONEND CONTROLLER
Route::controller(App\Http\Controllers\HomeController::class)->group(function () {
    Route::get('/',  'index')->name('home');
    Route::get('/search',  'search');
    Route::get('/cargo',  'cargo');
    Route::get('/daerah/{province_slug}',  'province')->name('province');
    Route::get('/daerah/{province_slug}/{product_slug}',  'productProvince')->name('product.province');
    Route::get('/category/{category_slug}',  'category')->name('category');
    Route::get('/category/{category_slug}/{product_slug}',  'product_category')->name('product_category');
    Route::get('/brands/{brand_slug}',  'brands')->name('brands');
    Route::get('/brands/{brand_slug}/{product_slug}',  'product_brand')->name('brands');
    Route::get('/hastag/{hastag_slug}',  'hastags')->name('hastag');
    Route::get('/hastag/{hastag_slug}/{product_slug}',  'product_hastags')->name('hastag');
    Route::get('/news/{news_slug}',  'news')->name('news');
    Route::post('/news/{news_slug}/subs/add',  'subsnews')->name('subsnews');
    Route::get('/promo/{promo_slug}',  'promo')->name('promo');
    Route::get('/ulasan-pengiriman', 'ulasanPengiriman');
});
// EDIT PROFILE CONTROLLER
Route::controller(App\Http\Controllers\EditProfileController::class)->group(function () {
    Route::get('profile/edit', 'index')->name('profile-edit');
    Route::put('profile/edit', 'update');
    Route::get('profile/menunggu-pembayaran', 'menungguPembayaran');
    Route::get('profile/daftar-transaksi', 'daftarTransaksi');
    Route::get('profile/update-notif', 'updateNotif');
    Route::get('profile/ulasan', 'ulasan');
    Route::get('profile/diskusi_produk', 'diskusiProduk');
    Route::get('profile/chat', 'chatProfile');
});
// WISHLIST CONTROLLER
Route::middleware(['auth'])->group(function () {
    Route::controller(App\Http\Controllers\WishlistController::class)->group(function () {
        Route::get('wishlist', 'index')->name('wishlist');
    });
    Route::controller(App\Http\Controllers\CartController::class)->group(function () {
        Route::get('cart', 'index')->name('cart');
        Route::get('menusharingcart', 'menusharingcart')->name('menusharingcart');
        Route::get('sharingcart', 'sharingcart')->name('sharingcart');
    });
    Route::controller(App\Http\Controllers\CheckoutController::class)->group(function () {
        Route::get('checkout', 'index')->name('checkout');
        Route::get('buynow', 'buynow');
    });
});



// ADMIN PREFIX
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    // INDEX ADMIN PANEL
    Route::get('dashboard', [App\Http\Controllers\Admin\AdminPanelController::class, 'index']);
    Route::get('users', [App\Http\Controllers\Admin\UserController::class, 'index']);
    // CATEGORY CONTROLLER
    Route::controller(App\Http\Controllers\Admin\CategoryController::class)->group(function () {
        Route::get('category', 'index');
        Route::get('category/add', 'create');
        Route::post('category/add', 'store');
        Route::get('category/{id}/edit', 'edit');
        Route::put('category/{id}/edit', 'update');
        Route::delete('category/{id}', 'destroy');
    });
    // PRODUCT CONTROLLER
    Route::controller(App\Http\Controllers\Admin\ProductsController::class)->group(function () {
        Route::get('products', 'index');
        Route::get('products/add', 'create');
        Route::post('products/add', 'store');
        Route::get('products/{id}/edit', 'edit');
        Route::put('products/{id}/edit', 'update');
        Route::get('products/{id}/delete', 'destroyImage');
        Route::get('products/product/{id}/delete', 'destroy');
        Route::get('product-hastag/{id}/delete', 'destroyHastag');
        Route::get('product-color/{id}/delete', 'destroyColor');
        Route::get('product-flavor/{id}/delete', 'destroyFlavor');
        // EXCEL ROUTE
        route::post('importProduct', 'import')->name('excel.import');
    });


    // BRANDS CONTROLLER
    Route::controller(App\Http\Controllers\Admin\BrandsController::class)->group(function () {
        Route::get('brands',  'index');
        Route::get('brands/add',  'create');
        Route::post('brands/add',  'store');
        Route::get('brands/{id}/edit',  'edit');
        Route::put('brands/{id}/edit',  'update');
        Route::delete('brands/brand/{id}/delete',  'destroy');
        // EXCEL ROUTE
        route::post('importBrand', 'import');
    });

    // VIDEO HOME CONTROLLER
    Route::controller(App\Http\Controllers\Admin\HomeVideoController::class)->group(function () {
        Route::get('videos', 'index');
        Route::get('videos/add', 'create');
        Route::post('videos/add', 'store');
        Route::get('videos/{id}/edit', 'edit');
        Route::put('videos/{id}/edit', 'update');
        Route::delete('videos/video/{id}/delete', 'destroy');
    });

    // BANNER CONTROLLER
    Route::controller(App\Http\Controllers\Admin\BannerController::class)->group(function () {
        Route::get('banner', 'index');
        Route::get('banner/add', 'create');
        Route::post('banner/add', 'store');
        Route::get('banner/{id}/edit', 'edit');
        Route::put('banner/{id}/edit', 'update');
        Route::delete('banner/{id}/delete', 'destroy');
    });
    // HASTAG HASTAG CONTROLLER
    Route::controller(App\Http\Controllers\Admin\HastagController::class)->group(function () {
        Route::get('hastags', 'index');
        Route::get('hastags/add', 'create');
        Route::post('hastags/add', 'store');
        Route::get('hastags/{id}/edit', 'edit');
        Route::put('hastags/{id}/edit', 'update');
        Route::delete('hastags/{id}/delete', 'destroy');
    });
    // CARGO CONTROLLER
    Route::controller(App\Http\Controllers\Admin\CargoController::class)->group(function () {
        Route::get('cargo', 'index');
        Route::get('cargo/add', 'create');
        Route::post('cargo/add', 'store');
        Route::get('cargo/{id}/edit', 'edit');
        Route::put('cargo/{id}/edit', 'update');
        Route::delete('cargo/{id}/delete', 'destroy');
    });
    //COUNTRY CONTROLLER
    Route::controller(App\Http\Controllers\Admin\CountryController::class)->group(function () {
        Route::get('country', 'index');
        Route::get('country/add', 'create');
        Route::post('country/add', 'store');
        Route::get('country/{id}/edit', 'edit');
        Route::put('country/{id}/edit', 'update');
        Route::delete('country/{id}/delete', 'destroy');
    });
    // MAP CONTROLLER
    Route::controller(App\Http\Controllers\Admin\MapController::class)->group(function () {
        Route::get('map', 'index');
        Route::get('map/add', 'create');
        Route::post('map/add', 'store');
        Route::get('map/{id}/edit', 'edit');
        Route::put('map/{id}/edit', 'update');
        Route::delete('map/{id}/delete', 'destroy');
    });
    Route::controller(App\Http\Controllers\Admin\NewsController::class)->group(function () {
        Route::get('news', 'index');
        Route::get('news/add', 'create');
        Route::post('news/add', 'store');
        Route::get('news/{id}/edit', 'edit');
        Route::put('news/{id}/edit', 'update');
        Route::delete('news/{id}/delete', 'destroy');
    });
    // Route::controller(App\Http\Controllers\Admin\AttributeController::class)->group(function () {
    //     Route::get('attribute', 'index');
    //     Route::get('attribute/add', 'create');
    //     Route::post('attribute/add', 'store');
    //     Route::get('attribute/{id}/edit', 'edit');
    //     Route::put('attribute/{id}/edit', 'update');
    //     Route::delete('attribute/{id}/delete', 'destroy');
    // });

    Route::controller(App\Http\Controllers\Admin\ColorController::class)->group(function () {
        Route::get('color', 'index');
        Route::get('color/add', 'create');
        Route::post('color/add', 'store');
        Route::get('color/{id}/edit', 'edit');
        Route::put('color/{id}/edit', 'update');
        Route::delete('color/{id}/delete', 'destroy');
    });
    Route::controller(App\Http\Controllers\Admin\FlavorController::class)->group(function () {
        Route::get('flavor', 'index');
        Route::get('flavor/add', 'create');
        Route::post('flavor/add', 'store');
        Route::get('flavor/{id}/edit', 'edit');
        Route::put('flavor/{id}/edit', 'update');
        Route::delete('flavor/{id}/delete', 'destroy');
    });
});





// API AUTH

// Google
Route::get('auth/google', [App\Http\Controllers\Auth\GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [App\Http\Controllers\Auth\GoogleController::class, 'handleToGoogleCallback'])->name('auth.googleCallBack');
// // Facebook
Route::get('auth/facebook', [App\Http\Controllers\Auth\FacebookController::class, 'redirectToFacebook'])->name('auth.facebook');
Route::get('auth/facebook/callback', [App\Http\Controllers\Auth\FacebookController::class, 'handleToFacebookCallback'])->name('auth.facebookCallBack');

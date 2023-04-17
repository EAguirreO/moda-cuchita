<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ContactoController;
use App\Models\Product;

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
    return redirect('home');
});

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/nosotros', function () {
    return view('pages.nosotros');
});

Route::get('/ninios', function () {
    return view('pages.ninios');
});

Route::get('/ninias', function () {
    return view('pages.ninias');
});

Route::get('/damas', function () {
    return view('pages.damas');
});

Route::get('/caballeros', function () {
    return view('pages.caballeros');
});

Route::get('/detalle', function () {
    return view('pages.detalle');
});

Route::get('/catalogo', function () {
    return view('pages.catalogo');
})->name('client.catalog');

Route::get('/catalogo/detalle/{identif}', function ($identif) {
    Product::findOrFail($identif);
    return view('pages.catalogo-detalle', compact('identif'));
    // return view('pages.catalogo-detalle');
})->name('client.productDetail');

Route::get('/contactenos', function () {
    return view('pages.contactenos');
})->name('contacto.form');

Route::post('sendForm', [ContactoController::class, 'sendForm'])->name('contacto.sendForm');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// RUTAS ADMIN
Route::get('admin/dashboard', function () {
    return view('admin.index');
})->middleware(['auth:sanctum', 'verified', 'verify.is.admin'])->name('dashboard');

Route::middleware('auth:sanctum', 'verify.is.admin')->prefix('admin')->group(function () {

    Route::get('categorias', function(){
        return view('admin.categories');
    })->name('admin.categories');
    
    Route::get('subcategorias', function(){
        return view('admin.subcategories');
    })->name('admin.subcategories');

    Route::get('resetPassword', function(){
        return view('admin.resetPassword');
    })->name('admin.reset');

    Route::post('resetPassword', [AdminController::class, 'update'])->name('admin.resetPassword');
    Route::resource('product', ProductController::class)->names('products');
});

//Idioma
// Route::get('/lang/{lang}', function($lang){
//     App::setLocale($lang);
//     session()->put('locale', $lang);
//     return redirect()->back();
// });

//CREAR LINK STORAGE
/*Route::get('/linkStorage', function () {
    Artisan::call('storage:link');
});*/
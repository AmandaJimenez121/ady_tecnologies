<?php

use App\Http\Controllers\ControladorProducts;
use App\Http\Controllers\ControladorCategories;
use App\Http\Controllers\ControladorSales;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Auth\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

// Ruta principal
Route::get('/', function () {
    return view('welcome');
});

//*-------------------rutas login----------------------

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// Ruta de inicio para usuarios autenticados
Route::middleware(['auth'])->get('/home', [HomeController::class, 'index'])->name('home');

// Ruta para el administrador (si tienes un rol de administrador)
Route::middleware(['auth', 'role:admin'])->get('/admin/home', [AdminController::class, 'index'])->name('admin.home');

//*-------------------------Rutas Products-----------------------------------
Route::name('products')->get('/products', [ControladorProducts::class, 'products']);
Route::name('products_alta')->get('/products_alta', [ControladorProducts::class, 'products_alta']);
Route::name('products_registrar')->post('/products_registrar', [ControladorProducts::class, 'products_registrar']);

Route::name('products_detalle')->get('/products_detalle/{id}', [ControladorProducts::class, 'products_detalle']);
Route::name('products_editar')->get('/products_editar/{id}', [ControladorProducts::class, 'products_editar']);
Route::name('products_salvar')->put('/products_salvar/{id}', [ControladorProducts::class, 'products_salvar']);
Route::name('products_borrar')->get('/products_borrar/{id}', [ControladorProducts::class, 'products_borrar']);

//*-------------------------Rutas Categories-----------------------------------
Route::name('categories')->get('/categories', [ControladorCategories::class, 'categories']);
Route::name('categories_alta')->get('/categories_alta', [ControladorCategories::class, 'categories_alta']);
Route::name('categories_registrar')->post('/categories_registrar', [ControladorCategories::class, 'categories_registrar']);

Route::name('categories_detalle')->get('/categories_detalle/{id}', [ControladorCategories::class, 'categories_detalle']);
Route::name('categories_editar')->get('/categories_editar/{id}', [ControladorCategories::class, 'categories_editar']);
Route::name('categories_salvar')->put('/categories_salvar/{id}', [ControladorCategories::class, 'categories_salvar']);
Route::name('categories_borrar')->get('/categories_borrar/{id}', [ControladorCategories::class, 'categories_borrar']);

//*-------------------------Rutas Sales-----------------------------------
Route::name('sales')->get('/sales', [ControladorSales::class, 'sales']);
Route::name('sales_alta')->get('/sales_alta', [ControladorSales::class, 'sales_alta']);
Route::name('sales_registrar')->post('/sales_registrar', [ControladorSales::class, 'sales_registrar']);

Route::name('sales_detalle')->get('/sales_detalle/{id}', [ControladorSales::class, 'sales_detalle']);
Route::name('sales_editar')->get('/sales_editar/{id}', [ControladorSales::class, 'sales_editar']);
Route::name('sales_salvar')->put('/sales_salvar/{id}', [ControladorSales::class, 'sales_salvar']);
Route::name('sales_borrar')->get('/sales_borrar/{id}', [ControladorSales::class, 'sales_borrar']);

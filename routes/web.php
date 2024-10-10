<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\UserCheck;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


//User

Route::get('/users', [UserController::class, 'allUsers']);

Route::get('/add/users', [UserController::class, 'loadAddUser']);

Route::post('/add/users', [UserController::class, 'addUser'])->name('PostUser');

Route::get('/edit/{user_id}', [UserController::class, 'loadEditForm']);
Route::get('/delete/{user_id}', [UserController::class, 'deleteUser']);

Route::post('/edit/user', [UserController::class, 'editUser'])->name('EditUser');



//product

Route::get('/products', [ProductController::class,  'showProduct'])->name('show.products');

Route::get('/add/products', [ProductController::class, 'loadProduct']);

Route::post('/add/products', [ProductController::class, 'store'])->name('PostProduct');

Route::get('/edit/{product_id}', [ProductController::class, 'editProduct'])->name('edit.product');
Route::get('/delete/{product_id}', [ProductController::class, 'deleteProduct']);

Route::post('/edit/product', [ProductController::class, 'updateProduct'])->name('update.product');



//Authentication


Route::get('/login', [UserController::class, 'Login'])->name('get.login');
Route::post('/login', [UserController::class, 'postLogin'])->name('post.login');

Route::get('/register', [UserController::class, 'Register'])->name('get.Register');
Route::post('/register', [UserController::class, 'postRegister'])->name('post.Register');

Route::get('/logout', [UserController::class, 'Logout']);

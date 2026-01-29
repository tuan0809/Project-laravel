<?php

use App\Http\Controllers\AgeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';



/*Route::get('/', function () {
    return view('home');
})->name('home');
*/
Route::get('/',[ProductController::class,"index"]);

Route::prefix('product')->group(function () {

    // /product → product.index
    Route::get('/', [ProductController::class, 'index'])
        ->name('product.index');

    // /product/add → product.add
    Route::get('/add', function () {
        return view('product.add');
    })->name('product.add');

    Route::get('/{id}', [ProductController::class, 'detail'])
        ->where('id', '[0-9]+')
        ->name('product.detail');
});


Route::get('/go-product', function () {
    return redirect()->route('product.index');
});


Route::get('/sinhvien/{name?}/{mssv?}', function (
    $name = 'Luong Xuan Hieu',
    $mssv = '123456'
) {
    return "
        <h1>Thông tin sinh viên</h1>
        <p>Tên: $name</p>
        <p>MSSV: $mssv</p>
    ";
})->name('sinhvien.info');


Route::get('/banco/{n}', function ($n) {
    return view('banco', compact('n'));
})->name('banco');

Route::get('/', [ProductController::class, 'index'])->name('product.index');

// Route::get('/login', [ProductController::class, 'login'])->name('login');
// Route::post('/login', [ProductController::class, 'handleLogin'])->name('login.post');

// Route::get('/register', [ProductController::class, 'register'])->name('register');
// Route::post('/register', [ProductController::class, 'handleRegister'])->name('register.post');


// View nhập tuổi
Route::get('/nhaptuoi', [AgeController::class, 'showForm']);
Route::post('/nhaptuoi', [AgeController::class, 'store'])->name('age.store');

// Product bị chặn bởi middleware tuổi
Route::get('/products', [ProductController::class, 'index'])
    ->middleware('check.age');


Route::get('/signin', [AuthController::class, 'SignIn'])
    ->name('signin');

Route::post('/signin', [AuthController::class, 'CheckSignIn']);

Route::post('/product/add', [ProductController::class, 'store'])
    ->name('product.store');


Route::fallback(function () {
    return view('error.404');
});


<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';



Route::get('/', function () {
    return view('home');
})->name('home');


Route::prefix('product')->group(function () {

    // /product → product.index
    Route::get('/', function () {
        // dữ liệu mẫu fix cứng trên html
        return view('product.index');
    })->name('product.index');

    // /product/add → product.add
    Route::get('/add', function () {
        return view('product.add');
    })->name('product.add');

    // /product/{id} → id kiểu chuỗi, mặc định 123
    Route::get('/{id?}', function ($id = '123') {
        return "Product ID: " . $id;
    })
    ->where('id', '[A-Za-z0-9]+')
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

Route::fallback(function () {
    return view('error.404');
});


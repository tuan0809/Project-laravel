<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgeController extends Controller
{
    public function showForm()
    {
        return view('nhaptuoi');
    }

    public function store(Request $request)
    {
        $age = $request->age;

        // Lưu vào session (dù đúng hay sai)
        session(['age' => $age]);

        return redirect('/products');
    }
}

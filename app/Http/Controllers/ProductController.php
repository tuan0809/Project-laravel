<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProductController extends Controller
{
 
    public function index()
    {
        $title = 'Product List';


        $products = Product::all();

        return view('product.index', compact('title', 'products'));
    }


    public function detail($id)
    {

        $product = Product::findOrFail($id);

        return view('product.detail', compact('product'));
    }




    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $product = new Product();
        $product->name  = $request->name;
        $product->price = $request->price;

        if ($request->hasFile('image')) {
            $imageName = time() . '_' . $request->image->getClientOriginalName();
            $request->image->move(public_path('images'), $imageName);
            $product->image = $imageName;
        }

        $product->save();

        return redirect()
            ->route('product.index')
            ->with('success', 'Thêm sản phẩm thành công!');
    }



public function handleLogin(Request $request)
{
    $request->validate([
        'name' => 'required',
        'password' => 'required'
    ]);

    $user = User::where('name', $request->name)->first();

    // if (!$user || !Hash::check($request->password, $user->password)) {
    //     return back()->with('error', 'Tên hoặc mật khẩu sai');
    // }

    return back()->with('success', 'Đăng nhập thành công!');
}


public function handleRegister(Request $request)
{
    $request->validate([
        'name'     => 'required|string|max:255',
        'email'    => 'required|email|unique:users',
        'password' => 'required|min:6',
    ]);

    User::create([
        'name'     => $request->name,
        'email'    => $request->email,
        'password' => Hash::make($request->password),
    ]);

    return back()->with('success', 'Đăng ký thành công!');
}


}

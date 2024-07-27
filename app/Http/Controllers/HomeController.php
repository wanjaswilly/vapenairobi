<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }

    public function productsList()
    {
        return view('admin.products')->with('products', Products::orderBy('created_at', 'desc')->get());
    }

    public function productsListFilter($productCategory)
    {
        return view('admin.products')
            ->with('productCategory', $productCategory)
            ->with('products', Products::where('productCategory', $productCategory)->orderBy('created_at', 'desc')->get());
    }

    public function siteStatistics()
    {
        return view('admin.siteStatistics');
    }

    public function editProductStatus($id)
    {
        $product = Products::find($id);
        if ($product->productStatus == "In Stock") {
            $product->productStatus = "Out of Stock";
        } else {
            $product->productStatus = "In Stock";
        }
        $product->save();
        return redirect()->back();
    }

    public function users()
    {
        return view("admin.users")->with('users', User::orderBy('created_at','desc')->get());
    }

    public function makeAdmin($id)
    {
        $user = User::find($id);
        $user->is_admin = true;
        $user->save();
        return redirect()->back();
    }

    public function revokeAdmin($id)
    {
        
        $user = User::find($id);
        $user->is_admin = false;
        $user->save();
        return redirect()->back();
    }
}

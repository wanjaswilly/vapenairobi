<?php

namespace App\Http\Controllers;

use App\Models\Products;
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
        return view('admin.products')->with('products', Products::orderBy('created_at','desc')->get());
    }

    public function productsListFilter($productCategory)
    {
        return view('admin.products')->with('products', Products::where('productCategory', $productCategory)->orderBy('created_at','desc')->get());
    }

    public function siteStatistics()
    {
        return view('admin.siteStatistics');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Products;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\ProductImages;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class VapeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return 
     */
    public function index()
    {

        return view("app.home")->with([
            "introducing" => Products::where('productCategory', 'disposables')->orderBy("created_at", "desc")->first(),
            "disposables" => Products::where('productCategory', 'disposables')->orderBy("created_at", "desc")->paginate(7),
            "eliquids" => Products::where('productCategory', 'e-liquids')->orderBy("created_at", "desc")->paginate(3),
            "devices" => Products::where('productCategory', 'devices')->orderBy("created_at", "desc")->paginate(3),
            "others" => Products::where('productCategory', 'others')->orderBy("created_at", "desc")->paginate(3),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return
     */
    public function create()
    {
        // should a auth check
        return view('admin.addProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return 
     */
    public function store(Request $request)
    {
        // should a auth check

        if (Auth::check()) {
            // if (Auth::check() && Auth::user()->hasRole('ADMIN')) {
            $request = $request->validate([
                'productName' => 'required|unique:products|max:255',
                'productCategory' => 'required',
                'productPrice' => 'required',
                'productQuantity' => 'required',
                'productFlavours' => 'required|max:255',
                'productManufacturer' => 'max:255',
                'productShortDescription' => 'max:255',
                'productLongDescription' => 'max:5000',
            ]);

            $flavours = explode(',', $request['productFlavours']);
            $productBaseImageName = str_replace(" ", "-", $request['productName']) . "-0.";
            $product = Products::create([
                'productName' => $request['productName'],
                'productCategory' => $request['productCategory'],
                'productPrice' => $request['productPrice'],
                'productFlavours' => json_encode($flavours),
                'productQuantity' => $request['productQuantity'],
                'productManufacturer' => $request['productManufacturer'],
                'productShortDescription' => $request['productShortDescription'],
                'productLongDescription' => $request['productLongDescription'],
                'productBaseImage' => $productBaseImageName,

            ]);

            return $this->addProductImages($product->id);
        } else {
            return redirect()->route('login')->with('error', 'You have to be authorized first to create a new product.');
        }
    }

    public function addProductImages($id = 1)
    {
        return view('admin.addProductImages', ['productID' => $id]);
    }

    public function saveProductImages(Request $request)
    {
        $this->validate($request, [
            'productID' => 'required',
            'productImages' => 'required',
        ]);

        $productName = Products::find($request->productID);
        $productCategory = $productName->productCategory;
        $productName = str_replace(" ", "-", $productName->productName);
        $imageNames = array();
        if ($request->hasFile('productImages')) {
            $files = $request->file('productImages');
            foreach ($files as $key => $file) {
                $extension = $file->getClientOriginalExtension();
                $fileName = $productName . '-' . $key . '.' . $extension;
                $imageNames[] = $fileName;
                $file->storePubliclyAs('public/' . $productCategory . '/', $fileName);

                $product = Products::find($request->productID);
                $product->productBaseImage = $productName . '-0.' . $extension;
                $product->save();
            }
        }

        $product = ProductImages::create([
            'productID' => $request['productID'],
            'imageNames' => json_encode($imageNames),
        ]);

        return $this->create();
        // } else {
        //     return redirect()->route('login')->with('error', 'You have to be authorized first to create a new product.');
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return 
     */
    public function show($id, $productName = "")
    {
        $product = Products::findOrFail($id);
        $related = Products::where('productCategory', $product->productCategory)->orderBy('created_at', 'desc')->get();
        return view('app.productPage')->with('product', Products::find($id))->with('related', $related);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return 
     */
    public function edit($id)
    {
        if (Auth::check()) {

            return view('admin.editProduct')->with('product', Products::findOrFail($id));
        }else
        {   
            return redirect()->route('login')->with('error', 'You have to be authorized first to edit a product.');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return 
     */
    public function update(Request $request, $id)
    {
        if (Auth::check()) {
            // if (Auth::check() && Auth::user()->hasRole('ADMIN')) {
            $request = $request->validate([
                'productName' => 'required|max:255',
                'productPrice' => 'required',
                'productQuantity' => 'required',
                'productFlavours' => 'required|max:255',
                'productManufacturer' => 'max:255',
                'productShortDescription' => 'max:500',
                'productLongDescription' => 'max:6300',
            ]);

            $flavours = explode(',', $request['productFlavours']);
            $product = Products::findOrFail($id);
            $product->productName = $request['productName'];
            $product->productPrice = $request['productPrice'];
            $product->productFlavours = json_encode($flavours);
            $product->productQuantity = $request['productQuantity'];
            $product->productManufacturer = $request['productManufacturer'];
            $product->productShortDescription = $request['productShortDescription'];
            $product->productLongDescription = $request['productLongDescription'];

            $product->save();
            return redirect()->route('admin.productList');
        }else
        {
            return redirect()->route('login')->with('error', 'You have to be authorized first to edit a product.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return 
     */
    public function destroy($id)
    {
        // should a auth check
        //
    }

    public function disposables()
    {
        return view('app.disposables')->with('disposables', Products::where('productCategory', 'disposables')->paginate(10));
    }

    public function devices()
    {
        return view('app.devices')->with('devices', Products::where('productCategory', 'devices')->paginate(10));
    }

    public function eLiquids()
    {
        return view('app.e-liquids')->with('eliquids', Products::where('productCategory', 'e-liquids')->paginate(20));
    }

    public function others()
    {
        return view('app.others')->with('others', Products::where('productCategory', 'others')->paginate(10));
    }

    public function whatsappLink(Request $request)
    {
        $this->validate($request, [
            'productName' => 'required',
            'desiredFlavour' => 'required',
        ]);

        $text = "Hello, I would like to order " . $request->productName . ", of " . $request->desiredFlavour . " flavour. How fast can i get it delivered?";
        $text = urlencode($text);
        $url = "https://wa.me/" . env('WHATSAPP_NUMBER') . "?text=" . $text;
        return Redirect::to($url);
    }

    public function terms()
    {
        return view('app.terms');
    }

    public function legal()
    {
        return view('app.legal');
    }

    public function help()
    {
        return view('app.help');
    }

}

@extends('layouts.ui')

@section('pageName')
Your No 1 Vape store in Nairobi
@endsection

@section('content')

<div class="row px-5 gradient-header pb-5">
    <div class="col-lg-7 pt-5">
        <h1 class="introducing">Introducing</h1>
        <h3 class="introducing-product">{{ $introducing->productName}}</h3>
        <button class="btn btn-danger col-sm-2 mb-2 ">Ksh {{$introducing->productPrice}}/= </button>
        <p>{{ $introducing->productShortDescription}}</p>
    </div>
    <div class="col-lg-5">
        <a href="{{route('products.show', $introducing->id)}}" class="text-decoration-none text-dark">
            <img src="{{url('storage/' . $introducing->productCategory . '/' . $introducing->productBaseImage)}}"
                height="350px" class="card-img-top px-3 py-3 rounded hover-zoom" alt="{{ $introducing->productName}}" />
        </a>
    </div>
</div>

<!-- disposables -->
<div class="row gradient-vapes">
    <div class="row text-center pt-5">
        <h1 class="category-header">Show up sleek</h1>
        <p class="category-explanation">Enjoy these sleek-looking vape pens, great taste with rich flavours.</p>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4 px-5">
        @forelse($disposables as $product)
            <!-- @if ($loop->index == 0) -->
            <!-- @else -->
            <div class="col">
                <a href="{{route('products.show', $product->id)}}" class="text-decoration-none text-dark">
                    <div class="mb-2">
                        <img src="{{url('storage/' . $product->productCategory . '/' . $product->productBaseImage)}}"
                            class="card-img-top px-3 py-3 rounded hover-zoom" height="350px" alt="{{$product->productName}}" />

                        <div class="text-center">
                            <h3><b>{{ $product->productName }}</b></h3>
                            <button class="btn btn-danger col-sm-6 mb-2">Ksh {{$product->productPrice}}/= </button>
                            <p>{{ $product->productShortDescription}}</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- @endif -->
        @empty
            <h1 class="text-bold">More disposables coming soon.</h1>
        @endforelse
    </div>
</div>


<!-- E-liquids -->
<div class="row gradient-eliquids">
    <div class="row text-center pt-5">
        <h1 class="category-header">Fill up your tank</h1>
        <p class="category-explanation">We have the post popular and tasty flavours, just for you.</p>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4 px-5">
        @forelse($eliquids as $product)
            <div class="col">
                <a href="{{route('products.show', $product->id)}}" class="text-decoration-none text-dark">
                    <div class=" mb-3 pb-2">
                        <img src="{{url('storage/' . $product->productCategory . '/' . $product->productBaseImage)}}"
                            class="card-img-top px-3 py-3 rounded hover-zoom" height="350px" alt="{{$product->productName}}" />

                        <div class="text-center">
                            <h3><b>{{ $product->productName }}</b></h3>
                            <button class="btn btn-danger col-sm-6 mb-2">Ksh {{$product->productPrice}}/= </button>
                            <p>{{ $product->productShortDescription}}</p>
                        </div>
                    </div>
                </a>
            </div>
        @empty
            <h1 class="text-bold">More e-liquids coming soon.</h1>
        @endforelse
    </div>
</div>
<!-- devices -->
<div class="row gradient-devices">
    <div class="row text-center pt-5">
        <h1 class="category-header">Plan for the future</h1>
        <p class="category-explanation">Shop from our exclusive high class vape devices. </p>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4 px-5">
        @forelse($devices as $product)
            <div class="col">
            <a href="{{route('products.show', $product->id)}}" class="text-decoration-none text-dark">
            <div class="">
                    <img src="{{url('storage/' . $product->productCategory . '/' . $product->productBaseImage)}}"
                        class="card-img-top px-3 py-3 rounded hover-zoom" height="350px" alt="{{$product->productName}}" />

                    <div class="text-center">
                        <h3><b>{{ $product->productName }}</b></h3>
                        <button class="btn btn-danger col-sm-6 mb-2">Ksh {{$product->productPrice}}/= </button>
                        <p>{{ $product->productShortDescription}}</p>
                    </div>
                </div>
                </a>
            </div>
        @empty
            <h1 class="text-bold">More devices coming soon.</h1>
        @endforelse
    </div>
</div>


<!-- other -->
<div class="row gradient-eliquids">
    <div class="row text-center pt-5">
        <h1 class="category-header">Upgrades and replacements</h1>
        <p class="category-explanation">We've got you covered with high quality accesories </p>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4 px-5">
        @forelse($others as $product)
            <div class="col">
            <a href="{{route('products.show', $product->id)}}" class="text-decoration-none text-dark">
            <div class="">
                    <img src="{{url('storage/' . $product->productCategory . '/' . $product->productBaseImage)}}"
                        class="card-img-top px-3 py-3 rounded hover-zoom" height="350px" alt="{{$product->productName}}" />

                    <div class="text-center">
                        <h3><b>{{ $product->productName }}</b></h3>
                        <button class="btn btn-danger col-sm-6 mb-2">Ksh {{$product->productPrice}}/= </button>
                        <p>{{ $product->productShortDescription}}</p>
                    </div>
                </div>
                </a>
            </div>
        @empty
            <h1 class="text-bold">More devices coming soon.</h1>
        @endforelse
    </div>
</div>

@endsection
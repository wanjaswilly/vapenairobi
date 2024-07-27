@extends('layouts.ui')

@section('pageName')
Your No 1 Vape store in Nairobi
@endsection
@section('meta-description')
    <meta name="robots" content="all">
    <meta name="robots" content="max-image-preview:standard">
    <meta name="description" content="The number one vape store in Nairobi. Contact us for quality vape disposables, vale E-liquids and vape devices. We offer paid delivery to all parts of the country.">
    <meta property="og:title" content="Vape Nairobi" />
    <meta property="og:type" content="article" />
    <meta property="og:description" content="The number one vape store in Nairobi. Contact us for quality vape disposables, vale E-liquids and vape devices. We offer paid delivery to all parts of the country." />
    <meta property="og:image" content="https://vapenairobi.com/vape-Nairobi.jpeg" />
    <meta property="og:url" content="https://www.vapenairobi.com" />
@endsection

@section('content')

<div class="row px-5 gradient-header pb-5">
    <div class="col-lg-7 pt-5">
        <h1 class="introducing">Introducing</h1>
        	<h3 class="introducing-product">{{ $introducing->productName}}</h3>
	<div class="long-desc mb-3">
        	<button class="btn btn-danger col-sm-4 mb-2 ">Ksh {{$introducing->productPrice}}/= </button>
        </div>
	<p>{{ $introducing->productShortDescription}}</p>
    </div>
    <div class="col-lg-5 pt-5">
        <a href="{{route('products.show', $introducing->id)}}" class="text-decoration-none text-dark">
            <img src="{{url('storage/' . $introducing->productCategory . '/' . $introducing->productBaseImage)}}"
                height="350px" class="card-img-top px-3 py-3 rounded hover-zoom"  style="zoom:1.5;" alt="{{ $introducing->productName}}" />
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
                            class="card-img-top px-3 py-3 rounded hover-zoom" height="450px"  style="zoom:1.3;" alt="{{$product->productName}}" />

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
                            class="card-img-top px-3 py-3 rounded hover-zoom" style="zoom:1.3;" height="350px" alt="{{$product->productName}}" />

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
                        class="card-img-top px-3 py-3 rounded hover-zoom" height="350px" style="zoom:1.3;" alt="{{$product->productName}}" />

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
                        class="card-img-top px-3 py-3 rounded hover-zoom" height="350px" style="zoom:1.3;" alt="{{$product->productName}}" />

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

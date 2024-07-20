@extends('layouts.ui')

@section('pageName')
{{$product->productName ?? "Vape"}}
@endsection

@section('meta-description')
    <meta name="robots" content="all">
    <meta name="robots" content="max-image-preview:standard">
    <meta name="description" content="{{$product->productShortDescription}}">
    <meta property="og:title" content="{{$product->productName}}" />
    <meta property="og:type" content="article" />
    <meta property="og:description" content="{{$product->productShortDescription}}" />
    <meta property="og:image"
    content="{{url('storage/' . $product->productCategory . '/' . $product->productBaseImage)}}" />
    <meta property="og:url" content="https://www.vapenairobi.com/products/{{$product->id}}" />
@endsection

@section('content')
<div class="row px-4">
    <div class="col-lg-7 px-5 py-5 col-xs-12">
        <h1 class="introducing-product">{{ $product->productName}}</h1>
        <p class="category-explanation">{{ $product->productShortDescription}}</p>
        <div class="long-desc mb-3">
            <button class="btn btn-danger col-sm-4  mb-2 ">Ksh {{$product->productPrice}}/= </button>
        </div>
        <div class="text-center">
            <form action="{{route('whatsapp-link') }}" method="post">
                @csrf
                <div class="">
                    <input type="hidden" name="productName" value="{{ $product->productName}}">
                    <div class="input-group mb-3">
                        <select class="form-select" id="desiredFlavour" name="desiredFlavour"
                            style="background:rgba(0,0,0,0.01); height:50px;border-radius:30px; color:rgb(72, 198, 239); border: 1px solid rgb(72, 198, 239);">
                            <option selected disabled>Choose your flavour</option>
                            @foreach (json_decode($product->productFlavours) as $flavour)
                                <option value="{{ $flavour}}">{{ $flavour}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary dancing-btn" value="Order Now">
            </form>
        </div>
    </div>
    <div class="col-lg-5">
        <img src="{{url('storage/' . $product->productCategory . '/' . $product->productBaseImage)}}"
            class="img-fluid rounded hover-zoom" alt="{{$product->productName}}" />
    </div>
</div>
<div class="row px-4">
    <div class="col-lg-10 px-5 py-5">
        <h2 class="fw-bold">Product Description</h2>
        <p class="mb-5">{!! $product->productLongDescription !!}</p>
    </div>
</div>
<div class="row gradient-vapes">
    <div class="row text-center pt-5">
        <p class="product-explanation">and wait, theres more</p>
    </div>
    <div class="row row-cols-1 row-cols-md-4 g-4 px-5">
        @forelse($related as $product)
            @if ($loop->index == 0)
            @else
                <div class="col">
                    <a href="{{route('products.show', $product->id)}}" class="text-decoration-none text-dark">
                        <div class="mb-2 ofh">
                            <img src="{{url('storage/' . $product->productCategory . '/' . $product->productBaseImage)}}"
                                height="350px" class="card-img-top px-3 py-3 rounded  hover-zoom"
                                alt="{{$product->productName}}" />

                            <div class="text-center">
                                <h3><b>{{ $product->productName }}</b></h3>
                                <button class="btn btn-danger col-sm-6 mb-2">Ksh {{$product->productPrice}}/= </button>
                                <p>{{ $product->productShortDescription}}</p>
                            </div>
                        </div>
                    </a><br><br><br><br>
                </div>
            @endif
        @empty
            <h1 class="text-bold">We are experiencincing a problem at our end, please visit later.</h1>
        @endforelse
    </div>
</div>
@endsection
@extends('layouts.ui')

@section('pageName')
Disposable Vapes
@endsection

@section('content')
<!-- disposables -->
<div class="row gradient-vapes">
    <div class="row text-center pt-5">
        <h1 class="category-header">Savour the moment</h1>
        <p class="category-explanation">Enjoy the great taste, with rich flavours and sleek-looking designs.</p>
    </div>
    <div class="row row-cols-1 row-cols-md-4 g-4 px-5 pb-5">
        @forelse($disposables as $product)
            <div class="col">
                <a href="{{route('products.show', $product->id)}}" class="text-decoration-none text-dark">
                    <div class="mb-2">
                        <img src="{{url('storage/' . $product->productCategory . '/' . $product->productBaseImage)  }}"
                            height="350px" class="card-img-top px-3 py-3 rounded" alt="{{ $product->productName}}" />

                        <div class="text-center">
                            <h3><b>{{ $product->productName }}</b></h3>
                            <p>{{ $product->productShortDescription}}</p>
                        </div>
                    </div>
                </a>
            </div>
        @empty
            <div class="col-lg-12">
                <h1 class="text-bold text-center">Sorry, We have no disposable vapes at the moment.</h1>
            </div>
        @endforelse
    </div>
</div>
@endsection
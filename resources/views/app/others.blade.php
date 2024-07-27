@extends('layouts.ui')

@section('pageName')
OTHERS
@endsection

<!-- disposables -->
<div class="row gradient-vapes">
    <div class="row text-center pt-5">
        <h1 class="category-header">We care</h1>
        <p class="category-explanation">Shop high quality accessories.</p>
    </div>
    <div class="row row-cols-1 row-cols-md-4 g-4 px-5">
        @forelse($others as $product)
            <div class="col">
                <a href="{{route('products.show', $product->id)}}" class="text-decoration-none text-dark">
                    <div class="mb-2">
                        <img src="{{url('storage/' . $product->productCategory . '/' . $product->productBaseImage)  }}" height="350px" class="card-img-top px-3 py-3 rounded"
                            alt="{{$product->productName }}" />

                        <div class="text-center">
                            <h3><b>{{ $product->productName }}</b></h3>
                            <p>{{ $product->productShortDescription}}</p>
                        </div>
                    </div>
                </a>
            </div>
        @empty
            <div class="col-lg-12">
                <h1 class="text-bold text-center">Sorry, We have no accessories vapes at the moment.</h1>
            </div>
        @endforelse
    </div>
</div>
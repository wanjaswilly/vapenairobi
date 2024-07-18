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
            @if ($loop->index == 0)
            @else
                <div class="col">
                    <a href="{{route('products.show', $product->id)}}" class="text-decoration-none text-dark">
                        <div class="mb-2">
                            <img src="/vape{{$loop->index + 2}}.png" height="350px" class="card-img-top px-3 py-3 rounded"
                                alt="Hollywood Sign on The Hill" />

                            <div class="text-center">
                                <h3><b>{{ $product->productName }}</b></h3>
                                <p>{{ $product->productShortDescription}}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endif
        @empty
            <div class="col-lg-12">
                <h1 class="text-bold text-center">Sorry, We have no accessories vapes at the moment.</h1>
            </div>
        @endforelse
    </div>
</div>
@extends('layouts.ui')

@section('pageName')
{{$product->productName ?? "Vape"}}
@endsection

@section('content')
<div class="row px-4">
    <div class="col-lg-12 px-5">
        <h1 class="text-center fw-bolder"></h1>
    </div>
</div>
@endsection
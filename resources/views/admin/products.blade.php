@extends('layouts.adminUI')

@section('pageName')
All Products
@endsection

@section('content')
<div class="row  mt-5 pb-5">
    <div class="row ">
        <h2><b>Products List : {{$productCategory ?? "All Products"}}</b></h2>
        <hr>
        <div class="col">
            <a href="{{route('admin.productsListFilter', ['productCategory' => 'disposables']) }}">
                <div class="card mb-3 py-3">
                    <div class="card-body text-center">
                        <i class="fas fa-square-plus fa-2x"></i>
                        <p class="card-title mt-3"><b>Disposables</b></p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="{{route('admin.productsListFilter', ['productCategory' => 'e-liquids']) }}">
                <div class="card mb-3 py-3">
                    <div class="card-body text-center">
                        <i class="fas fa-square-plus fa-2x"></i>
                        <p class="card-title mt-3"><b>E-liquids</b></p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="{{route('admin.productsListFilter', ['productCategory' => 'devices']) }}">
                <div class="card mb-3 py-3">
                    <div class="card-body text-center">
                        <i class="fas fa-square-plus fa-2x"></i>
                        <p class="card-title mt-3"><b>Devices</b></p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="table-responsive">
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                    <tr>
                        <th>Product</th>
                        <th>Manufacturer </th>
                        <th>Status</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($products as $product)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{url('storage/' . $product->productCategory . '/' . $product->productBaseImage)}}"
                                        class="rounded-circle" alt="{{$product->productName}}"
                                        style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">{{$product->productName}}</p>
                                        <p class="text-muted mb-0">{{ $product->productCategory}}</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">{{$product->productManufacturer}}</p>
                                <p class="text-muted mb-0">{{$product->productPrice}}</p>
                            </td>
                            <td>
                                <a href="{{ route('admin.editProductStatus', $product->id)}}">
                                    <span
                                        class="badge badge-primary rounded-pill d-inline">{{$product->productStatus}}</span>
                                </a>
                            </td>
                            <td>{{$product->productPrice}}</td>
                            <td>
                                <a href="{{ route('products.edit', $product->id)}}">
                                    <button type="button" class="btn btn-warning btn-rounded btn-sm fw-bold"
                                        data-mdb-ripple-color="dark">
                                        Edit
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>No products available</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
@extends('layouts.adminUI')

@section('pageName')
ADMIN
@endsection

@section('content')
<div class="row mt-5 mx-3">
    <div class="col-lg-4">
        <a class="text-decoration-none text-dark" href="{{ route('products.create')}}">
            <div class="card mb-3 py-4">
                <div class="card-body text-center">
                    <i class="fas fa-square-plus fa-8x"></i>
                    <h5 class="card-title mt-3"><b>Add New Product</b></h5>
                    <p class="card-text">Add new products to site database</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-4">
        <a class="text-decoration-none text-dark" href="{{ route('admin.productList')}}">
            <div class="card mb-3 py-4">
                <div class="card-body text-center">
                    <i class="fas fa-rectangle-list fa-8x"></i>
                    <h5 class="card-title mt-3"><b>View Products</b></h5>
                    <p class="card-text">List, edit and delete existing products</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-4">
        <a class="text-decoration-none text-dark" href="{{ route('admin.siteStatistics')}}">
            <div class="card mb-3 py-4">
                <div class="card-body text-center">
                    <i class="fas fa-chart-column fa-8x"></i>
                    <h5 class="card-title mt-3"><b>View Site Statistics</b></h5>
                    <p class="card-text">View visit hours, platforms and most viewed products</p>
                </div>
            </div>
        </a>
    </div>
</div>

@endsection
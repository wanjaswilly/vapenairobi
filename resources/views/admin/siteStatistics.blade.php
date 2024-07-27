@extends('layouts.adminUI')

@section('pageName')
Site Statistics
@endsection

@section('content')
<div class="row mt-5 pb-5 mx-3">
    <div class="row">
        <h2><b>Site Statistics</b></h2>
        <hr>
        <div class="col">
            <div class="col">
                <a href="{{route('admin.productsListFilter', ['productCategory' => 'devices']) }}">
                    <div class="card mb-3 py-3">
                        <div class="card-body text-center">
                            <i class="fas fa-square-plus fa-2x"></i>
                            <p class="card-title mt-3"><b>Locations</b></p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col">
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
        <div class="col">
            <div class="col">
                <a href="{{route('admin.productsListFilter', ['productCategory' => 'devices']) }}">
                    <div class="card mb-3 py-3">
                        <div class="card-body text-center">
                            <i class="fas fa-square-plus fa-2x"></i>
                            <p class="card-title mt-3"><b>Time</b></p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
                <tr>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Position</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>We are working on this.</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
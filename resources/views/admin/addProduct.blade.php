@extends('layouts.adminUI')

@section('pageName')
Add Product
@endsection

@section('content')
<div class="d-flex align-items-center justify-content-center">
    <div class="col-sm-6 mt-5 mb-4">
        <form action="{{route('products.store')}}" method="POST" autocomplete="off">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <h3 class="text-center pt-1 pb-1"><b>Add A Product</b></h3>
            <hr>
            <div class="row mb-4 ">
                @if($errors->any())
                    {{ implode('', $errors->all('<div class="bg-danger">:message</div>')) }}
                @endif
            </div>
            @csrf
            <div class="row mb-4">
                <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <input type="text" id="productName" name="productName" class="form-control" required />
                        <label class="form-label" for="productName">Product Name</label>
                    </div>
                </div>
                <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <input type="number" id="productPrice" name="productPrice" class="form-control" required />
                        <label class="form-label" for="productPrice">Product Price</label>
                    </div>
                </div>
            </div>

            <div class="">
                <select class="form-select" id="productCategory"  name="productCategory" style="background:rgba(0,0,0,0.01);" required>
                    <option selected disabled>Choose a Product Category</option>
                    <option value="disposables">Disposables</option>
                    <option value="e-liquids">E-liquids</option>
                    <option value="devices">Devices</option>
                    <option value="others">Others</option>
                </select>
            </div>

            <!-- Text input -->
            <div data-mdb-input-init class="form-outline mt-4">
                <input type="text" id="productFlavours" name="productFlavours" class="form-control" required />
                <label class="form-label" for="productColors">Flavours Available</label>
            </div>
            <small>Separate each flavour with a comma</small>

            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4 mt-4">
                <input type="text" id="productManufacturer" name="productManufacturer" class="form-control" />
                <label class="form-label" for="productManufacturer">Product Manufacturer</label>
            </div>

            <!-- Number input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" id="productShortDescription" name="productShortDescription" class="form-control" />
                <label class="form-label" for="productShortDescription">Short Description</label>
            </div>

            <!-- Message input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <textarea class="form-control" id="productLongDescription" name="productLongDescription"
                    rows="4"></textarea>
                <label class="form-label" for="productLongDescription">Additional information</label>
            </div>

            <!-- Submit button -->
            <button data-mdb-ripple-init type="submit" class="btn btn-primary ">Next</button>
        </form>
    </div>
</div>
@endsection
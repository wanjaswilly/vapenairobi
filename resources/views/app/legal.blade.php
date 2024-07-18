@extends('layouts.ui')

@section('pageName')
{{$product->productName ?? "Vape"}}
@endsection

@section('content')
<div class="row px-4">
    <div class="col-lg-12 px-5 mt-5">
        <h1 class="text-center fw-bolder">Legal Conditions</h1>
        <p>By browsing our website you acknowledge the following legal conditions.</p>
        <h3> Privacy</h3>
        <p>Your privacy is very important to us. 
            We designed our Data Policy to make important disclosures about how you can use Vape Nairobi to view and shop vapes and vape products.
            We collect and can use your location, device type and shopping information to improve our website. 
            We encourage you to read the Data Policy, and to use it to help you make informed decisions.
        </p>
        <h3>Sharing Your Information</h3>
        <p>To use our website, you must be 18 years or older. By using our website you agree that you have given the correct current age at a given time.</p>
        

    </div>
</div>
@endsection
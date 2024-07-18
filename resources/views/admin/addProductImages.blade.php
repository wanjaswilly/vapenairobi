@extends('layouts.adminUI')

@section('pageName')
Add Product
@endsection

@section('content')
<div class="d-flex align-items-center justify-content-center">
    <div class="col-sm-6 mt-5 mb-5 pb-3">
        <form action="{{route('products.saveProductImages')}}" method="POST"  enctype="multipart/form-data" autocomplete="off">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <h3 class="text-center pt-1 pb-1"><b>Add Product Images</b></h3>
            <hr>
            <div class="row mb-4 ">
                @if($errors->any())
                    {{ implode('', $errors->all('<div class="bg-danger">:message</div>')) }}
                @endif
            </div>
            @csrf

            <div class="row mb-4">
                <input type="file" id="file-input" name="productImages[]" multiple required>
                <input type="hidden" name="productID" value="{{ $productID }}">

            </div>
            <hr>
            <div id="preview-container"></div>


            <!-- Submit button -->
            <button data-mdb-ripple-init type="submit" class="btn btn-primary mt-3 mx-2">Next</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .preview {
            display: inline;
            margin: 10px;
        }

        .preview img {
            width: 300px;
            height: 170px;
        }
    </style>

    <script>
        $(document).ready(function () {
            $("#file-input").on("change", function () {
                var files = $(this)[0].files;
                $("#preview-container").empty();
                if (files.length > 0) {
                    for (var i = 0; i < files.length; i++) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            $("<div class='preview pb-2'><img src='" + e.target.result + "'><button class='delete' style='background:red;'>X</button></div>").appendTo("#preview-container");
                        };
                        reader.readAsDataURL(files[i]);
                    }
                }
            });
            $("#preview-container").on("click", ".delete", function () {
                $(this).parent(".preview").remove();
                $("#file-input").val(""); // Clear input value if needed
            });
        });
    </script>
</div>
@endsection
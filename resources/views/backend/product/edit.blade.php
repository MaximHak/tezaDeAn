@extends('backend.layouts.master')
@section('content')
    <div id="app">
        @include('backend.layouts.sidebar')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Add product</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="col-md-6 col-12">
                                            @if($errors->any)
                                                <ul>
                                                    @foreach($errors->all() as $error)
                                                        <div class="alert alert-danger alert-dismissible show fade">
                                                            {{$error}}
                                                            <button type="button" class="btn-close"
                                                                    data-bs-dismiss="alert" aria-label="Close"></button>
                                                        </div>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </div>
                                        <form action="{{route('product.update',$product->id)}}" method="post" class="form">
                                            @csrf
                                            @method('patch')
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Title <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" id="first-name-column" class="form-control"
                                                           placeholder="Title" name="title"
                                                           value="{{$product->title}}">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-12">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="editor">Summary</label>
                                                            <textarea name="summary" placeholder="Write your summary"
                                                                      style="height: 100px;" id="editor">
                                                            {{$product->summary}}    </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-12">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="editor1">Description</label>
                                                            <textarea name="description"
                                                                      placeholder="Write your description"
                                                                      style="height: 100px;" id="editor1">
                                                              {{$product->description}}     </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <div class="form-group">
                                                    <label for="thumbnail">Photo</label>
                                                    <div class="input-group">
                                                        <span class="input-group-btn"><a id="lfm" data-input="thumbnail"
                                                                                         data-preview="holder"
                                                                                         class="btn btn-primary"><i
                                                                    class="fa fa-picture-o"></i> Choose</a></span>
                                                        <input id="thumbnail" value="{{$product->photo}}"
                                                               class="form-control" type="text"
                                                               name="photo">
                                                    </div>
                                                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                                                </div>
                                            </div>


                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Stock<span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" id="first-name-column" class="form-control"
                                                           placeholder="Stock" name="stock"
                                                           value="{{$product->stock}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Price <span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" step="any" id="first-name-column"
                                                           class="form-control"
                                                           placeholder="Price" name="price"
                                                           value="{{$product->price}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Discount</label>
                                                    <input type="number" step="any" id="first-name-column"
                                                           class="form-control"
                                                           placeholder="Discount" name="discount"
                                                           value="{{$product->discount}}">
                                                </div>
                                            </div>


                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="country-floating">Brands</label>
                                                    <select class="form-select" name="brand_id" id="brand_id">
                                                        <option value="">--Brands--</option>
                                                        @foreach(\App\Models\Brand::get() as $brand)
                                                            <option
                                                                @if($product->brand_id == $brand->id) selected
                                                                @endif   value="{{$brand->id}}">
                                                                {{$brand->title}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="country-floating">Category</label>
                                                    <select class="form-select" name="cat_id" id="category_id">
                                                        <option value="">--Categories--</option>
                                                        @foreach(\App\Models\Category::where('is_parent',1)->get() as $cat)
                                                            <option
                                                                @if($product->cat_id == $cat->id) selected
                                                                @endif    value="{{$cat->id}}">
                                                                {{$cat->title}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                                <div class="col-md-6 col-12 d-none" id="child_cat_div">
                                                    <div class="form-group">
                                                        <label for="country-floating">Child Category</label>
                                                        <select class="form-select" name="child_cat_id"
                                                                id="child_cat_id">

                                                        </select>
                                                    </div>
                                                </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="country-floating">Vendors</label>
                                                    <select class="form-select" name="vendor_id" id="vendor_id">
                                                        <option value="">--Vendors--</option>
                                                        @foreach(\App\Models\User::where('role','vendor')->get() as $vendor)
                                                            <option
                                                                @if($product->vendor_id == $vendor->id) selected
                                                                @endif    value="{{$vendor->id}}">
                                                                {{$vendor->full_name}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="country-floating">Size</label>
                                                    <select class="form-select" name="size" id="size">
                                                        <option value="">--Size--</option>
                                                        <option
                                                            value="S" {{$product->size === 'S' ? 'selected' : ''}}>
                                                            S
                                                        </option>
                                                        <option
                                                            value="M" {{$product->size === 'M' ? 'selected' : ''}}>
                                                            M
                                                        </option>
                                                        <option
                                                            value="L" {{$product->size === 'L' ? 'selected' : ''}}>
                                                            L
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="country-floating">Condition</label>
                                                    <select class="form-select" name="condition" id="condition">
                                                        <option value="">--Condition--</option>
                                                        <option
                                                            value="new" {{$product->condition === 'new' ? 'selected' : ''}}>
                                                            New
                                                        </option>
                                                        <option
                                                            value="popular" {{$product->condition === 'popular' ? 'selected' : ''}}>
                                                            Popular
                                                        </option>
                                                        <option
                                                            value="winter" {{$product->condition === 'winter' ? 'selected' : ''}}>
                                                            Winter
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit
                                                </button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $('#lfm').filemanager('image');
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor1'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>

            var child_cat_id = {{$product->child_cat_id}};
            $('#category_id').change(function () {
                var cat_id = $(this).val();
                if (cat_id != null) {
                    $.ajax({
                        url: '/admin/category/' + cat_id + '/child',
                        type: 'POST',
                        data: {
                            _token: '{{csrf_token()}}',
                            cat_id: cat_id,
                        },
                        success: function (response) {
                            $('#child_cat_id').empty()
                            var html_option = "<option value=''>---Child category---</option>";
                            if (response.status) {
                                $('#child_cat_div').removeClass('d-none');
                                $.each(response.data, function (title, id) {
                                    html_option += "<option value='" + id + "' " + (child_cat_id == id ? 'selected' : '') + ">" + title + "</option>"
                                })
                            } else {
                                $('#child_cat_div').addClass('d-none');
                                $('#child_cat_id').empty()
                            }
                            $('#child_cat_id').append(html_option);
                        }
                    });
                }
            });
            if (child_cat_id != null) {
                $('#category_id').change();
            }
    </script>
@endsection




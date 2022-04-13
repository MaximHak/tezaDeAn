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
                            <h3>Add category</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Category</li>
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
                                        <form action="{{route('category.store')}}" method="post" class="form">
                                            @csrf
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Title </label>
                                                    <input type="text" id="first-name-column" class="form-control"
                                                           placeholder="Title" name="title"
                                                           value="{{old('title')}}">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-12">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="editor">Summary</label>
                                                            <textarea name="summary" placeholder="Write your summary"
                                                                      style="height: 100px;" id="editor">
                                                                </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-12">
                                                <div class="form-group">
                                                    <label for="thumbnail">Photo</label>
                                                    <div class="input-group">
                                                        <span class="input-group-btn"><a id="lfm" data-input="thumbnail"
                                                                                         data-preview="holder"
                                                                                         class="btn btn-primary"><i
                                                                    class="fa fa-picture-o"></i> Choose</a></span>
                                                        <input id="thumbnail" class="form-control" type="text"
                                                               name="photo">
                                                    </div>
                                                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-12">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12">

                                                            <li class="d-inline-block me-2 mb-1">
                                                                <div class="form-check">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <label class="form-check-label" for="is_parent">Is
                                                                            parent</label>
                                                                        <input id="is_parent" type="checkbox" value="1"
                                                                               class="form-check-input form-check-primary"
                                                                               checked="" name="is_parent">

                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12 d-none" id="parent_cat">
                                                <div class="form-group">
                                                    <label for="country-floating">Parent Category</label>
                                                    <select class="form-select" name="parent_id" id="parent_id">
                                                        <option value="">--Parent category--</option>
                                                        @foreach($parent_cats as $pcats)
                                                            <option value="{{$pcats->id}}">{{$pcats->title}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="country-floating">Status</label>
                                                    <select class="form-select" name="status" id="status">
                                                        <option value="">--Status--</option>
                                                        <option
                                                            value="active" {{old('status') === 'active' ? 'selected' : ''}}>
                                                            Active
                                                        </option>
                                                        <option
                                                            value="inactive" {{old('status') === 'inactive' ? 'selected' : ''}}>
                                                            Inactive
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
    </script>
    <script>
        $(document).ready(function () {
            $('#is_parent').change(function (e) {
                e.preventDefault();
                var is_checked = $('#is_parent').prop('checked');
                if(is_checked){
                    $('#parent_cat').addClass('d-none');
                    $('#parent_id').val('');
                    $('#is_parent').val(1);
                }else{
                    $('#is_parent').val(0);
                    $('#parent_cat').removeClass('d-none');
                }
            });
        });
    </script>
@endsection




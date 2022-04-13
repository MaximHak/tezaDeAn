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
                            <h3>Edit user</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Users</li>
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
                                        <form action="{{route('user.update',$user->id)}}" method="post" class="form">
                                            @csrf
                                            @method('patch')
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Full name </label>
                                                    <input type="text" id="first-name-column" class="form-control"
                                                           placeholder="Title" name="full_name"
                                                           value="{{$user->full_name}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Username</label>
                                                    <input type="text" id="first-name-column" class="form-control"
                                                           placeholder="Username" name="username"
                                                           value="{{$user->username}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Email</label>
                                                    <input type="email" id="first-name-column" class="form-control"
                                                           placeholder="email" name="email"
                                                           value="{{$user->email}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Phone</label>
                                                    <input type="number" id="first-name-column" class="form-control"
                                                           placeholder="Phone" name="phone"
                                                           value="{{$user->phone}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Address</label>
                                                    <input type="text" id="first-name-column" class="form-control"
                                                           placeholder="Address" name="address"
                                                           value="{{$user->address}}">
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
                                                        <input id="thumbnail" value="{{$user->photo}}"
                                                               class="form-control" type="text"
                                                               name="photo">
                                                    </div>
                                                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="country-floating">Role</label>
                                                    <select class="form-select" name="role" id="role">
                                                        <option value="">--Status--</option>
                                                        <option
                                                            value="admin" {{$user->role === 'admin' ? 'selected' : ''}}>
                                                            Admin
                                                        </option>
                                                        <option
                                                            value="vendor" {{$user->role === 'vendor' ? 'selected' : ''}}>
                                                            Vendor
                                                        </option>
                                                        <option
                                                            value="customer" {{$user->role === 'customer' ? 'selected' : ''}}>
                                                            Customer
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="country-floating">Cities</label>
                                                    <ul class="list-group">
                                                        @foreach($cities as $city)
                                                            <li class="list-group-item">
                                                                <input name="city[]" class="form-check-input me-1" type="checkbox"
                                                                       value="{{$city->id}}" aria-label="...">
                                                            {{$city->title}}
                                                            </li>
                                                        @endforeach
                                                    </ul>
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
@endsection




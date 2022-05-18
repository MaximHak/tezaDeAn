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
                        <div style="display: flex;" class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Products</h3>
                            <a href="{{route('product.create')}}" style="margin-left: 10px;"
                               class="btn btn-primary rounded-pill">Add product</a>

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
                <section class="section">

                    <div class="card">


                        <div class="card-header">
                            <div class="col-md-12">
                                @include('backend.layouts.notification')
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                <tr>
                                    <th>S.N.</th>
                                    <th>Title</th>
                                    <th>Photo</th>
                                    <th>Price</th>
                                    <th>Discount</th>
                                    <th>Size</th>
                                    <th>Condition</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $item)
                                    <div class="modal fade" id="productID{{$item->id}}" tabindex="-1"
                                         aria-labelledby="exampleModalCenterTitle" style="display: none;"
                                         aria-hidden="true">
                                        <div
                                            class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
                                            role="document">
                                            @php
                                                $product = \App\Models\Product::where('id',$item->id)->first();
                                            @endphp
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"
                                                        id="exampleModalCenterTitle">{{$product->title}}
                                                    </h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="card">
                                                        <div class="card-content">
                                                            <img src="{{$item->photo}}"
                                                                 class="card-img-top img-fluid" alt="singleminded">
                                                            <div class="card-body">
                                                                <p class="card-text">
                                                                    <span class="fw-bold">   Summary:</span> {!!html_entity_decode($product->summary)!!}
                                                                </p>
                                                                <p class="card-text">
                                                                    <span class="fw-bold">   Description: </span>{!!html_entity_decode($product->description)!!}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 d-flex">
                                                            <div class="col-md-6">
                                                                <ul class="list-group list-group-flush">
                                                                    <li class="list-group-item">
                                                                        <span class="fw-bold">    Category: </span>{{\App\Models\Category::where('id',$product->cat_id)->value('title')}}
                                                                    </li>
                                                                    @if(!empty($product->child_cat_id))
                                                                        <li class="list-group-item">
                                                                           <span class="fw-bold"> Child Category:</span> {{\App\Models\Category::where('id',$product->child_cat_id)->value('title')}}
                                                                        </li>
                                                                    @else
                                                                        <li class="list-group-item">
                                                                            <span class="fw-bold">     Child Category: No child!</span>
                                                                        </li>
                                                                    @endif
                                                                    <li class="list-group-item"> <span class="fw-bold"> Brand: </span>{{\App\Models\Brand::where('id',$product->brand_id)->value('title')}}
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <ul class="list-group list-group-flush">
                                                                    <li class="list-group-item">
                                                                        <span class="fw-bold">       Price:</span> {{number_format($product->price,2)}} MDL
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <span class="fw-bold">    Discount:</span> {{$product->discount}} %
                                                                    </li>
                                                                    <li class="list-group-item"> <span class="fw-bold"> Offer
                                                                            price:</span> {{number_format($product->offer_price,2) }}
                                                                        MDL
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light-secondary"
                                                            data-bs-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Close</span>
                                                    </button>
                                                    <button type="button" class="btn btn-primary ml-1"
                                                            data-bs-dismiss="modal">
                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Accept</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item->title}}</td>
                                        @php
                                        $photo = explode(',',$item->photo);
                                        @endphp
                                        <td><img src="{{$photo[0]}}" style="max-height: 90px;max-width: 120px;"
                                                 alt="product img"></td>
                                        <td>{{number_format($item->price,2)}} MDL</td>
                                        <td>{{$item->discount}}%</td>
                                        <td>{{$item->size}}</td>
                                        <td>
                                            @if($item->condition == 'new')
                                                <span class="badge bg-success">New</span>
                                            @elseif($item->condition == 'popular')
                                                <span class="badge bg-warning">Popular</span>
                                            @else
                                                <span class="badge bg-primary">Winter</span>
                                            @endif
                                        </td>
                                        <td>

                                            <input type="checkbox" name="toggle" value="{{$item->id}}"
                                                   @if($item->status == "active") checked @endif data-toggle="toggle"
                                                   data-on="Active" data-off="Inactive" data-size="sm"
                                                   data-onstyle="success" data-offstyle="danger">

                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                               data-bs-target="#productID{{$item->id}}"
                                               title="Show"
                                               class="btn btn-sm btn-outline-success" data-placement="bottom"><i
                                                    class="bi bi-eye"></i></a>
                                            <a href="{{route('product.edit',$item->id)}}" data-toggle="tooltip"
                                               title="Edit"
                                               class="btn btn-sm btn-outline-warning" data-placement="bottom"><i
                                                    class="bi bi-pencil-square"></i></a>
                                            <form action="{{route('product.destroy',$item->id)}}"
                                                  style="display: contents;" method="POST">
                                                @csrf
                                                @method('delete')
                                                <a href="" data-toggle="tooltip" data-id="{{$item->id}}" title="Delete"
                                                   class="deleteBtn btn btn-sm btn-outline-danger"
                                                   data-placement="bottom"><i
                                                        class="bi bi-trash"></i></a>
                                            </form>

                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>






@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csf-token"]').attr('content')
                }
            });
            $('.deleteBtn').click(function (e) {
                console.log('test');
                e.preventDefault();
                var form = $(this).closest('form');
                var dataID = $(this).data('id');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        setTimeout(function () {
                            form.submit();
                        }, 500);
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('input[name=toggle]').on('change', function () {
                const mode = $(this).prop('checked');
                var id = $(this).val();
                $.ajax({
                    url: "{{route('product.status')}}",
                    type: "POST",
                    data: {
                        _token: '{{csrf_token()}}',
                        mode: mode,
                        id: id,
                    },
                    success: function (response) {
                        console.log(response.log);
                    }
                })
            });
        });
    </script>
@endsection

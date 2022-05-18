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
                            <h3>Categories</h3>
                            <a href="{{route('category.create')}}" style="margin-left: 10px;" class="btn btn-primary rounded-pill">Add category</a>

                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Categories</li>
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
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $item)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item->title}}</td>
                                        <td>

                                            <input type="checkbox" name="toggle" value="{{$item->id}}"
                                                   @if($item->status == "active") checked @endif data-toggle="toggle"
                                                   data-on="Active" data-off="Inactive" data-size="sm"
                                                   data-onstyle="success" data-offstyle="danger">

                                        </td>
                                        <td>
                                            <a href="{{route('category.edit',$item->id)}}" data-toggle="tooltip"
                                               title="Edit"
                                               class="btn btn-sm btn-outline-warning" data-placement="bottom"><i
                                                    class="bi bi-pencil-square"></i></a>
                                            <form action="{{route('category.destroy',$item->id)}}"
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
                        setTimeout(function (){
                            form.submit();
                        },500);
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
                    url: "{{route('category.status')}}",
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

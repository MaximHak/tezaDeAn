
@if(\Illuminate\Support\Facades\Session::has('success'))


    <div class="alert alert-success alert-dismissible show fade" id="alert">
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

@elseif(session('error'))

    <div class="alert alert-danger alert-dismissible show fade" id="alert">
        {{session('error')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

@endif

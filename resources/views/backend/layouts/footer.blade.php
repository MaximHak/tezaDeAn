<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="{{asset('backend/assets/vendors/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('backend/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('backend/assets/js/bootstrap.bundle.min.js')}}"></script>

{{--<script src="{{asset('backend/assets/js/extensions/sweetalert2.js')}}"></script>--}}
<script src="{{asset('backend/assets/vendors/sweetalert2/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('backend/assets/js/pages/dashboard.js')}}"></script>

<script src="{{asset('backend/assets/js/mazer.js')}}"></script>

{{--<script src="{{asset('backend/assets/vendors/simple-datatables/simple-datatables.js')}}"></script>--}}
<script src="{{asset('backend/assets/vendors/bootstrap4-toggle/js/bootstrap4-toggle.min.js')}}"> </script>

@yield('scripts')

<script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>
<script>
    setTimeout(function (){
        $('#alert').slideUp();
    },4000);
</script>



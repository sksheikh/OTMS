<!-- bundle -->
<script src="{{asset('/')}}admin/assets/js/vendor.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/app.min.js"></script>

<!-- third party js -->
<script src="{{asset('/')}}admin/assets/js/vendor/apexcharts.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
<!-- third party js ends -->

<!-- Datatables js -->
<script src="{{asset('/')}}admin/assets/js/vendor/jquery.dataTables.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/vendor/dataTables.bootstrap5.js"></script>
<script src="{{asset('/')}}admin/assets/js/vendor/dataTables.responsive.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/vendor/responsive.bootstrap5.min.js"></script>

<!-- Datatable Init js -->
<script src="{{asset('/')}}admin/assets/js/pages/demo.datatable-init.js"></script>


<!-- demo app -->
<script src="{{asset('/')}}admin/assets/js/pages/demo.dashboard.js"></script>
<!-- end demo js-->

<!--Toaster Js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@if(Session::has('success'))
<script>
    toastr.success("{{Session::get('success')}}")
</script>
{{Session::forget('success')}}
@endif


@if(Session::has('error'))
    <script>
        toastr.error("{{Session::get('error')}}")
    </script>
    {{Session::forget('error')}}
@endif


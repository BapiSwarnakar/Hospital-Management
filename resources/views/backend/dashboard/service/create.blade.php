@extends('backend.layout.main')
@push('title')
    <title>Add Service</title>
@endpush
@section('main-content')
    <!-- Content wrapper -->
    <div class="content-wrapper">

        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">



            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Add service</h5>
                            <small class="text-muted float-end">
                                <a href="{{ route('admin.service.view') }}" class="btn btn-info">View</a>
                            </small>
                        </div>
                        <div class="card-body">
                            <form method="POST" id="ServiceRequest">
                                @csrf
                                <div class="row border m-1">
                                    <h6 class="border-bottom p-2">Service details:-</h6>
                                    <div class="mb-3 col-md-5">
                                        <label class="form-label" for="basic-default-fullname"><b>Service Name</b></label>
                                        <input type="text" class="form-control" id="Service_Name" name="Service_Name"
                                            placeholder="Enter Service Name" required>
                                    </div>
                                    <div class="mb-3 col-md-3">
                                        <label class="form-label" for="basic-default-fullname"><b>Amount</b></label>
                                        <input type="number" class="form-control" id="Amount" name="Amount"
                                            placeholder="Enter Amount" required>
                                    </div>
                                    <div class="mb-3 col-md-3">
                                        <label for="exampleFormControlTextarea1">Service Details</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" Name="Service_Detalis" id="Service_Detalis" rows="3" required></textarea>
                                    </div>
                                    <div class="mb-3 d-flex justify-content-center mt-2">
                                        <button type="submit" id="submit"
                                            onclick="requestSend($('#ServiceRequest'),'{{ route('admin.service.store') }}')"
                                            name="submit"
                                            class="btn btn-primary waves-effect waves-light">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>



        </div>
        <!-- / Content -->



        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
@endsection()
@section('script')
    <script>
        sidebarSelectMaintain("role-menu", "add-role");

        function permissionCheck(permission) {
            if (permission == '0') {
                $('#permission_list').removeClass('d-none');
            } else {
                $('#permission_list').addClass('d-none');
            }
        }
    </script>
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            $('.datatable').DataTable({
                "columnDefs": [{
                    'targets': 0,
                    'searchable': false,
                    'orderable': false,

                }],
                "paging": false
            });

            $("#selectAll").click(function() {
                var checkAll = $("#selectAll").prop('checked');
                if (checkAll) {
                    $(".case").prop("checked", true);
                } else {
                    $(".case").prop("checked", false);
                }
            });

            $(".case").click(function() {
                if ($(".case").length == $(".case:checked").length) {
                    $("#selectAll").prop("checked", true);
                } else {
                    $("#selectAll").prop("checked", false);
                }

            });
        });
    </script>
@endsection()

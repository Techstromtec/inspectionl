@extends('layouts/contentNavbarLayout')

@section('title', 'Leads')

@section('content')
<div class="card">
   <div class="card-header">
      <h5 class="card-title mb-0">Leads</h5>
      <!--<button style="float:right;padding-bottom:10px" class="btn btn-secondary add-new btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser"><span><i class="bx bx-plus me-0 me-sm-2"></i><span class="d-none d-sm-inline-block">Create Invoice</span></span></button> -->
   </div>
   @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="card-datatable table-responsive">
        <div class="dataTables_wrapper dt-bootstrap5 no-footer">
       
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered" id="leads-table">
        <thead>
            <tr>
                <th>Contact Details</th>
                <th>Request Number</th>
                <th>Vehicle Details</th>
                <th>Client Details</th>
                <th>Executive Details</th>
                <th>Updated On</th>
                <th>Actions</th>
            </tr>
        </thead>
    </table>
    </div>
</div>
<!-- Add these within the <head> section -->
<!--/ Basic Bootstrap Table -->
<script src="{{ asset('assets/vendor/js/jquery-1.9.1.min.js') }}"></script>
<script src="{{ asset('assets/vendor/js/jquery.dataTables.min.js') }}"></script>
<link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/sweetalert2/sweetalert2.css" />

<!--/ Responsive Table -->

<script>
      $(document).ready(function () {
            $('#leads-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('leads.index') }}",
                columns: [
                   
                    {
                        data: null, // Use null to access the entire row data
                        render: function (data, type, row) {
                            // Merge customer_name and customer_mobile into one column
                            return data.customer_name+'</br><span class="badge rounded-pill bg-success"><i class="bx bx-phone-call"></i>' + data.customer_mobile + ' </span> ' ;
                        }
                    },
                    { data: 'id', name: 'id' },
                    { data: 'registration_no', name: 'registration_no' },
                    { data: 'client_company', name: 'client_company' },
                    {
                        data: null, // Use null to access the entire row data
                        render: function (data, type, row) {
                            // Merge customer_name and customer_mobile into one column
                            return data.executive_name + ' (' + data.executive_mobile + ')';
                        }
                    },
                    { data: 'updated_at', name: 'updated_at' },
                    { data: 'action', name: 'action', orderable: false, searchable: false }
                ]
            });
    });
</script>
<link rel="stylesheet" href="{{ asset('assets/vendor/css/jquery.dataTables.min.css') }}">
@endsection


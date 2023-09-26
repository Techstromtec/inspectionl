@extends('layouts/contentNavbarLayout')

@section('title', 'Agreement')

@section('content')
  
  <div class="col-md-12">
    <div class="card mb-4">
      <h5 class="card-header">Agreement</h5>
      <div class="card-body">
      
        <table id="agreementtable" class="ddatatables-users table border-top dataTable no-footer dtr-column" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Agreement Number</th>
                <th>Party Name</th>
                <th>Due Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        </table>
      </div>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->

  <script src="{{ asset('assets/vendor/js/jquery-1.9.1.min.js') }}"></script>
<script src="{{ asset('assets/vendor/js/jquery.dataTables.min.js') }}"></script>
<link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/sweetalert2/sweetalert2.css" />
<!--/ Responsive Table -->

<script>
    $(document).ready(function () {
        $('#agreementtable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('agreements.index') }}",
            columns: [
                { data: 'id', name: 'id' },
                { data: 'doc_serial_no', name: 'doc_serial_no' },
                { data: 'party_name', name: 'party_name' }, 
                { data: 'doc_expiry', name: 'doc_expiry' },
                { data: 'status', name: 'status' },
                { data: 'action', name: 'action', orderable: false, searchable: false },
            ]
        });
    });
</script>
<link rel="stylesheet" href="{{ asset('assets/vendor/css/jquery.dataTables.min.css') }}">
@endsection
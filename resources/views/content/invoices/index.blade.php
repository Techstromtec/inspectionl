@extends('layouts/contentNavbarLayout')

@section('title', 'Invoice - List')

@section('content')
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="//datatables.net/download/build/nightly/jquery.dataTables.js"></script>
<style>
.table-responsive {
    overflow-x: unset;
    -webkit-overflow-scrolling: touch;
}
</style>
<!-- Basic Bootstrap Table -->
<div class="card">
   <div class="card-header">
      <h5 class="card-title mb-0">Stock</h5>
      <!--<button style="float:right;padding-bottom:10px" class="btn btn-secondary add-new btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser"><span><i class="bx bx-plus me-0 me-sm-2"></i><span class="d-none d-sm-inline-block">Create Invoice</span></span></button> -->
   </div>
   <div class="card-datatable table-responsive">
      <div class="dataTables_wrapper dt-bootstrap5 no-footer">
      @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table id="invoicesTable" class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Invoice Number</th>
                <th>User</th>
                <th>Amount</th>
                <th>Issue Date</th>
                <th>Due Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Invoices will be loaded dynamically using DataTables -->
        </tbody>
    </table>

      </div>
   </div>
   
   <!-- Offcanvas to add new user -->
   <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser" aria-labelledby="offcanvasAddUserLabel">
      <div class="offcanvas-header">
         <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Add User</h5>
         <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body mx-0 flex-grow-0">
         <form class="add-new-user pt-0 fv-plugins-bootstrap5 fv-plugins-framework" id="addNewUserForm" novalidate="novalidate">
            <input type="hidden" name="id" id="user_id" value="">
            <div class="mb-3 fv-plugins-icon-container">
               <label class="form-label" for="add-user-fullname">User Name</label>
               <input readonly type="text" class="form-control" id="add-user-username" placeholder="John Doe" name="name" aria-label="John Doe" value="">
               <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            
            <div class="mb-3 fv-plugins-icon-container">
               <label class="form-label" for="add-user-fullname">Full Name</label>
               <input type="text" class="form-control" id="add-user-fullname" placeholder="John Doe" name="name" aria-label="John Doe" value="">
               <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <div class="mb-3 fv-plugins-icon-container">
               <label class="form-label" for="add-user-email">Email</label>
               <input type="text" id="add-user-email" class="form-control" placeholder="john.doe@example.com" aria-label="john.doe@example.com" name="add-user-email" value="">
               <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <div class="mb-3 fv-plugins-icon-container">
               <label class="form-label" for="add-user-contact">Mobile</label>
               <input type="text" id="add-user-mobile" class="form-control phone-mask" placeholder="+91 999 999 9999" aria-label="john.doe@example.com" name="userContact" value="">
               <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <div class="mb-3 fv-plugins-icon-container">
            <label class="form-label" for="add-user-address">Adress</label>
                <textarea class="form-control" id="add-user-address" name="add-user-address" rows="3" placeholder="Enter address"></textarea>
            </div>
            <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
            <input type="hidden">
         </form>
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
        $('#invoicesTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('invoices.index') }}",
            columns: [
                { data: 'id', name: 'id' },
                { data: 'invoice_number', name: 'invoice_number' },
                { data: 'customer_name', name: 'customer_name' }, 
                { data: 'amount', name: 'amount' },
                { data: 'issue_date', name: 'issue_date' },
                { data: 'due_date', name: 'due_date' },
                { data: 'status', name: 'status' },
                { data: 'action', name: 'action', orderable: false, searchable: false },
            ]
        });
    });
</script>
<link rel="stylesheet" href="{{ asset('assets/vendor/css/jquery.dataTables.min.css') }}">
@endsection


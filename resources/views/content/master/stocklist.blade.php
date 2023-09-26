@extends('layouts/contentNavbarLayout')

@section('title', 'Stock - List')

@section('content')
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="//datatables.net/download/build/nightly/jquery.dataTables.js"></script>
<div class="row g-4 mb-4">
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>Stock</span>
            <div class="d-flex align-items-end mt-2">
              <h3 class="mb-0 me-2">3</h3>
              <small class="text-success">(100%)</small>
            </div>
            <small>Total Stock</small>
          </div>
          <span class="badge bg-label-primary rounded p-2">
            <i class="bx bx-user bx-sm"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>Verified Stock</span>
            <div class="d-flex align-items-end mt-2">
              <h3 class="mb-0 me-2">0</h3>
              <small class="text-success">(+95%)</small>
            </div>
            <small>Recent analytics </small>
          </div>
          <span class="badge bg-label-success rounded p-2">
            <i class="bx bx-user-check bx-sm"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>Duplicate Stock</span>
            <div class="d-flex align-items-end mt-2">
              <h3 class="mb-0 me-2">0</h3>
              <small class="text-success">(0%)</small>
            </div>
            <small>Recent analytics</small>
          </div>
          <span class="badge bg-label-danger rounded p-2">
            <i class="bx bx-group bx-sm"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>Verification Pending</span>
            <div class="d-flex align-items-end mt-2">
              <h3 class="mb-0 me-2">3</h3>
              <small class="text-danger">(+6%)</small>
            </div>
            <small>Recent analytics</small>
          </div>
          <span class="badge bg-label-warning rounded p-2">
            <i class="bx bx-user-voice bx-sm"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Basic Bootstrap Table -->
<div class="card">
   <div class="card-header">
      <h5 class="card-title mb-0">Stock</h5>
      <button style="float:right;padding-bottom:10px" class="btn btn-secondary add-new btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser"><span><i class="bx bx-plus me-0 me-sm-2"></i><span class="d-none d-sm-inline-block">Add New User</span></span></button> 
   </div>
   <div class="card-datatable table-responsive">
      <div class="dataTables_wrapper dt-bootstrap5 no-footer">
      @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
         <table class="tabddatatables-users table border-top dataTable no-footer dtr-columnle" id="example1" style="width:100%">  
          <thead>
            <tr>
                <th>ID</th>
                <th>Registration No</th>
                <th>MMV</th>
                <th>Fuel Type</th>
                <th>Milage</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           
                <tr>
                <td>1</td>
                <td>TN37TV0422</td>
                <td>Honda Shine  </td>
                <td>Petrol</td>
                <td>15</td>
                <td>150000</td>
                <td><div class="d-inline-block text-nowrap "><button class="btn btn-sm btn-icon edit-record user_id" data-id="" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser" ><i class="bx bx-edit"></i></button><button class="btn btn-sm btn-icon delete-record" data-id=""><i class="bx bx-trash"></i></button><button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button><div class="dropdown-menu dropdown-menu-end m-0"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="dropdown-item">View</a><a href="javascript:;" class="dropdown-item">Suspend</a></div></div></td>
                </tr>
                <tr>
                <td>3</td>
                <td>TN37TB3432</td>
                <td>Honda City 100  </td>
                <td>Diecel</td>
                <td>10</td>
                <td>26000</td>
                <td><div class="d-inline-block text-nowrap "><button class="btn btn-sm btn-icon edit-record user_id" data-id="" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser" ><i class="bx bx-edit"></i></button><button class="btn btn-sm btn-icon delete-record" data-id=""><i class="bx bx-trash"></i></button><button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button><div class="dropdown-menu dropdown-menu-end m-0"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="dropdown-item">View</a><a href="javascript:;" class="dropdown-item">Suspend</a></div></div></td>
                </tr>
           
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
<script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/js/laravel-user-management.js"></script>
<link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/sweetalert2/sweetalert2.css" />
<!--/ Responsive Table -->
<script>
var baseUrl="http://127.0.0.1:8000";
  $(document).ready(function() {
    $('#example').dataTable();
  });
  $(".add-new").click(function(){
    $(".add-new-user input,textarea").val('');
  });
  $('.user_id').click(function() {
    var userId = $(this).attr("data-id");
    if (userId !== '') {
        $.ajax({
            type: 'GET',
            url: '/api/getuser',
            data : {"id" : userId},
            success: function(response) {
                $("#user_id").val(response[0].id);
                $("#add-user-username").val(response[0].username);
                $("#add-user-fullname").val(response[0].name);
                $("#add-user-email").val(response[0].email);
                $("#add-user-mobile").val(response[0].mobile);
                $("#add-user-address").val(response[0].address);
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    } else {
        $('#user-info').empty();
    }
});
</script>
<link rel="stylesheet" href="{{ asset('assets/vendor/css/jquery.dataTables.min.css') }}">
@endsection


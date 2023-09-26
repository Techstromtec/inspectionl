@extends('layouts/contentNavbarLayout')

@section('title', 'Users - List')

@section('content')
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="//datatables.net/download/build/nightly/jquery.dataTables.js"></script>
<div class="row g-4 mb-4">
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>Users</span>
            <div class="d-flex align-items-end mt-2">
              <h3 class="mb-0 me-2">3</h3>
              <small class="text-success">(100%)</small>
            </div>
            <small>Total Users</small>
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
            <span>Verified Users</span>
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
            <span>Duplicate Users</span>
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
      <h5 class="card-title mb-0">Users</h5>
      <!--<button style="float:right;padding-bottom:10px" class="btn btn-secondary add-new btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser"><span><i class="bx bx-plus me-0 me-sm-2"></i><span class="d-none d-sm-inline-block">Add New User</span></span></button> -->
   </div>
   <div class="card-datatable table-responsive">
      <div class="dataTables_wrapper dt-bootstrap5 no-footer">
      @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
         <table class="tabddatatables-users table border-top dataTable no-footer dtr-columnle" id="example" style="width:100%">  
          <thead>
            <tr>
                <th>ID</th>
                <th>User Name</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Action</th>
            </tr>
        </thead>
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
         <form class="add-new-user pt-0 fv-plugins-bootstrap5 fv-plugins-framework" id="userForm" novalidate="novalidate">
            <input type="hidden" name="id" id="user_id" value="">
            <div class="mb-3 fv-plugins-icon-container">
               <label class="form-label" for="fullname">User Name</label>
               <input readonly type="text" class="form-control" id="username" name="username" placeholder="John Doe" aria-label="John Doe" value="">
               <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <div class="mb-3 fv-plugins-icon-container">
               <label for="password" class="form-label">Password</label>
               <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
               <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <div class="mb-3 fv-plugins-icon-container">
                    <label for="userType" class="form-label">User Type</label>
                    <select class="form-select" id="userType" name="userType">
                        <option value="">Select user type</option>
                        <option value="admin">Admin</option>
                        <option value="moderator">Moderator</option>
                        <option value="user">User</option>
                    </select>
                </div>
            <div class="mb-3 fv-plugins-icon-container">
                <label for="fullName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter full name">
               <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <div class="mb-3 fv-plugins-icon-container">
            <label for="email" class="form-label">Email</label>
               <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
               <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <div class="mb-3 fv-plugins-icon-container">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Enter mobile number">
               <div class="fv-plugins-message-container invalid-feedback"></div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>
<link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/sweetalert2/sweetalert2.css" />
<!--/ Responsive Table -->
<script>
  $(document).ready(function() {
      $('#example').DataTable({
              processing: true,
              serverSide: true,
              ajax: "{{ route('users.index') }}",
              columns: [
                  { data: 'id', name: 'id' },
                  { data: 'name', name: 'name' },
                  { data: 'username', name: 'username' },
                  { data: 'email', name: 'email' },
                  { data: 'mobile', name: 'mobile' },
                  { data: 'action', name: 'action', orderable: false, searchable: false },
              ]
      });
      $('#userForm').submit(function(e) {
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: '{{ route('users.store') }}',
            data: formData,
            success: function(response) {
                alert('User added successfully.');
                // You can redirect or update the UI as needed
            },
            error: function(xhr, status, error) {
                alert('Something went wrong.Please check your data.' + error);
            }
        });
    });
  });
  $(".add-new").click(function(){
    $(".add-new-user input").val('');
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
                $("#username").val(response[0].username);
                $("#fullname").val(response[0].name);
                $("#email").val(response[0].email);
                $("#mobile").val(response[0].mobile);
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
<script>
        // jQuery Validation
        $(document).ready(function() {
            $("#userForm").validate({
                rules: {
                    username: {
                        required: true,
                        minlength: 5
                    },
                    password: {
                        required: true,
                        minlength: 8,
                        strongPassword: true
                    },
                    confirmPassword: {
                        required: true,
                        equalTo: "#password"
                    },
                    userType: "required",
                    
                    
                    
                    fullName: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    mobile: {
                        required: true,
                        minlength: 10,
                        digits: true
                    },
                    state: "required",
                    city: "required",
                    locality: "required",
                    address: "required",
                    pincode: {
                        required: true,
                        minlength: 6,
                        digits: true
                    },
                },
                messages: {
                    username: {
                        required: "Please enter a username.",
                        minlength: "Username must be at least 5 characters long."
                    },
                    password: {
                        required: "Please enter a password.",
                        minlength: "Password must be at least 8 characters long.",
                        strongPassword: "Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character."
                    },
                    confirmPassword: {
                        required: "Please confirm your password.",
                        equalTo: "Passwords do not match."
                    },
                    userType: "Please select a user type.",
                    company: "Please enter a company.",
                    allowedCompany: "Please enter an allowed company.",
                    accessState: "Please select an access state.",
                    reportToVehicleCategory: "Please enter a report to vehicle category.",
                    fullName: "Please enter a full name.",
                    email: {
                        required: "Please enter an email address.",
                        email: "Please enter a valid email address."
                    },
                    mobile: {
                        required: "Please enter a mobile number.",
                        minlength: "Mobile number must be at least 10 characters long.",
                        digits: "Please enter a valid mobile number."
                    },
                    state: "Please enter a state.",
                    city: "Please enter a city.",
                    locality: "Please enter a locality.",
                    address: "Please enter an address.",
                    pincode: {
                        required: "Please enter a pincode.",
                        minlength: "Pincode must be at least 6 characters long.",
                        digits: "Please enter a valid pincode."
                    },
                },
                errorElement: "small",
                errorPlacement: function (error, element) {
                    error.addClass("text-danger");
                    error.insertAfter(element);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass(errorClass).removeClass(validClass);
                    $(element).closest(".row").addClass("has-danger").removeClass("has-success");
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass(errorClass).addClass(validClass);
                    $(element).closest(".row").removeClass("has-danger").addClass("has-success");
                }
            });

            // Custom method for strong password validation
            $.validator.addMethod("strongPassword", function(value, element) {
                return this.optional(element) || /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test(value);
            }, "Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character.");
        });
    </script>
<link rel="stylesheet" href="{{ asset('assets/vendor/css/jquery.dataTables.min.css') }}">
@endsection


@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Basic Tables')

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
      <h5 class="card-title mb-0">Search Filter</h5>
   </div>
   <div class="card-datatable table-responsive">
      <div id="example" class="dataTables_wrapper dt-bootstrap5 no-footer">
         <div class="row mx-2">
            <div class="col-md-2">
               <div class="me-3">
                  <div class="dataTables_length" id="DataTables_Table_0_length">
                     <label>
                        <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select">
                           <option value="10">10</option>
                           <option value="25">25</option>
                           <option value="50">50</option>
                           <option value="100">100</option>
                        </select>
                     </label>
                  </div>
               </div>
            </div>
            <div class="col-md-10">
               <div class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-end flex-md-row flex-column mb-3 mb-md-0">
                  <div id="DataTables_Table_0_filter" class="dataTables_filter"><label><input type="search" class="form-control" placeholder="Search.." aria-controls="DataTables_Table_0"></label></div>
                  <div class="dt-buttons btn-group flex-wrap">
                     <div class="btn-group"><button class="btn btn-secondary buttons-collection dropdown-toggle btn-label-secondary mx-3" tabindex="0" aria-controls="DataTables_Table_0" type="button" aria-haspopup="dialog" aria-expanded="false"><span><i class="bx bx-export me-2"></i>Export</span><span class="dt-down-arrow"></span></button></div>
                     <button class="btn btn-secondary add-new btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser"><span><i class="bx bx-plus me-0 me-sm-2"></i><span class="d-none d-sm-inline-block">Add New User</span></span></button> 
                  </div>
               </div>
            </div>
         </div>
         <table class="datatables-users table border-top dataTable no-footer dtr-column" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 1040px;">
            <thead>
               <tr>
                  <th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label=""></th>
                  <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 50px;" aria-label="Id">Id</th>
                  <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 238px;" aria-sort="descending" aria-label="User: activate to sort column ascending">User</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 236px;" aria-label="Email: activate to sort column ascending">Email</th>
                  <th class="text-center sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 133px;" aria-label="Verified: activate to sort column ascending">Verified</th>
                  <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 169px;" aria-label="Actions">Actions</th>
               </tr>
            </thead>
            <tbody>
               <tr class="odd">
                  <td class="  control" tabindex="0" style="display: none;"></td>
                  <td><span>1</span></td>
                  <td class="sorting_1">
                     <div class="d-flex justify-content-start align-items-center user-name">
                        <div class="avatar-wrapper">
                           <div class="avatar avatar-sm me-3"><span class="avatar-initial rounded-circle bg-label-success">MD</span></div>
                        </div>
                        <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="text-body text-truncate"><span class="fw-semibold">Mamad Doe</span></a></div>
                     </div>
                  </td>
                  <td><span class="user-email">johndoe@user.com</span></td>
                  <td class="  text-center"><i class="bx fs-4 bx-shield-x text-danger"></i></td>
                  <td>
                     <div class="d-inline-block text-nowrap">
                        <button class="btn btn-sm btn-icon edit-record" data-id="185" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser"><i class="bx bx-edit"></i></button><button class="btn btn-sm btn-icon delete-record" data-id="185"><i class="bx bx-trash"></i></button><button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                        <div class="dropdown-menu dropdown-menu-end m-0"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="dropdown-item">View</a><a href="javascript:;" class="dropdown-item">Suspend</a></div>
                     </div>
                  </td>
               </tr>
               <tr class="even">
                  <td class="  control" tabindex="0" style="display: none;"></td>
                  <td><span>2</span></td>
                  <td class="sorting_1">
                     <div class="d-flex justify-content-start align-items-center user-name">
                        <div class="avatar-wrapper">
                           <div class="avatar avatar-sm me-3"><span class="avatar-initial rounded-circle bg-label-primary">G</span></div>
                        </div>
                        <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="text-body text-truncate"><span class="fw-semibold">Guest</span></a></div>
                     </div>
                  </td>
                  <td><span class="user-email">guest@guest.com</span></td>
                  <td class="  text-center"><i class="bx fs-4 bx-shield-x text-danger"></i></td>
                  <td>
                     <div class="d-inline-block text-nowrap">
                        <button class="btn btn-sm btn-icon edit-record" data-id="190" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser"><i class="bx bx-edit"></i></button><button class="btn btn-sm btn-icon delete-record" data-id="190"><i class="bx bx-trash"></i></button><button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                        <div class="dropdown-menu dropdown-menu-end m-0"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="dropdown-item">View</a><a href="javascript:;" class="dropdown-item">Suspend</a></div>
                     </div>
                  </td>
               </tr>
               <tr class="odd">
                  <td class="  control" tabindex="0" style="display: none;"></td>
                  <td><span>3</span></td>
                  <td class="sorting_1">
                     <div class="d-flex justify-content-start align-items-center user-name">
                        <div class="avatar-wrapper">
                           <div class="avatar avatar-sm me-3"><span class="avatar-initial rounded-circle bg-label-info">A</span></div>
                        </div>
                        <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="text-body text-truncate"><span class="fw-semibold">Admin</span></a></div>
                     </div>
                  </td>
                  <td><span class="user-email">admin@admin.com</span></td>
                  <td class="  text-center"><i class="bx fs-4 bx-shield-x text-danger"></i></td>
                  <td>
                     <div class="d-inline-block text-nowrap">
                        <button class="btn btn-sm btn-icon edit-record" data-id="167" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser"><i class="bx bx-edit"></i></button><button class="btn btn-sm btn-icon delete-record" data-id="167"><i class="bx bx-trash"></i></button><button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                        <div class="dropdown-menu dropdown-menu-end m-0"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="dropdown-item">View</a><a href="javascript:;" class="dropdown-item">Suspend</a></div>
                     </div>
                  </td>
               </tr>
               <tr class="even">
                  <td class="  control" tabindex="0" style="display: none;"></td>
                  <td><span>2</span></td>
                  <td class="sorting_1">
                     <div class="d-flex justify-content-start align-items-center user-name">
                        <div class="avatar-wrapper">
                           <div class="avatar avatar-sm me-3"><span class="avatar-initial rounded-circle bg-label-primary">G</span></div>
                        </div>
                        <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="text-body text-truncate"><span class="fw-semibold">Guest</span></a></div>
                     </div>
                  </td>
                  <td><span class="user-email">guest@guest.com</span></td>
                  <td class="  text-center"><i class="bx fs-4 bx-shield-x text-danger"></i></td>
                  <td>
                     <div class="d-inline-block text-nowrap">
                        <button class="btn btn-sm btn-icon edit-record" data-id="190" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser"><i class="bx bx-edit"></i></button><button class="btn btn-sm btn-icon delete-record" data-id="190"><i class="bx bx-trash"></i></button><button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                        <div class="dropdown-menu dropdown-menu-end m-0"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="dropdown-item">View</a><a href="javascript:;" class="dropdown-item">Suspend</a></div>
                     </div>
                  </td>
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
               <input type="text" class="form-control" id="add-user-username" placeholder="John Doe" name="name" aria-label="John Doe" value="">
               <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <div class="mb-3 fv-plugins-icon-container">
               <label class="form-label" for="add-user-password">Password</label>
               <input type="password" id="add-user-password" name="password" class="form-control" placeholder="********" aria-label="" value="">
               <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <div class="mb-3 fv-plugins-icon-container">
               <label class="form-label" for="add-user-fullname">Full Name</label>
               <input type="text" class="form-control" id="add-user-fullname" placeholder="John Doe" name="name" aria-label="John Doe" value="">
               <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <div class="mb-3 fv-plugins-icon-container">
               <label class="form-label" for="add-user-email">Email</label>
               <input type="text" id="add-user-email" class="form-control" placeholder="john.doe@example.com" aria-label="john.doe@example.com" name="email" value="">
               <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <div class="mb-3 fv-plugins-icon-container">
               <label class="form-label" for="add-user-contact">Mobile</label>
               <input type="text" id="add-user-contact" class="form-control phone-mask" placeholder="+91 999 999 9999" aria-label="john.doe@example.com" name="userContact" value="">
               <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            
            <div class="mb-3">
               <label class="form-label" for="country">State</label>
               <div class="position-relative">
                  <select id="country" class="select2 form-select select2-hidden-accessible" data-select2-id="country" tabindex="-1" aria-hidden="true">
                     <option value="" data-select2-id="2">Select</option>
                     <option value="Australia">Australia</option>
                     <option value="Bangladesh">Bangladesh</option>
                  </select>
                  
               </div>
            </div>
            <div class="mb-3">
               <label class="form-label" for="country">City</label>
               <div class="position-relative">
                  <select id="country" class="select2 form-select select2-hidden-accessible" data-select2-id="country" tabindex="-1" aria-hidden="true">
                     <option value="" data-select2-id="2">Select</option>
                     <option value="Australia">Australia</option>
                     <option value="Bangladesh">Bangladesh</option>
                  </select>
                  
               </div>
            </div>
            <div class="mb-3">
               <label class="form-label" for="country">Locality</label>
               <div class="position-relative">
                  <select id="country" class="select2 form-select select2-hidden-accessible" data-select2-id="country" tabindex="-1" aria-hidden="true">
                     <option value="" data-select2-id="2">Select</option>
                     <option value="Australia">Australia</option>
                     <option value="Bangladesh">Bangladesh</option>
                  </select>
                 
               </div>
            </div>
            <div class="mb-3 fv-plugins-icon-container">
               <label class="form-label" for="add-user-contact">PIN Code</label>
               <input type="text" id="add-user-contact" class="form-control phone-mask" placeholder="+91 999 999 9999" aria-label="john.doe@example.com" name="userContact" value="">
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


 
<!--/ Responsive Table -->
<script>
$(document).ready(function() {
	$('#example').dataTable( {
		"ajax": "/ajax/objects.txt",
		"columns": [
			{ "data": "name" },
			{ "data": "position" },
			{ "data": "office" },
			{ "data": "extn" },
			{ "data": "start_date" },
			{ "data": "salary" }
		],
       initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' );
                } );
            } );
        }
	} );
} );
</script>
@endsection

@extends('layouts/contentNavbarLayout')

@section('title', 'Master - State')

@section('content')

<div class="row g-4 mb-4">
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>States</span>
            <div class="d-flex align-items-end mt-2">
              <h3 class="mb-0 me-2">3</h3>
              <small class="text-success">(100%)</small>
            </div>
            <small>Total States</small>
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
            <span>Active States</span>
            <div class="d-flex align-items-end mt-2">
              <h3 class="mb-0 me-2">0</h3>
              <small class="text-success">(+95%)</small>
            </div>
            <small>Active States</small>
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
            <span>Deactive States</span>
            <div class="d-flex align-items-end mt-2">
              <h3 class="mb-0 me-2">0</h3>
              <small class="text-success">(0%)</small>
            </div>
            <small>Deactive States</small>
          </div>
          <span class="badge bg-label-danger rounded p-2">
            <i class="bx bx-group bx-sm"></i>
          </span>
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
   <div id="" class="dataTables_wrapper dt-bootstrap5 no-footer">
      <table id="example" class="ddatatables-users table border-top dataTable no-footer dtr-column" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Sort Name</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $key=>$st)
                <tr>
                <td>{{$st->state_id}}</td>
                <td>{{$st->state_name}}</td>
                <td>{{$st->display_name}}</td>
                <td>{{$st->status}}</td>
                </tr>
            @endforeach
        </tbody>
        </table>
   
   
   
   
   </div>
   </div>
  
</div>
<!--/ Basic Bootstrap Table -->
<script src="{{ asset('assets/vendor/js/jquery-1.9.1.min.js') }}"></script>
<script src="{{ asset('assets/vendor/js/jquery.dataTables.min.js') }}"></script>

<!--/ Responsive Table -->
<script>
$(document).ready(function() {
	$('#example').dataTable();
} );
</script>


<link rel="stylesheet" href="{{ asset('assets/vendor/css/jquery.dataTables.min.css') }}">
@endsection

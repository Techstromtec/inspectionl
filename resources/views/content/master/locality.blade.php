@extends('layouts/contentNavbarLayout')

@section('title', 'Master - Locality')

@section('content')


  <div class="col-md-12">
    <div class="card mb-4">
      <h5 class="card-header">Filter By</h5>
      <div class="card-body">
        <div class="row">
        <div class="col-md mb-md-0 mb-2">
            <label for="defaultFormControlInput" class="form-label">State</label>
            <select class="state  select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="modalstate" tabindex="-1" aria-hidden="true">
              @foreach($state as $key=>$st)
                <option value="{{$st->state_id}}" @if($st->state_id == $default_st) selected @endif>{{$st->state_name}}</option>
              @endforeach
            </select>
          </div>
        
          <div class="col-md">
            <label for="defaultFormControlInput" class="form-label">City</label>
            <select class="city select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="modalcity" tabindex="-1" aria-hidden="true">
              @foreach($city as $key=>$ct)
                <option value="{{$ct->city_id}}" @if($ct->city_id == $default_ct) selected @endif>{{$ct->city_name}}</option>
              @endforeach
            </select>
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
   <div id="" class="dataTables_wrapper dt-bootstrap5 no-footer">
      <table id="example" class="ddatatables-users table border-top dataTable no-footer dtr-column" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>City Name</th>
                <th>State Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $key=>$st)
                <tr>
                <td>{{$st->locality_id}}</td>
                <td>{{$st->locality_name}}</td>
                <td>{{$st->city_name}}</td>
                <td>{{$st->state_name}}</td>
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
<script src="{{ asset('assets/vendor/js/selects.js') }}"></script>

<!--/ Responsive Table -->
<script>
$(document).ready(function() {
	$('#example').dataTable();
  function locality(){
    var st_id = $(".state").val();
    var ct_id = $(".city").val();
    $.ajax({
        type: 'GET',
        url: 'http://127.0.0.1:8000/api/locality',
        data: { state_id: st_id,city_id: ct_id},
        success: function (data) {
            $('#example').DataTable({
                destroy: true,
                data: data,
                lengthMenu: [10, 25, 50, 75, 100],
                searchPane: {
                    columns: [':contains("Name")', ':contains("Period")'],
                    threshold: 0
                },

                columns: [
                     { data: 'locality_id', title: "ID" },
                     { data: 'locality_name', title: "Name" },
                     { data: 'city_name', title: "City Name" },
                     { data: 'state_name', title: "State Name" },
                ],
                dom: 'Rlfrtip'

             });
        }
      });
  }
  $('.state').change(function () {
    locality();
  });
  $('.city').change(function () {
    locality();
  });
} );
</script>

<link rel="stylesheet" href="{{ asset('assets/vendor/css/jquery.dataTables.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/css/select2.css') }}" />
@endsection

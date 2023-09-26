@extends('layouts/contentNavbarLayout')

@section('title', 'Master - City')

@section('content')
  
  <div>
  <div class="col-md-12">
    <div class="card mb-4">
      <h5 class="card-header">Filter By</h5>
      <div class="card-body">
        <div>
          <label for="defaultFormControlInput" class="form-label">State</label>
          <select class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="modalEditUserCountry" tabindex="-1" aria-hidden="true">
            @foreach($state as $key=>$st)
              <option value="{{$st->state_id}}" @if($st->state_id == $default_st) selected @endif>{{$st->state_name}}</option>
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
                <th>State Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $key=>$st)
                <tr>
                <td>{{$st->city_id}}</td>
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
  var base_url = window.location.origin;
	$('#example').dataTable();
  $('.select2').change(function () {
    var state_id = $(this).val();
    $.ajax({
        type: 'GET',
        url: 'http://127.0.0.1:8000/api/city',
        data: { id: state_id},
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
                     { data: 'city_id', title: "ID" },
                     { data: 'city_name', title: "Name" },
                     { data: 'state_name', title: "State Name" },
                ],
                dom: 'Rlfrtip'

             });


        }

    });

  });
});
</script>

<link rel="stylesheet" href="{{ asset('assets/vendor/css/jquery.dataTables.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/css/select2.css') }}" />
<link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/typeahead-js/typeahead.css?id=8fc311b79b2aeabf94b343b6337656cf" />
<script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/hammer/hammer.js?id=f2b232153f92e544aab0ed45c56ab524"></script>
<script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/typeahead-js/typeahead.js?id=f6bda588c16867a6cc4158cb4ed37ec6"></script>
@endsection

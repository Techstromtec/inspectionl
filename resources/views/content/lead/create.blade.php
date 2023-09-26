@extends('layouts/contentNavbarLayout')

@section('title', 'Users - Add')
<style>
.form-group.required .control-label:after { 
   content:"*";
   color:red;
}
label{font-weight:bold;}
</style>
@section('content')
<form method="POST" action="{{ route('leads.store') }}">
@csrf
<div class="row">
    <div class="col-md-12">
        <div class="card mb-3">
            <div class="card-header"><b>Lead Details</b></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group required">
                            <label for="client_company " class="control-label">Client Company </label>
                            <select name="client_company" id="client_company" class="select2 form-select" >
                                <option value="">Select a Client Company</option>
                                @foreach($clientCompanies as $company)
                                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group required">
                            <label for="client_city " class="control-label">Client City</label>
                            <input type="text" class="form-control" id="client_city" name="client_city" required>
                        </div>
                    </div>
                    <br/><br/>
                    <div class="col-md-6">
                        <div class="form-group required">
                            <label for="vehicle_type " class="control-label">Vehicle Type</label>
                            @foreach($vehicleTypes as $type)
                                <div class="form-check mt-3">
                                    <input  class="form-check-input" type="radio" name="vehicle_type" id="{{ $type->id }}" value="{{ $type->id }}">
                                    <label class="form-check-label" for="{{ $type->id }}">
                                        {{ $type->name }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group required">
                            <label for="vehicle_category " class="control-label">Vehicle Category</label>
                            @foreach($vehicleCategories as $category)
                                <div class="form-check mt-3">
                                    <input  class="form-check-input" type="radio" name="vehicle_category" id="{{ $category->id }}_{{ $category->category_name }}" value="{{ $category->id }}">
                                    <label class="form-check-label" for="{{ $category->id }}_{{ $category->category_name }}">
                                        {{ $category->category_name }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Add more fields for Lead Details here -->
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-header"><b>Vehicle Details</b></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="registration_no">Registration No</label>
                                <input type="text" class="form-control" id="registration_no" name="registration_no">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mmv">MMV</label>
                                <input type="text" class="form-control" id="mmv" name="mmv">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="customer_name">Customer Name</label>
                                <input type="text" class="form-control" id="customer_name" name="customer_name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="customer_mobile">Customer Mobile</label>
                                <input type="text" class="form-control" id="customer_mobile" name="customer_mobile">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="state">State</label>
                                <input type="text" class="form-control" id="state" name="state">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" class="form-control" id="city" name="city">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="area">Area</label>
                                <input type="text" class="form-control" id="area" name="area">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="street">Street</label>
                                <input type="text" class="form-control" id="street" name="street">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pincode">Pincode</label>
                                <input type="text" class="form-control" id="pincode" name="pincode">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="rc_status">RC Status</label>
                                <input type="text" class="form-control" id="rc_status" name="rc_status">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="manufacturing_year">Manufacturing Year</label>
                                <input type="text" class="form-control" id="manufacturing_year" name="manufacturing_year">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="registration_year">Registration Year</label>
                                <input type="text" class="form-control" id="registration_year" name="registration_year">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="engine_no">Engine No</label>
                                <input type="text" class="form-control" id="engine_no" name="engine_no">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="chassis_no">Chassis No</label>
                                <input type="text" class="form-control" id="chassis_no" name="chassis_no">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="no_of_owners">No. of Owners</label>
                                <input type="text" class="form-control" id="no_of_owners" name="no_of_owners">
                            </div>
                        </div>
                        <!-- Continue adding more fields here as needed -->

                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="row">
    <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-header"><b>Executive Details</b></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="executive_name">Executive Name</label>
                                <input type="text" class="form-control" id="executive_name" name="executive_name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="executive_mobile">Executive Mobile</label>
                                <input type="text" class="form-control" id="executive_mobile" name="executive_mobile">
                            </div>
                        </div>
                        <!-- Add more fields for Executive Details here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</div>
</form>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/select2/select2.js"></script>
<link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/select2/select2.css" />
<script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/js/modal-edit-user.js"></script>

<script>
        $(document).ready(function () {
            $("#myForm").submit(function (event) {
                // Clear previous error messages
                alert()
                $(".error").remove();

                // Validate each required input field
                $("input[required]").each(function () {
                    var input = $(this);
                    if (input.val().trim() === "") {
                        input.after('<span class="error">This field is required</span>');
                        event.preventDefault(); // Prevent form submission
                    }
                });
            });
        });
</script>
@endsection


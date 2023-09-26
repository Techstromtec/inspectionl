@extends('layouts/contentNavbarLayout')

@section('title', 'Stock - Add')

@section('content')
<div class="card">
   <div class="card-header">
      <h5 class="card-title mb-0">Create Stock</h5>
   </div>
   <div class="card-body">
        <form method="POST" action="">
            @csrf
            <div class="row">
                <div class="col-md-6">
                <div class="mb-3">
                        <label for="make" class="form-label">Registration No:</label>
                        <input type="text" name="make" id="make" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="make" class="form-label">Make:</label>
                        <input type="text" name="make" id="make" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="model" class="form-label">Model:</label>
                        <input type="text" name="model" id="model" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="variant" class="form-label">Variant:</label>
                        <input type="text" name="variant" id="variant" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label">Year:</label>
                        <input type="number" name="year" id="year" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="color" class="form-label">Color:</label>
                        <input type="text" name="color" id="color" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="mileage" class="form-label">Mileage:</label>
                        <input type="number" name="mileage" id="mileage" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price:</label>
                        <input type="text" name="price" id="price" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="fuel_type" class="form-label">Fuel Type:</label>
                        <input type="text" name="fuel_type" id="fuel_type" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="transmission" class="form-label">Transmission:</label>
                        <input type="text" name="transmission" id="transmission" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="engine_capacity" class="form-label">Engine Capacity:</label>
                        <input type="text" name="engine_capacity" id="engine_capacity" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Add Car</button>
            </div>
        </form>
   </div>
  </div>
@endsection
<script src="{{ asset('assets/vendor/js/jquery-1.9.1.min.js') }}"></script>
 <!-- jQuery Validation Plugin -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>

    <script>
        // jQuery Validation
        $(document).ready(function() {
            
            $("#addUserForm").validate({
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
    
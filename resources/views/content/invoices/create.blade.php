@extends('layouts/contentNavbarLayout')

@section('title', 'Invoice - Add')

@section('content')
<div class="card">
   <div class="card-header">
      <h5 class="card-title mb-0">Create Invoice</h5>
   </div>
   <div class="card-body">
   <form method="POST" action="{{ route('invoices.store') }}">
        @csrf
        <div class="form-group">
            <label for="customer_id">Customer Name:</label>
            <input type="text" name="customer_name" class="form-control" value="{{ old('customer_name') }}" required>
        </div>
        <div class="form-group">
            <label for="invoice_number">Invoice Number:</label>
            <input type="text" name="invoice_number" class="form-control" value="{{ old('invoice_number') }}" required>
            @error('invoice_number')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="amount">Amount:</label>
            <input type="number" name="amount" class="form-control" step="0.01" value="{{ old('amount') }}" required>
            @error('amount')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="issue_date">Issue Date:</label>
            <input type="date" name="issue_date" class="form-control" value="{{ old('issue_date') }}" required>
            @error('issue_date')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="due_date">Due Date:</label>
            <input type="date" name="due_date" class="form-control" value="{{ old('due_date') }}" required>
            @error('due_date')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="invoice_status">Status:</label>
            <select class="form-control" name="invoice_status" id="invoice_status">
                <option value="pending">Pending</option>
                <option value="paid">Paid</option>
                <option value="overdue">Overdue</option>
            </select>
            
            @error('invoice_status')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create Invoice</button>
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
    
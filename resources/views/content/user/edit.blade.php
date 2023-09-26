@extends('layouts/contentNavbarLayout')

@section('title', 'Users - Edit')

@section('content')
<div class="card">
   <div class="card-header">
      <h5 class="card-title mb-0">Create User</h5>
   </div>
   <div class="card-body">
   
   @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form  data-user-id="{{ $user->id }}"  id="userForm">
    @csrf
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}" placeholder="Enter username">
                </div>
                <div class="col-md-6">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password"  placeholder="Enter password">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm password">
                </div>
                <div class="col-md-6">
                    <label for="userType" class="form-label">User Type</label>
                    <select class="form-select" id="userType" name="userType">
                        <option value="">Select user type</option>
                        <option value="admin" {{ $user->user_type == 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="user" {{ $user->user_type == 'user' ? 'selected' : '' }}>User</option>
                    </select>
                </div>
            </div>
            
            
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="fullName" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}"  placeholder="Enter full name">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" placeholder="Enter email">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="mobile" class="form-label">Mobile</label>
                    <input type="tel" class="form-control" id="mobile" name="mobile" value="{{ $user->mobile }}" placeholder="Enter mobile number">
                </div>
                <div class="col-md-6">
                    <label for="address" class="form-label">Address</label>
                    <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter address">{{ $user->address }}</textarea>
                </div>
                <div class="col-md-6">
                    <label for="state" class="form-label">State</label>
                    <select id="state" name="state" class="select2 form-select" data-allow-clear="true">
                        <option value="">Select a state</option>
                        @foreach($states as $state)
                            <option value="{{ $state->state_id }}">{{ $state->state_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="city" class="form-label">City</label>
                    <select id="city" name="city" class="select2 form-select" data-allow-clear="true">
                    <option value="">Select a city</option>
                    </select>
                </div>
               
            </div>
            <div class="row mb-3">
                
                <div class="col-md-6">
                    <label for="locality" class="form-label">Locality</label>
                    <select id="area" name="area" class="select2 form-select" data-allow-clear="true">
                    <option value="">Select a area</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="pincode" class="form-label">Pincode</label>
                    <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Enter pincode">
                </div>
            </div>
            <div class="mb-3">
            <label for="profile" class="form-label">Profile Upload</label>
            <input type="file" class="form-control" id="profile" name="profile">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        </form>
   </div>
  </div>
@endsection
<script src="{{ asset('assets/vendor/js/jquery-1.9.1.min.js') }}"></script>
 <!-- jQuery Validation Plugin -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>
    <script>
$(document).ready(function() {
            // Assuming you have a city dropdown with the ID "city"
            var cityDropdown = $('#city');
            cityDropdown.empty(); // Clear existing options
            $('#state').on('change', function () {
                var stateId = $(this).val();
                cityDropdown.empty(); // Clear existing options
                $.ajax({
                    url: '/get-cities/' + stateId, // Use the correct URL
                    method: 'GET',
                    success: function (data) {
                        // Populate the city dropdown with data.cities
                        cityDropdown.append($('<option>', {
                            value: '',
                            text: 'Select City'
                        }));
                        $.each(data.cities, function (index, city) {
                            cityDropdown.append($('<option>', {
                                value: city.city_id,
                                text: city.city_name
                            }));
                        });
                    },
                    error: function (xhr, status, error) {
                        console.error(error);
                    }
                });
            });
            // Capture the selected city when the city dropdown value changes
            var areaDropdown = $('#area');
            areaDropdown.empty(); // Clear existing options
            $('#city').on('change', function() {
                var selectedCityId = $(this).val();
                areaDropdown.empty(); // Clear existing options
                // Send the selected city's ID to the backend using an AJAX request
                $.ajax({
                    url: '/get-areas/'+selectedCityId, // Replace with your backend route
                    method: 'GET',
                    success: function(data) {
                        areaDropdown.append($('<option>', {
                            value: '',
                            text: 'Select area',
                        }));
                        // Handle the response data (list of areas) here
                        $.each(data.areas, function (index, area) {
                            areaDropdown.append($('<option>', {
                                value: area.locality_id,
                                text: area.locality_name,
                                pin : area.pincode
                            }));
                        });
                    },
                    error: function(xhr, textStatus, errorThrown) {
                        // Handle any errors here
                        console.error(errorThrown);
                    }
                });
            });
            $("#userForm").validate({
                rules: {
                    username: {
                        required: true,
                        minlength: 5
                    },
                    password: {
                       
                        minlength: 8,
                        strongPassword: true
                    },
                    confirmPassword: {
                        
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
                },
                submitHandler: function(form) {
                    var formData = $(form).serialize();
                    var userId = $(form).data('user-id');
                    $.ajax({
                        type: 'PUT',
                        url: '/users/'+userId,
                        data: formData,
                        
                        success: function(response) {
                            console.log(response.message);
                            if (response.redirect) {
                                window.location.href = response.redirect;
                            }
                        },
                        error: function(xhr) {
                            if (xhr.status === 422) {
                                var errors = xhr.responseJSON.errors;
                                if (errors) {
                                    $('.errors').empty(); // Clear previous errors
                                    $.each(errors, function(field, messages) {
                                        $.each(messages, function(key, message) {
                                            $('.errors').append('<div class="alert alert-danger">' + message + '</div>');
                                        });
                                    });
                                } else {
                                    $('.errors').append('<div class="alert alert-danger">An error occurred. Please try again.</div>');
                                }
                            }
                        }
                    });
                }
            });

            // Custom method for strong password validation
            $.validator.addMethod("strongPassword", function(value, element) {
                return this.optional(element) || /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test(value);
            }, "Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character.");
        });
    </script>
    
@extends('layouts/contentNavbarLayout')

@section('title', 'Agreement - Create')

@section('content')
  <div>
  <div class="col-md-12">
    <div class="card mb-4">
      <h5 class="card-header">Create </h5>
      <div class="card-body">
        <div>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ route('agreements.store') }}" method="POST" enctype="multipart/form-data" id="agreementForm">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="doc_serial_no" class="form-label">Agreement Number</label>
                    <input type="text" class="form-control" id="doc_serial_no" name="doc_serial_no">
                </div>
                <div class="mb-3">
                    <label for="doc_from" class="form-label">Agreement From</label>
                    <input type="date" class="form-control" id="doc_from" name="doc_from">
                </div>
                <div class="mb-3">
                    <label for="doc_expiry" class="form-label">Agreement Expiry</label>
                    <input type="date" class="form-control" id="doc_expiry" name="doc_expiry">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="party_name" class="form-label">Client Name</label>
                    <input type="text" class="form-control" id="party_name" name="party_name">
                </div>
                <div class="mb-3">
                    <label for="party_mobile" class="form-label">Client Mobile</label>
                    <input type="tel" class="form-control" id="party_mobile" name="party_mobile">
                </div>
                <div class="mb-3">
                    <label for="party_email" class="form-label">Client Email</label>
                    <input type="email" class="form-control" id="party_email" name="party_email">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                
                <div class="mb-3">
                    <label for="exec_name" class="form-label">Executive Name</label>
                    <input type="text" class="form-control" id="exec_name" name="exec_name">
                </div>
                <div class="mb-3">
                    <label for="exec_email" class="form-label">Executive Email</label>
                    <input type="email" class="form-control" id="exec_email" name="exec_email">
                </div>
                <div class="mb-3">
                    <label for="exec_mobile" class="form-label">Executive Mobile</label>
                    <input type="tel" class="form-control" id="exec_mobile" name="exec_mobile">
                </div>
                <div class="mb-3">
                    <label for="party_pincode" class="form-label">Client Pincode</label>
                    <input type="text" class="form-control" id="party_pincode" name="party_pincode">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="party_state" class="form-label">Client State</label>
                    <input type="text" class="form-control" id="party_state" name="party_state">
                </div>
                <div class="mb-3">
                    <label for="party_city" class="form-label">Client City</label>
                    <input type="text" class="form-control" id="party_city" name="party_city">
                </div>
                
                
                <div class="mb-3">
                    <label for="party_address" class="form-label">Client Address</label>
                    <textarea class="form-control" id="party_address" name="party_address" rows="3"></textarea>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="document" class="form-label">Document Upload</label>
            <input type="file" name="document[]" id="document" name="document[]" class="form-control" multiple required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  @endsection
  <script src="{{ asset('assets/vendor/js/jquery-1.9.1.min.js') }}"></script>
 <!-- jQuery Validation Plugin -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>

<script>
    $(document).ready(function() {
        $('#agreementForm').validate({
            rules: {
                doc_serial_no: 'required',
                doc_from: 'required',
                doc_expiry: 'required',
                party_name: 'required',
                party_mobile: {
                    required: true,
                    digits: true
                },
                party_email: {
                    required: true,
                    email: true
                },
                party_address: 'required',
                party_state: 'required',
                party_pincode: {
                    required: true,
                    digits: true
                },
                exec_name: 'required',
                exec_email: {
                    required: true,
                    email: true
                },
                exec_mobile: {
                    required: true,
                    digits: true
                },
                document: {
                    extension: 'pdf|doc|docx|jpeg'
                }
            },
            messages: {
                // Define custom validation error messages if needed
            },
            errorPlacement: function(error, element) {
                // Handle error placement
                error.appendTo(element.closest('.mb-3'));
            }
        });
    });
</script>


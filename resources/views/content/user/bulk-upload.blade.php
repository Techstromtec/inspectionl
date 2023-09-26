@extends('layouts/contentNavbarLayout')

@section('title', 'Users - BulkUpload')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">User / Add </span>
</h4>
<div class="card">
   <div class="card-header">
      <h5 class="card-title mb-0">Bulk Upload Users</h5>
   </div>
   <div class="card-body">
   <form id="bulkUploadForm" method="POST" action="/bulk-upload" enctype="multipart/form-data">
        @csrf
            <div class="form-group mb-3">
                <label for="file" class="form-label">Drop files here or click to upload</label>
                <input type="file" id="file" name="file" class="form-control">
            </div>
            <button type="submit" class="btn btn-secondary add-new btn-primary">Upload</button>
            <a href="{{ route('download.sample.csv') }}" class="btn btn-secondary add-new btn-primary">Download Sample CSV</a>
    </form>
   </div>
</div>
<div id="response"></div>
@endsection
<script src="{{ asset('assets/vendor/js/jquery-1.9.1.min.js') }}"></script>
<script>
        $(document).ready(function() {
            // jQuery AJAX to submit the form
            $('#bulkUploadForm').submit(function(event) {
                event.preventDefault();
                var formData = new FormData(this);

                $.ajax({
                    type: 'POST',
                    url: '/bulk-upload',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        // Handle the response here (e.g., show success message)
                        $('#response').text(response.message);
                    },
                    error: function(error) {
                        // Handle error here (e.g., show error message)
                        $('#response').text('Error uploading the file.');
                    }
                });
            });
        });
    </script>
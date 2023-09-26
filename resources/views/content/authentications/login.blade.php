@extends('layouts/blankLayout')

@section('title', 'Login')

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
<style>
/* Add this to your CSS file */
.modal-loader {
    position: absolute;
    top: 49%;
    left: 51%;
    transform: translate(-50%, -50%);
    z-index: 9999;
    height: 95%;
    width: 95%;
    /* opacity: 1.5; */
}
</style>
@endsection

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">
      <!-- Register -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <a href="{{url('/')}}" class="app-brand-link gap-2">
              <span class="app-brand-logo demo">@include('_partials.macros',["width"=>25,"withbg"=>'#696cff'])</span>
              <span class="app-brand-text demo text-body fw-bolder">{{config('variables.templateName')}}</span>
            </a>
          </div>
          <!-- /Logo -->
          
            <div class="mb-3">
              <label for="email" class="form-label">Email or Username or mobile number</label>
              <div class="alert alert-danger alert-dismissible d-none" role="alert"></div>
              <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Email Address / Username / Mobile number" autofocus>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
            </div>
            <div class="mb-3 form-password-toggle">
              <div class="d-flex justify-content-between">
                <label class="form-label" for="password">Password</label>
                <!--<a href="{{url('auth/forgot-password-basic')}}">
                  <small>Forgot Password?</small>
                </a>-->
              </div>
              <div class="input-group input-group-merge">
                
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password">
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif

              </div>
            </div>
            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember-me">
                <label class="form-check-label" for="remember-me">
                  Remember Me
                </label>
              </div>
            </div>
            <div class="mb-3">
              <button class="btn btn-primary d-grid w-100 onsubmit" type="submit">Sign in</button>
            </div>
            <img id="loader" src="{{ asset('assets/img/loader.gif') }}" alt="Loading..." class="modal-loader" style="display:none">

          <!--<p class="text-center">
            <span>New on our platform?</span>
            <a href="{{url('auth/register-basic')}}">
              <span>Create an account</span>
            </a>
          </p>
          -->

        </div>
      </div>
    </div>
    <!-- /Register -->
  </div>
</div>
</div>


@endsection
<script src="{{ asset('assets/vendor/js/jquery.js') }}"></script>
<script>
$(document).ready(function(){
  var f = $(".onsubmit");
  f.on("click",function(e){
        e.preventDefault();
        var email = $("input[name='email']").val();
        var password = $("input[name='password']").val();
        if(email =='' || password ==''){
            $(".alert").removeClass('d-none');
            setTimeout(function(){ $('.alert').fadeIn() }, 1000);
            $(".alert").show();
            $(".alert").removeClass("alert-success");
            $(".alert").addClass("alert-danger");
            $(".alert").html('Username or password missing.');
            setTimeout(function(){ $('.alert').fadeOut() }, 5000);
        }else{
          $('#loader').show();
          $.ajax({
              url: '{{ route('authenticate') }}',
              type: 'POST',
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              data: {
                  email: email,
                  password: password
              },
              success: function(data) {
                  // Hide loader GIF
                  $('#loader').hide();
                  if ($.isEmptyObject(data.error)) {
                      $(".alert").show();
                      $(".alert").removeClass('d-none');
                      setTimeout(function(){ $('.alert').fadeIn() }, 1000);
                      $(".alert").html(data.success);
                      $(".alert").addClass("alert-success");
                      $(".alert").removeClass("alert-danger");
                      window.location.href=window.location.origin+"/dashboard";
                      //setTimeout(function(){ window.location.href=window.location.origin+"/dashboard" }, 1000);
                  } else {
                      $(".alert").removeClass('d-none');
                      setTimeout(function(){ $('.alert').fadeIn() }, 1000);
                      $(".alert").show();
                      $(".alert").removeClass("alert-success");
                      $(".alert").addClass("alert-danger");
                      $(".alert").html(data.error);
                      setTimeout(function(){ $('.alert').fadeOut() }, 5000);
                  }
              },
              error : function(data){
                var errors = data.responseJSON;
                $(".alert").removeClass("alert-success");
                $(".alert").addClass("alert-danger");
                $(".alert").html();
                // setTimeout(function(){ $('.alert').fadeOut() }, 5000);
              }
              
          });
        }
        
  });
});
</script>
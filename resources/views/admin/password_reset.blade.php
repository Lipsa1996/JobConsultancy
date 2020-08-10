
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SinhasjobConsultancy &mdash;</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    
    
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fl-bigmug-line.css') }}">
  
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
  </head>

  

<div class="site-section bg-light">
@if($errors->first('New'))
                      <div style="color:red; text-align:center;"> {{$errors->first('New')}} 
                     </div><br>
                       @endif
                       @if(session()->has('message'))
    <div style="width:500px; text-align:center; margin-left:auto;margin-right:auto;color:red">
        {{ session()->get('message') }}
    </div><br>
@endif
<h1 style="text-align:center;">Reset Password</h1><br>
  <div class="container" style="margin-left:40%;">
    <div class="row">
      
      
        <form action="\reset-password" class="p-5 bg-white" method="POST">
          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="fullname">Username</label>
              <input type="text" id="fullname" class="form-control" name="Username"  required>
            </div>
          </div>
          <div class="row form-group ">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="fullname">Old Password</label>
              <input type="text" id="fullname" class="form-control" name="Old"  required>
            </div>
          </div>
          <div class="row form-group ">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="fullname">New Password</label>
              <input type="password" id="fullname" class="form-control" name="New"  required>
            </div>
          </div>

          <div class="row form-group">
          <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="fullname">Confirm New Password</label>
              <input type="password" id="fullname" class="form-control" name="New2"  required>
            </div>
            </div>
          <input type="hidden" name="_token" value="{{csrf_token() }}">
          <div class="row form-group">
            <div class="col-md-12">
              <input type="submit" value="Reset" class="btn btn-primary  py-2 px-5">
            </div>
          </div>
        </form>
        

    </div>
  </div>
</div>


<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('js/jquery-ui.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('js/aos.js') }}"></script>
  

  
@include('user.header')

<div class="unit-5 overlay" style="background-image: url('images/hero_bg_2.jpg');">
  <div class="container text-center"><br>
    <h2 class="mb-0">Registration</h2><br>
  </div>
</div>




<div class="site-section bg-light">
@if(session()->has('message'))
    <div class="alert alert-success" style="width:70%; text-align:center; margin-left:auto;margin-right:auto">
        {{ session()->get('message') }}
    </div>
@endif
<br><br>
  <div class="container">
    <div class="row">
   
      <div class="col-md-12 col-lg-8 mb-5" style="margin-left:auto;margin-right:auto">
      
        
      
        <form action="\jobseeker_submit" class="p-5 bg-white" method="post" enctype="multipart/form-data">

          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="fullname">Full Name</label>
              <input type="text" id="fullname" name="Name" class="form-control" placeholder="Full Name" required>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12">
              <label class="font-weight-bold" for="email">Email</label>
              <input type="email" id="email" name="Email" class="form-control" placeholder="Email Address" required>
            </div>
          </div>
          @if($errors->first('Email'))
                <div class="point">
                      <div style="color:red"> {{$errors->first('Email')}} 
                     </div><br>
                       @endif
          <div class="row form-group">
            <div class="col-md-12">
              <label class="font-weight-bold" for="email">Mobile Number</label>
              <input type="text" id="subject" name="Mobile_Number" class="form-control" placeholder="Contact Number" required>
            </div>
          </div>
          
          @if($errors->first('Mobile_Number'))
             <div class="point">
                      <div style="color:red"> {{$errors->first('Mobile_Number')}} 
                   </div><br>
                       @endif   

                       <div class="row form-group">
            <div class="col-md-12">
              <label class="font-weight-bold" for="email">Password</label>
              <input type="text" id="subject" name="Password" class="form-control" placeholder="Password" required>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12">
              <label class="font-weight-bold" for="email">Confirmed Password</label>
              <input type="text" id="subject" name="Confirm_Password" class="form-control" placeholder="Confirmed Password" required>
            </div>
          </div>     
          <div class="row form-group">
            <div class="col-md-12">
              <label class="font-weight-bold" for="message" required>Upload CV</label> <br>
            <input type="file" name="file">
            </div>
          </div>
          @if($errors->first('file'))
                      <div style="color:red"> {{$errors->first('file')}} 
                      </div><br>
                       @endif 
          <input type="hidden" name="_token" value="{{csrf_token() }}">
          <div class="row form-group">
            <div class="col-md-12">
              <input type="submit" value="Register" class="btn btn-primary  py-2 px-4">
            </div>
          </div>


        </form>
      </div>
    </div>
  </div>
</div>

@include('user.footer')



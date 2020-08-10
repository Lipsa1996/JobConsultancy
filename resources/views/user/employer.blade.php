
@include('user.header')

    <div class="unit-5 overlay" style="background-image: url('images/hero_bg_2.jpg');">
      <div class="container text-center"><br>
        <h2 class="mb-0">Post a Job</h2>
        <br>
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
       
          <div class="col-md-12 col-lg-8 mb-5">
         
            
          
            <form action="\employer_submit" class="p-5 bg-white" method="POST">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Job Title</label>
                  <input type="text" id="fullname" class="form-control" name="Title" placeholder="eg. Full Stack Frontend" required>
                </div>
              </div>

              <div class="row form-group ">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Company</label>
                  <input type="text" id="fullname" class="form-control" name="Name" placeholder="eg. Facebook, Inc." required>
                </div>
              </div>

              <div class="row form-group mb-5">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Contact Details</label>
                  <input type="text" id="fullname" class="form-control" name="Contact" placeholder="eg. Email, Mobile Number" required>
                </div>
              </div>

              <div class="row form-group mb-4">
                <div class="col-md-12"><h3>Location</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <input type="text" class="form-control" name="Location" placeholder="Enter location"required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12"><h3>Job Description</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <textarea  class="form-control" name="Description" id="" cols="30" rows="5" required></textarea>
                </div>
              </div>
              <input type="hidden" name="_token" value="{{csrf_token() }}">
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Post" class="btn btn-primary  py-2 px-5">
                </div>
              </div>

  
            </form>
          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Contact Info</h3>
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">Sinha's Job Consultancy
                 Baishnabghata Patuli Township,
                 Kolkata, West Bengal- 700094</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="tel:+91 7044651349">+91 7044651349</a>
                <br>
                <a href="tel: +91 9830583872"> +91 9830583872</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="mailto:info@sinhasjobconsultancy.com" target="_blank">
          info@sinhasjobconsultancy.com</a></p>

            </div>
          </div>
        </div>
      </div>
    </div>


    @include('user.footer')
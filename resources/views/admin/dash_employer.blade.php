@include('admin.header')
<div class="site-section bg-light" id="job-section">
<!-- Page Content -->
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Employers</h4> </div>
                    
                    <!-- /.col-lg-12 -->
                </div>
                @if(session()->has('delete'))
    <div class="alert alert-danger" style="width:500px; text-align:center; margin-left:auto;margin-right:auto">
        {{ session()->get('delete') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@endif
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Employer</h3>
                            <div class="table-responsive">
                            <table class="table">
                           <thead>
                         <tr>
                       <td><b>Company ID</b></td>
                       <td><b> Company Name</b></td>
                       <td><b>Job Title</b></td>
                       <td><b>Location</b></td>
                       <td><b>Contact Details</b></td>
                       <td><b>Job Description</b></td>
                       <td><b>Submitted Date</b></td>
                       <td><b>Action</b></td>
                     </tr>
                     </thead>
                       <tbody>
                    @foreach($Employer as $employer)
                      <tr>
                        <td>{{$employer->CompanyID}}</td>
                        <td>{{$employer->CompanyName}}</td>
                        <td>{{$employer->JobTitle}}</td>
                        <td>{{$employer->Location}}</td>
                        <td>{{$employer->ContactDetails}}</td>
                        <td>{{$employer->JobDescription}}</td>
                        <td>{{$employer->submitted_at}}</td>
                        <div class="col-md-12">
                          <td><strong><a href="\delete-employer\{{$employer->CompanyID}}"  
                             onclick="return confirm('Are you sure you want to delete?');" >
                             <i class="fa fa-trash" style="font-size:23px"></i></a></strong></td>
                          </div>
                     </tr>
                    @endforeach
                    </tbody>
                  </table>
                  {{$Employer->links()}}
                  </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
        </script><script>document.write(new Date().getFullYear());</script> All Rights Reserved | 
        Made with love by <a href=" https://www.webpeb.com/" ><b>WebPeb</b></a>
            </p>
          </div> </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
             @include('admin.footer')
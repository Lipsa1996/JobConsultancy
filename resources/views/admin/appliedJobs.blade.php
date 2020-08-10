
@include('admin.header');
<div class="site-section bg-light" id="job-section">


<!-- Page Content -->
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Applied Jobs</h4> </div>
                    
                    <!-- /.col-lg-12 -->
                </div>
                @if(session()->has('delete'))
<div class="alert alert-warning" style="width:500px;margin-left:auto;margin-right:auto; text-align:center;" role="alert">
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
                            <h3 class="box-title">Applied Jobs</h3>
                            <div class="table-responsive">
                            <table class="table">
                           <thead>
                         <tr>
                           <td><b> Jobseeker Name</b></td>
                           <td><b>Jobseeker Email</b></td>
                           <td><b> Company Name</b></td>
                           <td><b>Job Title</b></td>
                           <td><b>Job Location</b></td>
                           <td><b>Applied Date</b></td>
                           <td><b>Action</b></td>
                         </tr>
                       </thead>
                       <tbody>
                         @foreach($applied_jobs as $jobs)
                         <tr>
                           <td>{{$jobs->JobseekerName}}</td>
                           <td>{{$jobs->JobseekerEmail}}</td>
                           <td>{{$jobs->CompanyName}}</td>
                           <td>{{$jobs->JobTitle}}</td>
                           <td>{{$jobs->JobLocation}}</td>
                           <td>{{$jobs->applied_at}}</td>
                           <div class="col-md-12">
                          <td><strong><a href="\delete-appliedjob\{{$jobs->AppliedJobID}}"
                             onclick="return confirm('Are you sure you want to delete?');" >
                            <i class= "fa fa-trash" style=" font-size:23px"></i></a></strong></td>
                          </div>
                         </tr>
                         @endforeach
                       </tbody>
                      </table>
                     {{$applied_jobs->links()}}
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
    

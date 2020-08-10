@include('admin.header')
<div class="site-section bg-light" id="job-section">
<!-- Page Content -->
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Jobs</h4> </div>
                </div>
                
                <!-- /row -->
                @if(session()->has('success'))
<div class="alert alert-success" style="width:500px;margin-left:auto;margin-right:auto; text-align:center;" role="alert">
{{ session()->get('success') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if(session()->has('message'))
<div class="alert alert-primary" style="width:500px;margin-left:auto;margin-right:auto; text-align:center;" role="alert">
{{ session()->get('message') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if(session()->has('delete'))
<div class="alert alert-warning" style="width:500px;margin-left:auto;margin-right:auto; text-align:center;" role="alert">
{{ session()->get('delete') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
<nav class="navbar navbar-light bg-light">
    <ul class="nav nav-pills">
      <li class="box-title">JOBS</li>
      <li style="float:right;"><a style="float:right;font-size:15px; background-color:green;padding-left:28px;
      padding-right:28px; padding-top:6px;padding-bottom:6px;margin-top:20px;color:white" href="\add">Add New</a></li>
    </ul>
  
</nav>
                    
                            <div class="table-responsive">
                            <table class="table">
                           <thead>
                         <tr>

                          <td><b>Job ID</b></td>
                          <td><b>Job Title</b></td>
                          <td><b> Company Name</b></td>
                          <td><b>Location</b></td>
                          <td><b>Job Description</b></td>
                          <td><b> Action</b></td>
                        </tr>
                        </thead>
                       <tbody>
                        @foreach($Jobs as $jobs)
                        <tr>
                          <td>{{$jobs->JobID}}</td>
                          <td>{{$jobs->JobTitle}}</td>
                          <td>{{$jobs->CompanyName}}</td>
                          <td>{{$jobs->Location}}</td>
                          <td>{{$jobs->JobDescription}}</td>
                          <div class="col-md-12">
                          <td><a href="\edit\{{$jobs->JobID}}">
                              <i class="fa fa-edit" style="font-size:23px;margin-top:10px;margin:10px;color:#13bcef"></i></a>
                          <a href="\delete-job\{{$jobs->JobID}}"  
                             onclick="return confirm('Are you sure you want to delete?');" >
                            <i class="fa fa-trash" style=" font-size:23px;margin:10px"></i></a></td>
                          </div>
                        </tr>
                        @endforeach
                        </tbody>
                     </table>
                     {{$Jobs->links()}}
                     </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
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
@include('admin.header')
<div class="site-section bg-light" id="job-section">

<!-- Page Content -->
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Messages</h4> </div>
                    
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
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
                            <h3 class="box-title">Contacts</h3>
                            <div class="table-responsive">
                            <table class="table">
                           <thead>
                         <tr>
                      <td><b>Name</b></td>
                      <td><b>Email</b></td>
                      <td><b>Subject</b></td>
                      <td><b>Message</b></td>
                      <td><b>Contacted Date</b></td>
                      <td><b>Action</b></td>
                      </tr>
                       </thead>
                       <tbody>
                    @foreach($Contact as $contact)
                   <tr>
                     <td>{{$contact->Name}}</td>
                     <td>{{$contact->Email}}</td>
                     <td>{{$contact->Subject}}</td>
                     <td>{{$contact->Message}}</td>
                     <td>{{$contact->contacted_at}}</td>
                     <div class="col-md-12">
                          <td><strong><a href="\delete-contact\{{$contact->ContactID}}"  
                             onclick="return confirm('Are you sure you want to delete?');" >
                             <i class="fa fa-trash " style="font-size:23px"></i></a></strong></td>
                          </div>
                          </tr>
                    @endforeach
                    </tbody>
                      </table>
                 {{$Contact->links()}}
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
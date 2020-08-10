
    
@include('user.header')

<div class="unit-5 overlay" style="background-image: url('/images/hero_bg_2.jpg');">
  <div class="container text-center"><br>
    <h2 class="mb-0">{{$job->JobTitle}}</h2>
    <br>
  </div>
</div>

<div class="site-section bg-light" >
<br><br>
@if(session()->has('success'))
    <div class="alert alert-success" style="width:500px; text-align:center; margin-left:auto;margin-right:auto">
        {{ session()->get('success') }}
    </div>
@endif

@if(session()->has('danger'))
    <div class="alert alert-danger" style="width:500px; text-align:center; margin-left:auto;margin-right:auto">
        {{ session()->get('danger') }}
    </div>
@endif

@if(session()->has('sorry'))
    <div class="alert alert-danger" style="width:500px; text-align:center; margin-left:auto;margin-right:auto">
        {{ session()->get('sorry') }}
    </div>
@endif
  <div class="container">
    <div class="row">
   
      <div class="col-md-12 col-lg-8 mb-5"  style="margin-left:auto; margin-right:auto">
    
        <div class="p-5 bg-white" >

          <div class="mb-4 mb-md-5 mr-5">
           <div class="job-post-item-header d-flex align-items-center">
             <h2 class="mr-3 text-black h4">{{$job->JobTitle}}</h2>
           </div>
           <div class="job-post-item-body d-block d-md-flex">
             <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">{{$job->CompanyName}}</a></div>
             <div><span class="fl-bigmug-line-big104"></span> <span>{{$job->Location}}</span></div>
           </div>
          </div>
          <div> <span><strong>Job Details</strong></span></div><br>
          <p>{{$job->JobDescription}}</p>
          <p class="mt-5"><a href="#" id="myBtn" class="btn btn-primary  py-2 px-4">Apply Now</a>
          <div id="myModal" class="modal">
               <div class="modal-content">
                <div class="modal-header">
                Email Verification
                 <span id="cross" class="close">&times;</span></div>
                  <div class="modal-body">
                     <form action="\applyJob\{{$job->JobID}}" method="post" >
                        Enter your Email:
                      <input type="text" name="Email" required><br><br>
                       <input type="hidden" name="_token" value="{{csrf_token() }}">
                       <input type="submit">
                      </form>
                    </div>
                </div>
            </div>
          </p>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>

<script>
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script>
function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}
function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}
</script>

<style>
#myCarousel{background-color:black;}
.modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  padding-top: 100px; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4); 
}
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 400px;
  height:230px;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s;
  border-radius:6px;
}
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}
.close {
  color:white;
  opacity:1.0;
  float: right;
  font-size: 28px;
}
.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.modal-header {
  padding: 8px 16px;
  background-color:#26baee;
  color: white;
  border-radius:5px 5px 0px 0px;
  font-size:18px;
}
.modal-body {text-align:center;margin-top:25px;}
.modal-body input[type=submit]
{
  width:70px;
  height:28px;
  border-radius:4px;
  background-color:#26baee;
  color:white;
  border:1px solid #26baee;
}
.modal-body input[type=text]
{
  width:280px;
  height:30px;
  border:2px solid #26baee;
}
@include('user.footer')




    
        
       

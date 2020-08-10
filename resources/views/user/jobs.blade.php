@include('user.header')

<div class="unit-5 overlay" style="background-image: url('images/hero_bg_2.jpg');">
  <div class="container text-center"><br>
    <h2 class="mb-0">Jobs</h2>
    <br>
  </div>
</div>

<div class="site-section bg-light" id="job-section">
@if($message)
    <div class="alert alert-success" style="width:70%; text-align:center; margin-left:auto;margin-right:auto">
        {{$message}}
    </div>
@endif
    <div class="container">
    @if($jobs)
      @foreach($jobs as $Job)
       <div class="row" data-aos="fade">
         <div class="col-md-12">

           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
             
              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">{{$Job->JobTitle}}</h2>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">{{$Job->CompanyName}}</a></div>
                 <div><span class="fl-bigmug-line-big104"></span> <span>{{$Job->Location}}</span></div>
               </div>
              </div>

              <div class="ml-auto">
                <a href="\jobDescription\{{$Job->JobID}}" class="btn btn-primary py-2">See Details</a>
              </div>
           </div>

         </div>
        </div>
        @endforeach
        <div class="page">
        {{$jobs->links()}}
        </div>
        @endif  
      </div>
    </div> 
     
    <br>
    <br>

    @include('user.footer')
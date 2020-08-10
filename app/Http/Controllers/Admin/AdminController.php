<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Validator;
use haruncpi\LaravelIdGenerator\IdGenerator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;
use Response;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    public function admin(request $req)
    {
        $username=$req->input('username');
        $password=$req->input('password');
        $result = DB::table('admins')->where('UserName','=',$username)->where('Password','=',$password)->first();
        if($result)
         {
            $jobseeker = DB::table('jobseeker')->count();
            $jobs = DB::table('jobs')->count();
            $employer = DB::table('employers')->count();
            $message = DB::table('contact')->count();
            $appliedjob = DB::table('appliedjob')->count();
            return view('Admin.dashboard',compact('jobseeker','jobs','employer','message','appliedjob'));
         }
        else
        return back()->with('message','Please enter the correct Username and Password');

    }
    function dashboard(){
        $jobseeker = DB::table('jobseeker')->count();
        $jobs = DB::table('jobs')->count();
        $employer = DB::table('employers')->count();
        $message = DB::table('contact')->count();
        $appliedjob = DB::table('appliedjob')->count();
        return view('Admin.dashboard',compact('jobseeker','jobs','employer','message','appliedjob'));
    }
    public function getDownload($file_name,$id)
    {
        //PDF file is stored under project/public/download/info.pdf
        $file= storage_path(). "/app/upload/$id/$file_name";
    
        $headers = array(
                  'Content-Type: application/pdf',
                );
    
        return Response::download($file, $file_name, $headers);
    }

    public function Reset_Password(request $req)
    {
        $username=$req->input('Username');
        $old_password=$req->input('Old');
        $new_password=$req->input('New');
        $confirm_password=$req->input('New2');
        if($old_password == $new_password)
             return back()->with('message','Old and New Password can not be same');
         else{    
              if($confirm_password != $new_password)
                   return back()->with('message','New and Confirm Passwords are not same');
               else{    
                 $result = DB::table('admin')->where('UserName','=',$username)->where('Password','=',$old_password)
                               ->update(['Password'=>$new_password]);
                   if($result)
                      return redirect('dashboard')->with('message','Password changed successfully');
                   else
                       return back()->with('message','Enter correct Username and Password');
         }}
        
    }
    public function appliedJobs(request $req)
    {
        
        $applied_jobs=DB::table('appliedjob')->paginate(10);

        return view('admin.appliedJobs',compact('applied_jobs'));
    }

    public function dash_contact(request $req)
    {
        $Contact=DB::table('contact')->paginate(10);

            return view('admin.dash_contact',compact('Contact'));
    }

    public function dash_jobs(request $req)
    {
        $Jobs=DB::table('jobs')->paginate(10);

            return view('admin.dash_jobs',compact('Jobs'));
    }

    public function dash_jobseeker(request $req)
    {
        $Jobseeker=DB::table('jobseeker')->paginate(10);

            return view('admin.dash_jobseeker',compact('Jobseeker'));
    }

    public function dash_employer(request $req)
    {
        $Employer=DB::table('employers')->paginate(10);
        return view('admin.dash_employer',compact('Employer'));
    }

    public function edit($id)
    {
            $data=DB::table('jobs')->where('JobID','=',$id)->first();
            return view('admin.edit' ,['data'=>$data]);
    }

    public function update($id,request $req)
    {
            $jobTitle=$req->input('Title');
            $companyName=$req->input('Name');
            $location=$req->input('Location');
            $jobDescription=$req->input('Description');
            $data=DB::table('jobs')->where('JobID','=',$id)->update(['JobTitle'=>$jobTitle,'CompanyName'=>$companyName,'Location'=>$location, 
            'JobDescription'=>$jobDescription]);
            return redirect('jobs-section')->with('message', 'Job data edited successfully');
    
    }

    public function deleteJob($id)
    {
            $data=DB::table('jobs')->where('JobID','=',$id)->delete();
            if($data)
            return redirect('jobs-section')->with('delete', 'Job Deleted Successfully');
    }

    public function deleteEmployer($id)
    {
            $data=DB::table('employers')->where('CompanyID','=',$id)->delete();
            if($data)
            return redirect('employer-section')->with('delete', ' Deleted Successfully');
    }

    public function deleteJobseeker($id)
    {
            $file_name = DB::table('jobseeker')->select('CV_Name')
                           ->where('JobseekerID','=',$id)->first();
            $file = $file_name->CV_Name;
            $folderPath = storage_path().'/app/upload/'.$id;
           // $folderPath = 'upload/';
          // if( \File::exists($folderPath))
          // return "lipsa";
           // unlink(storage_path('app/upload/'.$id.'/'.$file)); for deleting file
          
            $data=DB::table('jobseeker')->where('JobseekerID','=',$id)->delete();
            $response = File::deleteDirectory($folderPath);
           if($data)
           {
              return redirect('jobseeker-section')->with('delete', ' Deleted Successfully');
           }
           
    }

    public function deleteContact($id)
    {
            $data=DB::table('contact')->where('ContactID','=',$id)->delete();
            if($data)
            return redirect('contact-section')->with('delete', 'Contact Deleted Successfully');
    }

    public function deleteAppliedJob($id)
    {
            $data=DB::table('appliedjob')->where('AppliedJobID','=',$id)->delete();
            if($data)
            return redirect('appliedJobs')->with('delete', 'Job Deleted Successfully');
    }

    public function addNew(request $req)
    {
        $jobTitle=$req->input('Title');
        $companyName=$req->input('Name');
        $location=$req->input('Location');
        $jobDescription=$req->input('Description');
       $data= DB::table('jobs')->insert(['JobTitle'=>$jobTitle,'CompanyName'=>$companyName,'Location'=>$location, 
        'JobDescription'=>$jobDescription]);
        if($data)
        return redirect('jobs-section')->with('success', 'New Job added successfully');
    }

}
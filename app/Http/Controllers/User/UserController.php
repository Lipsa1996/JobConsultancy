<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Validator;
use haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Model\jobseeker;


class UserController extends Controller
{

    public function Search_Job(request $req)
    {
        $job_name=$req->input('JobName');
        $job_location=$req->input('JobLocation');
        $jobs= DB::table('jobs')->where('JobTitle','LIKE','%'.$job_name.'%')
        ->Orwhere('Location','LIKE','%'.$job_location.'%')->paginate(10);
        if(count($jobs)>0){
            $message =0;
            return view('jobs',compact('jobs','message'));
        }
         else
         {
         $jobs=0;
         $message="Sorry there is no job available";
         return view('jobs',compact('jobs','message'));
         }
    }
    public function employer(request $req)
    {
                               // $mytime = Carbon::now();
                                //$Current_date=$mytime->toDateTimeString();
                                //$day=    $mytime->toFormattedDateString();
                               // $date=    $mytime->toDateString();
                                
        $jobTitle=$req->input('Title');
        $companyName=$req->input('Name');
        $contact=$req->input('Contact');
        $location=$req->input('Location');
        $jobDescription=$req->input('Description');
        $data= DB::table('employers')->insert(['JobTitle'=>$jobTitle,'CompanyName'=>$companyName,'Location'=>$location, 
        'ContactDetails'=>$contact,'JobDescription'=>$jobDescription,]);
        if($data)
        return back()->with('message', ' Your Job addedd successfully');
    }


    public function contact(request $req)
    {
        
        $name=$req->input('Name');
        $email=$req->input('Email');
        $subject=$req->input('Subject');
        $message=$req->input('Message');
        $this->validate($req,['Email'=>'required|email'],[
            'Email.email'=>'Please enter a valid Email address ', 
            ]);
      $data=  DB::table('contact')->insert(['Name'=>$name,'Email'=>$email, 'Subject'=>$subject,
      'Message'=>$message,]);
       if($data)
       return back()->with('message', ' Thanks for contacting Us');
   }

    public function jobseeker(request $req)
    {

        $name=$req->input('Name');
        $email=$req->input('Email');
        $phone=$req->input('Mobile_Number');
        $file=$req->file('file');
        
        $this->validate($req,['Email'=>'required|email|unique:jobseeker',
        'Mobile_Number'=>'required|regex:/^0{0,1}[6-9]\d{9}$/',
        "file" => "required|mimes:pdf|max:10000"],[
            'Email.email'=>'Please enter a valid Email address ', 
             'file.mimes'=>'Please enter your CV in pdf format',
             'file.uploaded'=>'Please enter the Resume within 2 MB',
             'Mobile_Number.regex'=>'Please enter a valid mobile number',
             'file.required'=>'Please enter your CV',
             'Email.unique'=>'Sorry this Email is already in use',
            ]);
        $file_name= $file->getClientOriginalName();
        $data= DB::table('jobseeker')->insert(['Name'=>$name,'Email'=>$email,'MobileNumber'=>$phone,
        'CV_Name'=>$file_name,]);
        $file_id =  DB::table('jobseeker')->where('Email',$email)->first();
        $ID = $file_id->JobseekerID;
        $path=$req->file('file')->storeAs('upload/'.$ID,$file_name);
        if($data)
        return back()->with('message', ' Your Registration is successfully');
    }

    function login(request $req){
        $email=$req->input('Email');
        $password=$req->input('Password');
        
    }

    public function jobs()
    {
        
        $jobs=DB::table('jobs')->paginate(10);
         if(count($jobs)>0){
            $message =0;
            return view('user.jobs',compact('jobs','message'));
        }
         else
         {
         $jobs=0;
         $message="Sorry there is no job available";
         return view('user.jobs',compact('jobs','message'));
         }
    }

    public function recentjobs()
    {
        
        $jobs=DB::table('jobs')->orderBy('JobID','desc')->take(3)->get();
         if(count($jobs)>=0)
         {
            return view('user.index',['job'=>$jobs]);
         }
    }


    public function description($id)
    {
        $jobs=DB::table('jobs')->where('JobID','=',$id)->first();
            return view('user.jobDescription',['job'=>$jobs]);
    }

    public function applyJob(request $req,$id)
    {
        $email=$req->input('Email');
        $user = DB::table('jobseeker')->where('Email', $email)->first();
        if($user)
        {
            $jobseeker_email= $user->Email;
            $jobseeker_id= $user->JobseekerID;
            $jobseeker_name= $user->Name;
            $data=DB::table('appliedjob')->where('JobseekerID', $jobseeker_id)->where('JobID', $id)->first();
            if($data)
              return back()->with('sorry','Sorry You have already applied for this job');
            else
            {
            
                $res = DB::table('jobs')->where('JobID', $id)->first();
                $job_id=$res->JobID;
                $job_title=$res->JobTitle;
                $job_location=$res->Location;
                $job_company=$res->CompanyName;
                DB::table('appliedjob')->insert(['JobseekerID'=>$jobseeker_id,'JobID'=>$job_id,
                'JobseekerName'=>$jobseeker_name,'JobseekerEmail'=>$jobseeker_email,'CompanyName'=>$job_company,
                'JobTitle'=>$job_title,'JobLocation'=>$job_location,]);
               return back()->with('success','Job Successfully applied');
            }
        }
        else
        return back()->with('danger','Please first register in Jobseeker');
    }

   /* public function checkAPI()
    {
        $data = DB::table('jobs')->get();
        return response()->json($data,200);
    }

    public function saveAPI(Request $req)
    {
        $data = DB::table('jobs')->get();
        return response()->json($data,200);
        git
    }*/

}

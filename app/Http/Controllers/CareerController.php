<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Validator;
use File;
use App\Cv;
use App\Job;
use App\Internship;
use Mail;

class CareerController extends Controller
{
    //


    public function send_cv_mail_public(Request $req){
    	$name = $req->input('name');
		$email = $req->input('email');
		$address = $req->input('address');
		$post = $req->input('post');

		//=========validation======
		 $rules = array(
            'file' => 'required|mimes:doc,pdf,docx,ppt,pptx|max:2048',
            'email'=> 'required',
            'post'=> 'required',
            'name'=> 'required',
         
        ); 

		$validator = Validator::make(Input::all(),$rules);

		  if($validator->fails()){

            Session::flash('error','File size should not exceed 2MB & file type must be of (doc/pdf/ppt)');
       		return redirect('career-cv');
        }




 //===============Mail===============================

       $subject = 'Applicant for the post of : '.$post;

        $file_name = Input::file('file')->getClientOriginalName();
        $extension = Input::file('file')->getClientOriginalExtension();

        $attach_name = $file_name.'.'.$extension;

       $data = array(
                  'name' => $name,
                  'post' => $post,
                  'address' => $address,
                  'email' => $email            
                  
       );

         Mail::queue('mail_template_cv',$data, function ($message) use($subject,$file_name){
                  


                 
            $file = Input::file('file');

         
                      $message->from('golamkibriashuvo@gmail.com','CV-Bot');

                      $message->to('kibria.shuvo@northsouth.edu')->subject($subject);

                      $message->attach($file,array('as' => $file_name, 'mime' => 'application/pdf,doc,docx'));
              });

     
        Session::flash('cv_uploaded','Thanks for submitting your CV');
        return redirect('career-cv');


    }



//==============To CMS===================
	public function save_cv(Request $req){
		$name = $req->input('name');
		$email = $req->input('email');
		$address = $req->input('address');
		$post = $req->input('post');

		//=========validation======
		 $rules = array(
            'file' => 'required|mimes:doc,pdf,docx,ppt,pptx|max:2048',
            'email'=> 'required',
            'post'=> 'required',
            'name'=> 'required',
         
        ); 

		$validator = Validator::make(Input::all(),$rules);

		  if($validator->fails()){

            Session::flash('error','File size should not exceed 2MB & file type must be of (doc/pdf/ppt)');
       		return redirect('career-cv');
        }


		//======================

		if(Input::hasFile('file')){

                 
            $file = Input::file('file');

            $file_name = $req->input('email');
            $extension = Input::file('file')->getClientOriginalExtension();

            $file->move('cv_uploads', $file_name.'.'.$extension);
        }


		$applicant = new Cv;

		$applicant->name = $name;
		$applicant->email = $email;
		$applicant->address = $address;
		$applicant->post = $post;
		$applicant->cv = '/cv_uploads/'.$file_name.'.'.$extension;

		$applicant->save();

		Session::flash('cv_uploaded','Thanks for submitting your CV');
        return redirect('career-cv');

	}



	public function view_applicants(){
		$applicants = Cv::orderBy('created_at','desc')->paginate(6);
		return view('cv_list_view')->with('datas',$applicants);
	}


	public function cv_view_button(Request $req){
		
		if($req->delete==''){
			$applicant = Cv::find($req->download);
			$pathToFile = public_path().$applicant->cv;

			$temp = explode("/", $applicant->cv);

			$filename = $applicant->name.'-'.$temp[2];
			


			return response()->download($pathToFile,$filename);
		}else{
			 $applicant = Cv::find($req->delete);
			 $temp = explode("/", $applicant->cv);
			 File::delete($temp[1].'/'.$temp[2]);
			 $applicant->delete();

        
            Session::flash('delete','Applicant information Deleted Successfully');
            return redirect('view_applicants');
		}
	}

	public function post_new_jobs(){
		return view('post_new_jobs');
	}

	public function save_job_details(Request $req){
		$job_title = $req->job_title;
		$details = $req->details;
		$deadline = $req->deadline;

		$vacancy =  new Job;

		$vacancy->job_title = $job_title;
		$vacancy->details = $details;
		$vacancy->deadline = $deadline;

		$vacancy->save();

		Session::flash('add','Job Advertisement posted Successfully');
		return redirect('vacancy_list');

	}

	public function vacancy_list(){
		$jobs = Job::paginate(6);
		return view('posted_job_list')->with('datas',$jobs);
	}


	public function vacancy_list_button(Request $req){
		if($req->edit==''){
			Job::destroy($req->delete);
			Session::flash('delete','Job Advertisement Deleted Successfully');
            return redirect('vacancy_list');

		}else{
			$job = Job::find($req->edit);
			return view('edit_job_details')->with('data',$job);

		}
	}

	public function edit_job_details(Request $req,$id){
		
			$job_title = $req->job_title;
			$details = $req->details;
			$deadline = $req->deadline;
			
			$applicant = Job::find($id);
			$applicant->job_title = $job_title;
			$applicant->details = $details;
			$applicant->deadline = $deadline;

			$applicant->save();
			Session::flash('edit','Job details updated Successfully');
			return redirect('vacancy_list');
	

		

	}

	public function post_new_internship(){
		return view('post_new_internship');
	}

	


	public function internship_list_button(Request $req){
		if($req->edit==''){
			Internship::destroy($req->delete);
			Session::flash('delete','Internship Advertisement Deleted Successfully');
            return redirect('internship_list');

		}else{
			$job = Internship::find($req->edit);
			return view('edit_internship_details')->with('data',$job);

		}
	}

	public function internship_list(){
		$internships = Internship::paginate(6);
		return view('posted_internship_list')->with('datas',$internships);

	}

	public function save_internship_details(Request $req){
		$job_title = $req->job_title;
		$details = $req->details;
		$deadline = $req->deadline;

		$internship =  new Internship;

		$internship->job_title = $job_title;
		$internship->details = $details;
		$internship->deadline = $deadline;

		$internship->save();
		Session::flash('add','Internship Advertisement posted Successfully');
		return redirect('internship_list');
	}


	public function edit_internship_details(Request $req,$id){
		
			$job_title = $req->job_title;
			$details = $req->details;
			$deadline = $req->deadline;
			
			$intern = Internship::find($id);
			$intern->job_title = $job_title;
			$intern->details = $details;
			$intern->deadline = $deadline;

			$intern->save();
			Session::flash('edit','Internship details updated Successfully');
			return redirect('internship_list');
		
		

	}


	public function populate_public_page_job(){
		$job = Job::paginate(4);
		return view('career')->with('datas',$job);

	}

	public function populate_public_page_internship(){
		$intern = Internship::paginate(4);
		return view('internship')->with('datas',$intern);
	}


}

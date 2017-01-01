<?php

namespace App\Http\Controllers;

use App\messages;

use Illuminate\Http\Request;

use DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Mail;

class MessageController extends Controller
{
    //

    public function send_feedback(Request $request){
       
        $name =  $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $text = $request->input('text');

      	$message = new messages;

      	$message->name =  $name;
      	$message->email = $email;
      	$message->phone = $phone;
      	$message->text = $text;
        $message->isRead = '0';

      	$message->save();
      	
      	Session::flash('message_sent','Thanks for your feedback');
        return redirect('contact-us');
    }

    public function view_messages(){
          $messages = messages::orderBy('isRead')->orderBy('created_at','desc')->paginate(6);
          return view('view_message',['datas'=>$messages]);
    }

    public function view_message_button(Request $req){
      if($req->id_read==''){      //====Read null, So delete
            messages::destroy($req->id_delete);
            Session::flash('delete','Message Deleted Successfully');
            return redirect('view_messages');

      }else{
            $message = messages::find($req->id_read);
            return view('message_details_view')->with('data',$message);
      }
    }



    public function message_details_btn_action(Request $req){
       
      if($req->back=='back'){

          return redirect('view_messages');
       }

       else if($req->mark!=''){
            $msg = messages::find($req->mark);
            $msg->isRead = '1';
            $msg->save();
            Session::flash('mark','Message Marked as Read');
            return view('message_details_view')->with('data',$msg);

       }

       else if($req->delete!=''){
            messages::destroy($req->delete);
            Session::flash('delete','Message Deleted Successfully');
            return redirect('view_messages');
       }
       elseif ($req->reply!='') {
            $msg = messages::find($req->reply);
            return view('mail_reply')->with('data',$msg);
       }



    }

    public function send_mail(Request $request){

//========For Redirect=============

        $msg = messages::find($request->id);





//=====================Mail================================
         $mail_body = $request->input('mail_body');
          $subject = $request->input('subject');
          
          $data = array(
                  'mail_body' => $mail_body            
                  
                  );
          
          $temp= str_replace(array( '[', ']','"','"'), '', $request->input('mails'));
         
          
         
          $emails = explode(",",$temp);  
          
      //---------------------- pfffffffffff -_- Took 2 days to figure out-----------------------------
          $last = array();   
          
         
          
          foreach($emails as $email){
             array_push($last,$email);
          }
          
         
          
            Mail::queue('mail_template',$data, function ($message) use($last,$subject){
                  
                      $message->from('golamkibriashuvo@gmail.com', 'GK');

                      $message->to($last)->subject($subject);
              });
            Session::flash('mail_sent','Mail Sent Successfully!!!');
              
             return view('message_details_view')->with('data',$msg);
            //return redirect('view_messages');
    
    }


    public function back_to_view(Request $req){
        $msg = messages::find($req->back);
        return view('message_details_view')->with('data',$msg);
    }


}

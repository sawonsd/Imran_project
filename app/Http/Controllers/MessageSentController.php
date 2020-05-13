<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MessageSentController extends Controller
{
	
    public function sent(request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',

        ]);

            $data=array();
            $data['name']=$request->name;
            $data['email']=$request->email;
            $data['subject']=$request->subject;
            $data['message']=$request->message;

            //return response()->json($data);
            $message = DB::table('message_sents')->insert($data);

            if($message){
                $notification=array(
                'messege' =>'Successfully Message Sent',
                'alert-type' =>'success',
                );
                return Redirect()->back()->with($notification);
                
            }else{
                $notification=array(
                'messege' =>'Somthing Worng',
                'alert-type' =>'error',
                );
                return Redirect()->back()->with($notification);
            }


    }
}

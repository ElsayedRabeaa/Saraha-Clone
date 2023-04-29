<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use App\Models\Visit;
use Illuminate\Http\Request;

class MessageController extends Controller
{
 
    public function index()
    {
        $msgs=Message::where('user_id',\Auth::id())->latest()->paginate(3);
        $visits=Visit::where('user_id',\Auth::id())->count();

         return view('show',compact('msgs','visits'));

    }

    
    public function add(Request $request,$id)
    {
       $request->validate([
        'message'=>'required'
       ]);
       $message=new Message();
       $message->message=$request->message;
       $message->user_id=$id;
      $message->save();
      return redirect()->back()->with('save','تم ارسال الرسالة بنجاح');
    }


    public function send($id)
    {
       $user=User::findorfail($id);
       if($user->id != \Auth::id()){
        $visits=new Visit();
        $visits->user_id=$id;
        $visits->save();

       }
       return view('send',compact('user'));
    }


    public function visit()
    {
        $visits=Visit::where('user_id',\Auth::id())->latest()->take(3)->get();
         return view('visit',compact('visits'));

    }
  
}

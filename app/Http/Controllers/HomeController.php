<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Appionment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user() -> usertype =='0') {
                $doctor = doctor::all();
                 return view('user.home', compact('doctor'));
            } else {
                return view('admin.home');
            }
            
        } else {
            return redirect() ->back();
        }
        
    }

    public function index()
    {
        $doctor = doctor::all();
        return view('user.home', compact('doctor'));
    }

    // make appionment

    public function send(Request $request)
    {
        $this -> validate( $request,  [
            'name'              => 'required',
            'email'             => 'required',
            'cell'             => 'required',
            'doctor'            => 'required'
        ]);
        $data =new appionment;
     
        $data->name  =$request ->name;
        $data->cell  =$request ->cell;
        $data->email =$request ->email;
        $data->doctor  =$request ->doctor;
        $data->date  =$request ->date;
        $data->message  =$request ->message;
        $data->status  ='Pending';
        if(Auth::id()){
            $data->user_id  =Auth::user()->id;
        }

        $data -> save();

        return redirect()-> back() -> with('success', 'Your Reqest submited successfuly, Please Wait for confermation');
        
    }

    public function myappointment()
    {
        if (Auth::id()) {
            $userid=Auth::user()-> id;
            $appoint=appionment::where('user_id',$userid) -> get();
            return view('user.my_appointment',compact('appoint'));
        }
        else{
            return redirect() -> back();
        }
        
    }
      
    //cancel Appoinment

    public function apcancel($id)
    {
            $ap_data=appionment::find($id);
            $ap_data -> delete();

            return redirect() -> back()-> with('success', 'Your Appoinment Canceled');
        
        
    }

    
}

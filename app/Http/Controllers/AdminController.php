<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Appionment;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }

    public function upload(Request $request)
    {
        $this -> validate( $request,  [
            'name'              => 'required',
            'room'             => 'required',
            'phone'              => 'required|unique:doctors',
            'speaciality'          => 'required'
        ]);

        $doctor =new doctor;
        $img =$request -> photo;
        $img_name =time().'.'. $img->getClientOriginalExtension();

        $request -> photo -> move('docimg', $img_name);

        $doctor->photo =$img_name;
        $doctor->name  =$request ->name;
        $doctor->phone  =$request ->phone;
        $doctor->room  =$request ->room;
        $doctor->time  =$request ->time;
        $doctor->holyday  =$request ->holyday;
        $doctor->speaciality  =$request ->speaciality;


        $doctor->save();

        return redirect()-> back() -> with('success', 'doctor added successfully');



    }

    // mange appoinments

    public function showappoinments()
    {    
        $appo_data=appionment::all();
   
        return view('admin.appoinment', compact('appo_data')); 
    }

    // Approved Appoinment

    public function approved($id)
    {
            $data=appionment::find($id);
            $data -> status='Approved';
            $data -> save();

            return redirect() -> back();
    }

    public function cancel($id)
    {
            $data=appionment::find($id);
            $data -> status='Canceled';
            $data -> save();

            return redirect() -> back();
    }
}

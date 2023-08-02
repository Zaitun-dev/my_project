<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function schedule(Request $request){
        if(auth()->user()->id){
            $incomingFields = $request->validate([
                'name'=>'required', 
                'email'=>'required', 
                'appointment_date'=>'required', 
                'departement'=>'required', 
                'contact'=>'required', 
                'message'=>'required', 
            ]);
            
            Appointment::create($incomingFields);
        }
        return view('therapist');
    }
}

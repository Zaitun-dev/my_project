<?php

use App\Models\Appointment;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// ------------------------------------------------------------------

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog-detail', function (){
    return view('blog-detail');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::post('/get-in-touch', function(Request $request){
    $incomingFields = $request->validate([
        'name'=>'required', 
        'email'=>'required', 
        'subject'=>'required', 
        'message'=>'required', 
    ]);
    if(auth()){
        $incomingFields['user_id']=auth()->user()->id;  
    }
    Contact::create($incomingFields);
    return redirect('/contact');
});

Route::get('/get-in-touch', function(){
    return view('contact');
});

Route::get('/therapist', function(){
    return view('therapist');
});

Route::post('/make-appointment',
           function (Request $request){
                $incomingFields = $request->validate([
                    'name'=>'required', 
                    'email'=>'required', 
                    'appointment_date'=>'required', 
                    'departement'=>'required', 
                    'contact'=>'required', 
                    'message'=>'required', 
                ]);
                if(auth()){
                    $incomingFields['user_id']=auth()->user()->id;  
                }
                Appointment::create($incomingFields);
            return redirect('/therapist');
   }); 

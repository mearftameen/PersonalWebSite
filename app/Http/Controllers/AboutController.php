<?php

namespace App\Http\Controllers;

use App\Models\masseges;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{

    public function showDoing()
    {
        $Doing = DB::table('what_Im_boing')->get();
        $data = DB::table('aboutme')->get();
        $Testimonials = DB::table('Testimonials')->get();
        $contact= DB::table('contact')->get();
        $Education= DB::table('Education1')->get();
        $skills= DB::table('skills')->get();
        $projects= DB::table('projects')->get();
        $courunes= DB::table('courses_and_unesthestalls')->get();
        $profile= DB::table('profile')->get();
        return view('welcome',compact('data','Doing','Testimonials','contact','Education'
        ,'skills','projects','courunes','profile'));
    }
    public  function store(Request $request){

       $masseges = new masseges();
        $masseges->full_name = $request->full_name;
        $masseges->email = $request->email;
        $masseges->masseges = $request->masseges;
        $masseges->save();
        return response('تم الأرسال');
    }
}

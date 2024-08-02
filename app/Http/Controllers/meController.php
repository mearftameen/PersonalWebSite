<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class meController extends Controller
{
    public function index()
    {
        $da = DB::table('aboutme')->get();
        return view('welcome',compact('da'));
    }
}

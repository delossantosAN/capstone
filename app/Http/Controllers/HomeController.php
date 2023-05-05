<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\User;
use App\Models\Appointment;
use App\Models\ApplicationStatus;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $loginUser = Auth::user();
        $books = Appointment::where('user_id',$loginUser->id)->get();
        $adopts = ApplicationStatus::where('user_id',$loginUser->id)->get();
        return view('layouts.profile.user-profile', compact('loginUser','books','adopts'));
    }
    public function random()
    {
        $dataRandom = Pet::inRandomOrder()->limit(5)->get();
        print($dataRandom);
    }

}

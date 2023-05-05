<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
    }
    public function userEditProfile(Request $request)
    {
        $request = ([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'contact1' => $request->contact1,
            'birthdate' => $request->birthdate,
            'address' => $request->address,
            'city' => $request->city,
            'zip' => $request->zip,
        ]);

            User::findOrFail(Auth::user()->id)->update($request);

            return redirect()->back();
    }
}

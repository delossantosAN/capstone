<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Auth;
use App\Models\User;

class appointmentStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function __construct(){
        $this->status = new Appointment;
    }
    public function index(){
        $loginUser = Auth::user();
        $books = Appointment::where('user_id',$loginUser->id)->get();
        

        return view('layouts.appointment.book', compact('loginUser','books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function book(Request $request)
    {
        $data = [
            'user_id' => $request ->user_id,
            'service' => $request ->service,
            'status' => $request ->status,
            'notes' => $request ->notes,
            'date_and_time' => $request ->date,
            'admin_notes' => $request ->admin_notes,
            ];
    
            $input = $request ->all();
            
                $this->status->create($data);
                return view('home'); 
            }
   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editStatus($id)
    {
        $status = $this->status->getbooking($id);
        return view('admin.dashboard-apppointment', compact('status'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data = [
            'id' => $request->id,
            'status' => $request->status,
            'admin_notes' => $request->adminnotes,
            ];
            $this->status->updateStatus($data, $request->id);
            return redirect()->back()->with('message', 'Change of status updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

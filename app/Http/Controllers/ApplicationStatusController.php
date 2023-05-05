<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\User; 
use App\Models\ApplicationStatus; 
use Auth;

class ApplicationStatusController extends Controller
{
    function __construct(){
        $this->status = new ApplicationStatus;
        $this->pet = new Pet;
    }

    public function index()
    {   $loginUser = Auth::user();
        $pets = Pet::all();
        $adopts = ApplicationStatus::where('user_id',$loginUser->id)->get();
        //return view('layouts.adoption.adopt-application', compact('loginUser','adopts','pets'));
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   $loginUser = Auth::user();
        $data = [
            'service' => $request ->service,
            'user_id' => $request ->user_id,
            'pet_id' => $request ->pet_id,
            'status' => $request ->status,
            'notes' => $request ->notes,
            ];
    
            $input = $request ->all();
            
                $this->status->create($data);
                //return view('layouts.profile.user-profile' ,compact('loginUser'));
                $pets = Pet::all();
                return view('home');
            }
    

    /**
     * Display the specified resource.
     */
    
    /**
     * Show the form for editing the specified resource.
     */
    public function editStatus($id)
    {
        $pet = $this->pet->getPet($id);
        return view('admin.modal-edit', compact('pet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data = [
            'id' => $request->statusId,
            'user_id' => $request->userId,
            'status' => $request->status,
            'notes' => $request->notes,
            ];
            $this->status->updateStatus($data, $request->statusId);
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

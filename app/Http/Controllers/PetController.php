<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Pet;


class PetController extends Controller
{
    function __construct(){
        $this->pet = new Pet;
    }
    public function index()
    {
        return view('admin.dashboard-pets');
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
    {
        $data = [
        'name' => $request ->name,
        'description' => $request ->description,
        'age' => $request ->age,
        'image' => $request ->image,
        ];

        $input = $request ->all();
        if($request->hasFile('image')){
            $destination_path = 'public/assets/';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path,$image_name);

            $data['image'] = $image_name;
            $this->pet->store($data);
            return redirect()->back()->with('message', 'Successfully added data!'); 
        }

        
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
    public function updatePet($id)
    {
        $pet = $this->pet->getPet($id);
        return view('admin.modal-edit', compact('pet'));
    }
    public function petId($id)
    {
        $pet = $this->pet->getPet($id);
        return view('layouts.adoption.adopt-application', compact('pet'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function saveupdate(Request $request)
    {
        $data = [
            'id' => $request->petid,
            'name' => $request->petname,
            'description' => $request->petdescription,
            'age' => $request->petage,
            ];

            $this->pet->updatePet($data, $request->petid);
            return redirect()->back()->with('message', 'Successfully UPDATED data!');
    }

    public function destroy(string $id)
    {
        $this->pet->deletePet($id);
        return redirect()->back()->with('message', 'Successfully DELETED data!');
    }
}

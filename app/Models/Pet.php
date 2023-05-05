<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\PetController;

class Pet extends Model
{
    
    use HasFactory;
    protected $table = 'pets';
    
    protected $fillable = [
        'name',
        'description',
        'age',
        'image',
    ];

    public function store($data){
        return $this->create($data);
    }

    public function deletePet($id){
        $pet = $this->find($id);
        $pet->delete(); 
    }

    public function getPet($id){
        return $this->find($id);
    }

    public function updatePet($data, $id){
        $pet = $this->find($id);
        $pet->update($data);
    }
}
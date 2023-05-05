<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Appointment extends Model
{
    use HasFactory;
    protected $table = 'appointments';

    protected $fillable = [
        'user_id',
        'service',
        'date_and_time',
        'notes',
        'admin_notes',
        'status',
        
    ];
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function getbooking($id){
        return $this->find($id);
    }

    public function updateStatus($data, $id){
        $status = $this->find($id);
        $status->update($data);
    }
    
}

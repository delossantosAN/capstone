<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pet;
use App\Models\User;
use App\Http\Controllers\ApplicationStatusController;

class ApplicationStatus extends Model
{
    use HasFactory;
    protected $table = 'applications_status';

    protected $fillable = [
        'user_id',
        'pet_id',
        'status',
        'notes',

    ];
    public function pet()
    {
        return $this->hasOne(Pet::class, 'id', 'pet_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function getStatusId($id){
        return $this->find($id);
    }
    public function updateStatus($data, $id){
        $status = $this->find($id);
        $status->update($data);
    }
    public function applicationId($id){
        return $this->find($id);
    }
}

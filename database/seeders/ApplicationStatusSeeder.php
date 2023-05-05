<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ApplicationStatus;

class ApplicationStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $applications_status = [
            [
                'user_id' => 2,
                'pet_id' => 10,
                'status' => 'pending',
                'notes' => 'adoption for review'
            ],
            [
                'user_id' => 3,
                'pet_id' => 8,
                'status' => 'pending',
                'notes' => 'adoption for review'
            ],
            [
                'user_id' => 4,
                'pet_id' => 7,
                'status' => 'pending',
                'notes' => 'adoption for review'
            ],
            [
                'user_id' => 5,
                'pet_id' => 4,
                'status' => 'pending',
                'notes' => 'adoption for review'
            ],
        ];
        foreach ($applications_status as $application_status){
            ApplicationStatus::create($application_status);
        }
    }
}

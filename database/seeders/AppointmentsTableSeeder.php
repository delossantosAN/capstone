<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Appointment;

class AppointmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $appointments = [
            [
            'user_id' => 2,
            'service'=> 'grooming',
            'date_and_time'=> '2023-04-18 15:00:00',
            'notes' => 'full grooming for small breed',
            'admin_notes' => 'booking for review',
            'status' => 'pending',
            ],
            [
            'user_id' => 3,
            'service'=> 'reular consultaion',
            'date_and_time'=> '2023-04-22 10:00:00',
            'notes'=> 'Check-up',
            'admin_notes' => 'booking for review',
            'status' => 'pending',
            ],
            [
            'user_id' => 4,
            'service'=> 'vaccination',
            'date_and_time'=> '2023-04-19 09:00:00',
            'notes'=> '6-in-1 vaccination',
            'admin_notes' => 'booking for review',
            'status' => 'pending',
            ],
            [
            'user_id' => 5,
            'service'=> 'grooming',
            'date_and_time'=> '2023-04-15 13:00:00',
            'notes'=> 'full grooming for large breed',
            'admin_notes' => 'booking for review',
            'status' => 'pending',
            ],
            [
            'user_id' => 4,
            'service'=> 'regular consultation',
            'date_and_time'=> '2023-04-12 14:00:00',
            'notes'=> 'check up. Something wrong in his paw',
            'admin_notes' => 'booking for review',
            'status' => 'pending',
            ],
        ];
        foreach ($appointments as $appointment){
            Appointment::create($appointment);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
            'firstname' => 'Admin',
            'lastname' => 'PAWS Clinic',
            'email' => 'admin@pawsclinic.com',
            'password' => '$2y$10$nX2c97uE49tMp8LlJ004G.L04Ff2Thye1WHlRH8kk2CEZ/C9ronAu', // password
            'address'=> 'rizal',
            'city' => 'rizal',
            'zip' => '1870',
            'birthdate' => '2000-06-12',
            'contact1' => '09151478523',
            'contact2' => '09273652198',
            'remember_token' => Str::random(10),
            'role_as' => '1'
            ],
            [
            'firstname' => 'Adora',
            'lastname' => 'delos Santos',
            'email' => 'default@user.com',
            'password' => '$2y$10$iHrC.wVFHWBcD07lrG5Di.PhrKnfUokTfOC2n2LD9srgIKGjsSRc2', // password
            'address'=> 'village',
            'city' => 'antipolo',
            'zip' => '1870',
            'birthdate' => '2000-12-12',
            'contact1' => '09151452379',
            'contact2' => '09214523785',
            'remember_token' => Str::random(10),
            ],
            [
            'firstname' => 'Arthur',
            'lastname' => 'Aldrin',
            'email' => 'Arthuraldrin@gmail.com',
            'password' => '$2y$10$iHrC.wVFHWBcD07lrG5Di.PhrKnfUokTfOC2n2LD9srgIKGjsSRc2', // password
            'address'=> 'E Village',
            'city' => 'Marikina',
            'zip' => '1870',
            'birthdate' => '1999-12-12',
            'contact1' => '09153781369',
            'contact2' => '09234513569',
            'remember_token' => Str::random(10),
            ],
            [
            'firstname' => 'Joven',
            'lastname' => 'Curitao',
            'email' => 'jovencuritao@yahoo.com',
            'password' => '$2y$10$iHrC.wVFHWBcD07lrG5Di.PhrKnfUokTfOC2n2LD9srgIKGjsSRc2', // password
            'address'=> 'A subdivision',
            'city' => 'Pasig',
            'zip' => '1903',
            'birthdate' => '1990-12-11',
            'contact1' => '09127433263',
            'contact2' => '09723695896',
            'remember_token' => Str::random(10),
            ],
            [
            'firstname' => 'Roziel',
            'lastname' => 'Amor',
            'email' => 'rozielamor@gmail.com',
            'password' => '$2y$10$iHrC.wVFHWBcD07lrG5Di.PhrKnfUokTfOC2n2LD9srgIKGjsSRc2', // password
            'address'=> 'B village',
            'city' => 'Manila',
            'zip' => '1928',
            'birthdate' => '2000-12-12',
            'contact1' => '09741235218',
            'contact2' => '0976485369',
            'remember_token' => Str::random(10),
            ],  
            
        ];
        foreach ($users as $user){
            User::create($user);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pet;

class PetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pets = [
            [
            'name' => 'Affenpinscher',
            'description' => 'Affen meaning monkey and Pinscher meaning terrier. In France the Affenpinscher is known as the “diablotin moustachu”—moustached little devil, which also aptly describes it!',
            'age' => '2',
            'image' => 'adopt-1.png',
            ],
            [
            'name' => 'Afhgan Hound',
            'description' => 'The Afghan is built along greyhound-like lines, enabling this dog to execute a double-suspension gallop and run down fleet game.',
            'age' => '2',
            'image' => 'adopt-2.png',
            ],
            [
            'name' => 'Airedale Terrier',
            'description' => 'The Airedale Terrier is a neat, upstanding, long-legged terrier, not exaggerated in any way. This breed has strong round bone and combines strength and agility.',
            'age' => '2',
            'image' => 'adopt-3.png',
            ],
            [
            'name' => 'Akita',
            'description' => 'This is a large and powerful breed, with much substance and heavy bone, and is slightly longer than tall. The Akita’s build reflects its original job of finding big game in deep snow and rugged terrain.',
            'age' => '1',
            'image' => 'adopt-4.png',
            ],
            [
            'name' => 'Alaskan Malamute',
            'description' => 'The Alaskan Malamute is a powerfully built dog of Nordic breed type, developed to haul heavy loads rather than race.',
            'age' => '4',
            'image' => 'adopt-5.png',
            ],
            [
            'name' => 'American Cocker',
            'description' => 'The smallest member of the Sporting Group, the Cocker should be compact and sturdy. Their gait is ground covering, strong, and effortless.',
            'age' => '4.5',
            'image' => 'adopt-6.png',
            ],
            [
            'name' => 'Philippine Askal',
            'description' => 'An Askal dog, also known as an Aspin dog, is a mutt dog, native to the Philippines. There is no true breed of Askal dog, as they are street dogs.',
            'age' => '2.5',
            'image' => 'adopt-7.png',
            ],
            [
            'name' => 'Australian Cattle',
            'description' => 'The Australian Cattle Dog is of moderate build, enabling this breed to combine great endurance with bursts of speed and extreme agility necessary in herding cattle.',
            'age' => '4',
            'image' => 'adopt-8.png',
            ],
            [
            'name' => 'Autralian Kelpie',
            'description' => 'The Australian Cattle Dog is of moderate build, enabling this breed to combine great endurance with bursts of speed and extreme agility necessary in herding cattle.',
            'age' => '3',
            'image' => 'adopt-9.png',
            ],
            [
            'name' => 'Basenji',
            'description' => 'The Basenji’s erect ears help locate game in thick bush and may act as heat dissipaters. This dog’s short coat also aids in dealing with the hot climate of Africa.',
            'age' => '5',
            'image' => 'adopt-10.png',
            ],
            [
            'name' => 'Beagle',
            'description' => 'Form and FunctionThe Beagle should look like a miniature Foxhound, and is solid for the size. The Beagle moderate size enables the ability to follow on foot.',
            'age' => '4.5',
            'image' => 'adopt-11.png',
            ],
            [
            'name' => 'English Setter',
            'description' => 'The English Setter is an elegant and athletic dog with the ability to run tirelessly at a good pace. Their trot is ground covering and effortless, with the head held proudly and a lively tail.',
            'age' => '2',
            'image' => 'adopt-12.png',
            ],
        ];
        foreach ($pets as $pet){
            Pet::create($pet);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\patient;
use Illuminate\Database\Seeder;

class patientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
    * @return void
     */
    public function run()
    {
        $groups = ['A+','A-','B+','B-','AB'];
        for ($i=0; $i <20 ; $i++) {
            patient::create([
                'name'          => 'patient'.$i.' zamana',
                'email'         => 'patient'.$i.'@test.me',
                'phone'         => "+919887712781",
                'gender'        => "Male",
                'address'       => 'sodala'.$i.'',
                'age'       => rand(1,130),
                'bloodgroup' => $groups[rand(0,4)],
                'photo_path'    => 'patient.png',
            ]);
        }
    }
}

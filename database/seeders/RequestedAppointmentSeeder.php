<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RequestedAppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <20 ; $i++) {
            patient::create([
                'name'          => 'sss'.$i.' zamana',
                'email'         => 'sss'.$i.'@test.me',
                'phone'         => '+91'.rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9),
                'doctor'        => rand(1,5),
                'message'       => rand(20,100),
                'address'       => 'sodala'.$i.'',
                'stime'          => now(),
            ]);
        }
    }
}

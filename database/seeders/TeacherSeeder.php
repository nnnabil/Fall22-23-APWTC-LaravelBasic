<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Teacher::factory()->create([
            'name'=> 'Teacher 1',
            'email'=> 'another@email.com',
            'phone'=> '1234',
            'password'=> '1234',
        ]);
    }
}

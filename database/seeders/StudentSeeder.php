<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      for($i=1;$i<=20;$i++){
        Student::create([
            'name'=>fake()->name(),
            'address'=>fake()->address(),
            'mobile_no'=>fake()->numberBetween(10,999999999),
        ]);
      }
    }
}

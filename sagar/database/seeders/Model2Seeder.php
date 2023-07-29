<?php

namespace Database\Seeders;

use App\Models\model2;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class Model2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
      DB::table('model2s')->insert([
        'name'=>'madan',
        'email'=>'nithin@11']);
    }
}

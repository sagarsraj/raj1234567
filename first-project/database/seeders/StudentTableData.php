<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class StudentTableData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     DB::table('data')->insert([
        'name'=>'sunny',
        'phone'=>'34567',
        'address'=>'japan'
     ]);
    }
}

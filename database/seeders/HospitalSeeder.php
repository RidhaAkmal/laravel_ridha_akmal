<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hospital;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hospital::create([
            'name'=>'RSUD Ujung Berung',
            'address'=>'Jl. Rumah Sakit No.22 Bandung',
            'email'=>'NULL',
            'telp'=>'(022) 7800017'
        ]);
        Hospital::create([
            'name'=>'RSKIA Kota Bandung',
            'email'=>'NULL',
            'address'=>'Jl. Astana Anyar No.224 Bandung',
            'telp'=>'NULL'
        ]);
        Hospital::create([
            'name'=>'RSUP Hasan Sadikin',
            'email'=>'NULL',
            'address'=>'Jl. Pasteur No.38 Bandung',
            'telp'=>'(022) 2034953'
        ]);
    }
}

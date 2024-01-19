<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->insert([
            'identity_card' => '12938475',
            'name'=>'satya',
            'birth_date' => '2001-09-06',
            'gender' => 'Laki-laki',
            'phone' => '0823456',
            'email' => 'satya@gmail.com',
            'address' => 'marga',
        ]);
        DB::table('visitations')->insert([
            'id_patient'=>'1',
            'queue'=>'1',
            'description'=>'Pemeriksaan Umum',
        ]);
        DB::table('users')->insert([
            'name' => 'satya',
            'email'=>'satyaa@gmail.com',
            'password'=>'12345678',
            'birth_date' => '2001-09-06',
            'gender' => 'Laki-laki',
            'phone' => '0823456',
            'address' => 'marga',
            'level' => 'Petugas',
        ]);
        DB::table('record')->insert([
            'id_patient' => '1',
            'tension'=>'80',
            'body_temp'=>'36',
            'allergic' => 'tidak ada',
            'anamnesa' => 'batuk pilek',
            'diagnosis' => 'demam',
            'description' => 'kurangnya istirahat',
        ]);
    }
}

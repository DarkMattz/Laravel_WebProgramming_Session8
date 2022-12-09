<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->insert([
            [
                'nim' => '2440052476',
                'nama' => 'Febryan Grady',
                'jenis_kelamin' => 'Laki-laki',
                'jurusan' => 'Computer Science',
                'alamat' => 'Jakarta'
            ],
            [

                'nim' => '2440052476',
                'nama' => 'Febryan Grady',
                'jenis_kelamin' => 'Laki-laki',
                'jurusan' => 'Computer Science',
                'alamat' => 'Jakarta'
            ],
            [

                'nim' => '2440052476',
                'nama' => 'Febryan Grady',
                'jenis_kelamin' => 'Laki-laki',
                'jurusan' => 'Computer Science',
                'alamat' => 'Jakarta'
            ],
            [

                'nim' => '2440052476',
                'nama' => 'Febryan Grady',
                'jenis_kelamin' => 'Laki-laki',
                'jurusan' => 'Computer Science',
                'alamat' => 'Jakarta'
            ]
        ]);
    }
}

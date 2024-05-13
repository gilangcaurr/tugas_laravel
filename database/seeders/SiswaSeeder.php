<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        siswa::insert(
            [
                'nama' => 'zapnunumberone', 
                'kelas' => 'XI RPL 2', 
                'jenis_kelamin' => 0,
                'alamat'=> 'jl. sadang'
            ]
            );
            siswa::insert(
                [
                    'nama' => 'rizky', 
                    'kelas' => 'XI RPL 2', 
                    'jenis_kelamin' => 0,
                    'alamat'=> 'jl. pro player'
                ]
                ); 
                siswa::insert(
                    [
                        'nama' => 'faizal', 
                        'kelas' => 'XI RPL 2', 
                        'jenis_kelamin' => 0,
                        'alamat'=> 'jl. cibaduyut'
                    ]
                    );
    }
}

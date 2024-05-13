<?php

namespace Database\Seeders;

use App\Models\Sekolah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        sekolah::insert(
            [
                'nama' => 'SMK ASSALAAM BANDUNG', 
                'email' => 'assalaam@gmail.com', 
                'telp' => 1895221211,
                'alamat'=> 'jl. situtarate',
                'status'=> 'Aktif'
            ]
            ); 
            sekolah::insert(
            [
               'nama' => 'SMA 10 BANDUNG', 
               'email' => 'sepuluh@gmail.com', 
               'telp' => 1895221212,
               'alamat'=> 'jl. cikutra',
               'status'=> 'Aktif'
           ]
           ); 
           sekolah::insert(
           [
              'nama' => 'SMA 3 BANDUNG', 
              'email' => 'tiga@gmail.com', 
              'telp' => 1895221213,
              'alamat'=> 'jl. belitungmerdeka',
              'status'=> 'Aktif'
           ]
           ); 
          sekolah::insert(
           [
              'nama' => 'SMA 5 BANDUNG', 
              'email' => 'lima@gmail.com', 
              'telp' => 1895221214,
              'alamat'=> 'jl. belitung',
              'status'=> 'Aktif'
           ]
           ); 
           sekolah::insert(
           [
              'nama' => 'SMA 22 BANDUNG', 
              'email' => 'duadua@gmail.com', 
              'telp' => 1895221215,
              'alamat'=> 'jl. rajamantri',
              'status'=> 'Aktif'
           ]
           ); 
           sekolah::insert(
           [
              'nama' => 'SMK KATAPANG', 
              'email' => 'katapang@gmail.com', 
              'telp' => 1895221216,
              'alamat'=> 'jl. sulaiman',
              'status'=> 'Aktif' 
           ]
           ); 
           sekolah::insert(
           [
             'nama' => 'SMK MARHAS', 
             'email' => 'marhas@gmail.com', 
             'telp' => 1895221217,
             'alamat'=> 'jl. sulaiman',
             'status'=> 'Aktif'
           ]
           ); 
           sekolah::insert(
           [
             'nama' => 'SMA 1 BANDUNG', 
             'email' => 'satu@gmail.com', 
             'telp' => 1895221218,
             'alamat'=> 'jl. dago',
             'status'=> 'Tidak'
           ]
           ); 
           sekolah::insert(
           [
            'nama' => 'SMA ANGKASA', 
            'email' => 'angkasa@gmail.com', 
            'telp' => 1895221219,
            'alamat'=> 'jl. sulaiman',
            'status'=> 'Tidak akktif'
           ]
           ); 
          sekolah::insert(
           [
            'nama' => 'SMK MADANI', 
            'email' => 'madani@gmail.com', 
            'telp' => 1895221220,
            'alamat'=> 'jl. bubat',
            'status'=> 'Tidak aktif'
           ]
           );
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaryawanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('karyawan')->truncate();
        
        DB::table('karyawan')->insert([
            'NIP' => '00001',
            'NIK' => '123456789',
            'nama_lengkap' => 'Amiruddin',
            'tempat_lahir' => 'Balikpapan',
            'tanggal_lahir' => '1988-05-09 00:00:00.000',
            'jenis_kelamin' => 'Laki - Laki',
            'alamat' => 'Jl. BDS II Blok H No. 06',
            'no_telp' => '0812 - 1234 - 4321',
            'email' => 'amiruddin@gmail.com',
            'hobi' => 'Mancing',
            'status_pernikahan' => 'Menikah',
            'jabatan' => 'Direktur',
            'status_pegawai' => 'Tetap',
        ]);

        DB::table('karyawan')->insert([
            'NIP' => '00002',
            'NIK' => '123456788',
            'nama_lengkap' => 'Citra Maharani',
            'tempat_lahir' => 'Balikpapan',
            'tanggal_lahir' => '1990-08-03 00:00:00.000',
            'jenis_kelamin' => 'Perempuan',
            'alamat' => 'Jl. BDS II Blok H No. 06',
            'no_telp' => '0812 - 1234 - 4322',
            'email' => 'citramaharani@gmail.com',
            'hobi' => 'Traveling',
            'status_pernikahan' => 'Menikah',
            'jabatan' => 'Wakil Direktur',
            'status_pegawai' => 'Tetap',
        ]);

        DB::table('karyawan')->insert([
            'NIP' => '00003',
            'NIK' => '123456787',
            'nama_lengkap' => 'Bram',
            'tempat_lahir' => 'Balikpapan',
            'tanggal_lahir' => '1995-01-23 00:00:00.000',
            'jenis_kelamin' => 'Laki - Laki',
            'alamat' => 'Jl. BDS II Blok H No. 10',
            'no_telp' => '0812 - 1234 - 4321',
            'email' => 'bram@gmail.com',
            'hobi' => 'Basketball',
            'status_pernikahan' => 'Menikah',
            'jabatan' => 'Manager',
            'status_pegawai' => 'Tetap',
        ]);

        DB::table('karyawan')->insert([
            'NIP' => '00004',
            'NIK' => '123456786',
            'nama_lengkap' => 'Agus Salim',
            'tempat_lahir' => 'Balikpapan',
            'tanggal_lahir' => '1987-05-28 00:00:00.000',
            'jenis_kelamin' => 'Laki - Laki',
            'alamat' => 'Jl. BDS II Blok G No. 01',
            'no_telp' => '0823 - 1234 - 4321',
            'email' => 'agussalim@gmail.com',
            'hobi' => 'Futsal',
            'status_pernikahan' => 'Belum Menikah',
            'jabatan' => 'Operator',
            'status_pegawai' => 'Kontrak',
        ]);

        DB::table('karyawan')->insert([
            'NIP' => '00005',
            'NIK' => '123456744',
            'nama_lengkap' => 'Ully Permata Sari',
            'tempat_lahir' => 'Samarinda',
            'tanggal_lahir' => '1999-09-06 00:00:00.000',
            'jenis_kelamin' => 'Perempuan',
            'alamat' => 'Jl. BDS I Blok A3 No. 08',
            'no_telp' => '0823 - 1234 - 3333',
            'email' => 'ullypermatasari@gmail.com',
            'hobi' => 'Shopping',
            'status_pernikahan' => 'Belum Menikah',
            'jabatan' => 'Administrator',
            'status_pegawai' => 'Kontrak',
        ]);
    }
}

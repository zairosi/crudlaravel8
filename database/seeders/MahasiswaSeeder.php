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
        DB::table('mahasiswas') -> insert([
            'nama' => 'Ahmad Zairosi',
            'jenis_kelamin' => 'L',
            'tempat_lahir' => 'Sumenep',
            'tanggal_lahir' => '2002-04-01',
            'alamat' => 'Jl. Raya Gapura Beraji Gapura Sumenep',
            'telepon' => '08857847912',
        ]);
    }
}

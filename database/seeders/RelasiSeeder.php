<?php

namespace Database\Seeders;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Wali;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();

        // Siapkan Seeder Dosen Disini
        DB::table('dosens')->delete();
        $dosen = Dosen::create(array(
            'nama' => 'Yulianto',
            'nipd' => '1234567890'));
        # Kemudian tambahkan nilai id_dosen ditiap record mahasiswa

        // Seeder Mahasiswa
        #Mahasiswa Pertama bernama Noviyanto Rachmadi. Dengan nrp 1015015072.
        $novay = Mahasiswa::create(array(
            'nama' => 'Noviyanto Rachmadi',
            'nrp' => '1015015072',
            'id_dosen' => $dosen->id));

        $dije = Mahasiswa::create(array(
            'nama' => 'Djaffar',
            'nrp' => '1015015088',
            'id_dosen' => $dosen->id));

        $ayu = Mahasiswa::create(array(
            'nama' => 'Puji Rahayu',
            'nrp' => '1015015078',
            'id_dosen' => $dosen->id));

        // Seeder Wali
        # Ciptakan wali si $novay
        Wali::create(array(
            'nama' => 'Achmad S',
            'id_mahasiswa' => $novay->id,
        ));

        # Ciptakan wali si $dije
        Wali::create(array(
            'nama' => 'Entahlah',
            'id_mahasiswa' => $dije->id,
        ));

        # Ciptakan wali si $ayu
        Wali::create(array(
            'nama' => 'Arianto',
            'id_mahasiswa' => $ayu->id,
        ));

    }
}
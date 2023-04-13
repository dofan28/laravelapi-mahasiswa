<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;

    # Tentukan nama tabel terkait
    //protected $table = 'mahasiswas'; // jika aturan penamaan model dan migration singular dan plural maka code ini tidak perlu digunakan

    # MASS ASSIGNMENT
    # Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
    protected $fillable = ['nama', 'nrp', 'id_dosen'];

    /*
	 * Relasi One-to-One
	 * =================
	 * Buat function bernama wali(), dimana model 'Mahasiswa' memiliki relasi One-to-One
	 * terhadap model 'Wali' melalui 'id_mahasiswa'
	 */

    public function wali()
    {
        return $this->hasOne('App\Models\Wali', 'id_mahasiswa');
    }

    /*
     * Relasi One-to-Many
     * =================
     */

    public function dosen()
    {
        // data model Mahasiswa dimiliki oleh model Dosen melalui fk 'id_dosen'
        return $this->belongsTo('App\Models\Dosen', 'id_dosen');
    }
}

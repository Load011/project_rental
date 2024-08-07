<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supir extends Model
{
    use HasFactory;

    protected $table = 'm_supir';

    protected $fillable = [
        'nama_supir',
        'no_supir',
        'no_tlp',
        'no_ktp',
        'no_sim',
        'alamat_supir'
    ];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_supir');
    }
}

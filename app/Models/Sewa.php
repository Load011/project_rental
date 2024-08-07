<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    use HasFactory;

    protected $table = 't_rental_daily';

    protected $fillable = [
        'id_mobil',
        'nama_penyewa',
        'no_hp',
        'alamat_penyewa',
        'email_penyewa',
        'lama_sewa',
        'harga_penyewaan'
    ];

    public function mobil()
    {
        return $this->belongsTo(MobilRental::class, 'id_mobil');
    }
}

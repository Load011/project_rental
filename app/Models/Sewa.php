<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    use HasFactory;

    protected $table = 't_rental_daily';

    protected $fillable = [
        'mobil_id',
        'service_id',
        'nama_penyewa',
        'no_hp',
        'alamat_penyewa',
        'email_penyewa',
        'lama_sewa',
        'penjemputan'
    ];

    public function mobil()
    {
        return $this->belongsTo(MobilRental::class, 'mobil_id');
    }

    public function service(){
        return $this->belongsTo(ServisRental::class, 'service_id');
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'pesanan_id');
    }
}

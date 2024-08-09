<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 't_transaksi';

    protected $fillable = ['pemesanan_id', 'supir_id', 'upah_supir'];

    public function sewa()
    {
        return $this->belongsTo(Sewa::class, 'pemesanan_id');
    }

    public function supir()
    {
        return $this->belongsTo(Supir::class, 'supir_id');
    }
}
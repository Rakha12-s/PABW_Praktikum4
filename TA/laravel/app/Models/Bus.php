<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $table = 'buses';
    protected $fillable = ['rute_id', 'nomor_plat', 'nama_bus', 'kapasitas'];

    // Relasi: Satu bus milik satu rute
    public function rute()
    {
        return $this->belongsTo(Rute::class, 'rute_id');
    }
}
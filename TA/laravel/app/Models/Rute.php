<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rute extends Model
{
    protected $table = 'rutes';
    protected $fillable = ['nama_rute', 'asal', 'tujuan', 'tarif'];

    // Relasi: Satu rute memiliki banyak bus
    public function buses()
    {
        return $this->hasMany(Bus::class, 'rute_id');
    }
}
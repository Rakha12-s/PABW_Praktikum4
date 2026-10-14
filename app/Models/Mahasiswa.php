<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    // kolom yang dapat diisi
    protected $fillable = ['nama', 'email', 'jurusan', 'umur'];
}
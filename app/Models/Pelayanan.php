<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelayanan extends Model
{
    protected $table = 'pelayanan'; // Menentukan nama tabel secara eksplisit

    protected $fillable = [
        'jenis_pelayanan',
        'tanggal',
        'jam',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    use HasFactory;

    protected $table = "m_tarif";
    protected $fillable = [
        'jenjang',
        'tipe',
        'jumlah'
    ];
}

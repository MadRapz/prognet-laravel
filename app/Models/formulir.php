<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formulir extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nim',
        'status',
        'program_studi',
        'hobi',
        'email',
        'alamat',
        'no_hp',
    ];
}

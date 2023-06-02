<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class design extends Model
{
    protected $table = 'designs';
    protected $primaryKey = 'id_design';
    use HasFactory;

    protected $fillable = [
        'nama_design',
        'deskripsi_design',
        'foto_design',
    ];
}

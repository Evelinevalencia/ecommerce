<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengeluaran extends Model
{
    protected $table = 'pengeluarans';
    protected $primaryKey = 'id_pengeluaran';

    protected $fillable = [
        'judul_pengeluaran',
        'deskripsi_pengeluaran',
        'total_pengeluaran',
    ];

    public function user()
    {
        return $this->belongsTo(user::class);
    }
    use HasFactory;
}

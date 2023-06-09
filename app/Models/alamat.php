<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alamat extends Model
{
    use HasFactory;

    protected $table = 'alamats';
    protected $primaryKey = 'id_alamat';

    protected $fillable = [
        'label',
        'alamat',
        'kodepos',
        'notelp',
        'notes',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

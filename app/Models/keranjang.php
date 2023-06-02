<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keranjang extends Model
{
    protected $table = 'keranjangs';
    protected $primaryKey = 'id_keranjang';
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function product(){
        return $this->belongsTo(product::class);
    }
}

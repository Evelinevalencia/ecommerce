<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id_product';

    protected $fillable = [
        'nama_product',
        'deskripsi_product',
        'harga_product',
    ];

    public function design()
    {
        return $this->belongsTo(design::class);
    }

    public function line()
    {
    	return $this->belongsToMany('App\Models\transaksi');
    }
    use HasFactory;
}

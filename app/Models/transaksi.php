<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table = 'transaksis';
    protected $primaryKey = 'id_transaksi';

    public function line()
    {
    	return $this->belongsToMany('App\Models\product');
    }
    use HasFactory;
}

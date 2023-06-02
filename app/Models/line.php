<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class line extends Model
{
    protected $table = 'lines';
    protected $primaryKey = 'id_line';
    use HasFactory;

    
}

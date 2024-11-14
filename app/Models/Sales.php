<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;
    
    protected $table = 'Sales';
    protected $primaryKey = 'id_sale';
    protected $fillable = [
        'date',
        'total',
        'user',
    ];
}

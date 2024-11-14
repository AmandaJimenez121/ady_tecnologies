<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    
    protected $table = 'Products';
    protected $primaryKey = 'id_product';
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'category',
        'suppliers',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $table = 'subcategory';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre', 'nombre_en', 'categoria', 'orden', 'estado', 'slug'];
    protected $hidden = [
        'created_at', 'updated_at'
    ];

    // public function category(){
    //     return $this->belongsTo(Category::class);
    // }
    
    // public function products(){
    //     return $this->hasMany(Product::class);
    // }
}

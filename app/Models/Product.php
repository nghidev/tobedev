<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id', 
        'code', 
        'name', 
        'description', 
        'detail', 
        'real_price', 
        'sale_price', 
        'feature_image', 
        'inventory_number',
        'category_id'
    ];

    public function getListGallery()
    {
        return $this->hasMany(ProductGallery::class);
    }
    
    public function getCategory()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function getListOrderDetail()
    {
        return $this->hasMany(OrderDetail::class);
    }
}

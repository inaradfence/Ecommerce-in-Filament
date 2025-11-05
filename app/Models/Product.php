<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'brand_id',
        'name',
        'slug',
        'image',
        'is_active',
        'description',
        'price',
        'is_stock',
        'on_sale',
        'is_featured'
    ];

    public function category()
    {
        return $this->belongsTO(Category::class);
    }
    public function brand()
    {
        return $this->belongsTO(Brand::class);
    }
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }


}

<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'category_id',
        'subcategory_id',
        'product_name',
        'product_brand',
        'price',
        'sale_price',
        'product_description',
        'product_image1',
        'product_image2',
        'product_image3',
        'shipping_charge',
        'product_availability',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

}
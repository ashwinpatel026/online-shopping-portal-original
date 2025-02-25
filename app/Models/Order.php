<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'product_id', 'payment_method', 'order_status'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
    
}
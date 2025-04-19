<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'sku',
        'description',
        'selling_price',
        'vendor_price',
        'in_stock',
        'category_id',
        'brand_id',
        'vendor_id',
        'image_collection_id',
        'status',
        'added_by',
        'updated_by',
        'deleted_by',
    ];
}

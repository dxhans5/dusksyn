<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
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

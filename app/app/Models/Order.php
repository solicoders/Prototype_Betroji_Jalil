<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'description',
        'quantity',
        'productId',
    ];
    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
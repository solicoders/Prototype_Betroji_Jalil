<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'description',
        'quantity',
        'prix',
    ];
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
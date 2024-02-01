<?php

namespace App\Repositories;

use App\Models\Order;
use App\Models\Product;
use App\Repositories\BaseRepository;

class OrderRepository extends BaseRepository {
    public function __construct(Order $order){
        parent::__construct($order);
    }
    
    public function searchOrder($search){
        return Order::join('products','orders.productId','=','products.id')->where('nom', 'like', '%' . $search . '%')
        ->orWhere('city','like','%'. $search . '%')->orWhere('nom','like','%'. $search . '%')->paginate(3);
    }
}
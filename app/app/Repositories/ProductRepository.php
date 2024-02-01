<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\BaseRepository;

class ProductRepository extends BaseRepository {
    public function __construct(Product $product){
        parent::__construct($product);
    }
    public function filterOrderByProduct(){
        return Product::all();
    }
}
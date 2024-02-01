<?php

namespace App\Http\Controllers\JalilControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\ProductRepository;
use App\Models\Project;

class ProductController extends Controller
{
    protected $productRepository;
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index(Request $request)
    {
        $products = $this->productRepository->getAll();
        $productData = $this->productRepository->filterOrderByProduct();
        return view('home', compact('products' , 'productData'))->render();
    }
}
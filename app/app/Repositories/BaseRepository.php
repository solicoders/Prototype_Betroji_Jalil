<?php

namespace App\Repositories;

use illuminate\Database\Eloquent\Model;

abstract class BaseRepository {
    protected $model ;
    public function __construct(Model $model){
         $this->model = $model;
    }
    public function getAll(){
        return $this->model->paginate(4);
    }
    public function show($id){
        return $this->model->where('productId' , $id)->paginate(3);
     }
     public function create(array $validatedData){
         return  $this->model->create($validatedData);
     }
     public function edit($id){
         $order = $this->model->findOrFail($id);
         return $order;
     }
     public function update(array $validatedData , $id){
         $order = $this->model->findOrFail($id);
         $order->update($validatedData);
         return $order;
     }
     public function destroy($id){
         $order = $this->model->findOrFail($id);
         $productId = $order->productId;
         $order->delete();
         return $productId;
     }
}
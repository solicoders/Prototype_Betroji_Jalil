<?php

namespace App\Http\Controllers\JalilControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\OrderRepository;
use App\Repositories\ProductRepository;

class OrderController extends Controller
{
    protected $ordersRepository;
    protected $productsRepository;
    public function __construct(OrderRepository $orderRepository , ProductRepository $productRepository){
        $this->ordersRepository = $orderRepository;
        $this->productsRepository = $productRepository;
    }
    public function index(Request $request , $id){
        $order = $this->ordersRepository->show($id);
        $productData = $this->productsRepository->filterOrderByProduct();
        $productId = $id;
        return view('order',compact('order' , 'productId'))->render();
    }
    public function create(){
        $projectData = $this->productsRepository->filterOrderByProduct();
        return view('add' , compact('projectData'));
    }
    public function store(AddRequest $request){
        $validatedData = $request->validated();
        $this->ordersRepository->store($validatedData);
        return redirect()->route('add.task')->with('success' , 'tache a été ajouter avec succés');
    }
    public function edit($id){
        $task = $this->ordersRepository->edit($id);
        $projectData = $this->productsRepository->filterOrderByProduct();
        return view('edit' , compact('task' , 'projectData'));
    }
    public function update(UpdateRequest $request , $id){
        $validatedData = $request->validated();
        $task = $this->ordersRepository->update($validatedData , $id);
        return redirect()->route('edit.task' , ['id' => $task->id])->with('success' , 'tache a été modifier avec succés');
    }
    public function destroy($id){
       $tasks = $this->ordersRepository->destroy($id);
        return redirect()->route('tasks' , ["id" => $tasks])->with('success' , 'tache a été supprimer avec succés');;
    }
}
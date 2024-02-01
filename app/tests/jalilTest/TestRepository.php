<?php

namespace Tests\jalilTest;

use Tests\TestCase;
use App\Models\Product;
use App\Models\Order;
use App\Repositories\OrderRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TestRepository extends TestCase
{
    use DatabaseTransactions;


    protected $orderRepository;

    public function setUp(): void
    {
        parent::setUp();
        $this->orderRepository = app(OrderRepository::class);
    }


    public function test_method_index(): void
    {
        $orders = $this->orderRepository->index();

        // Assert that $orders is not empty
        $this->assertNotEmpty($orders);
    }


    public function test_method_store_order(): void
    {
        $page = Product::first();

        $validatedData = [
            'order' => 'This order for test',
            'reference' => 'Sample reference',
            'page_id' => $page->id,
        ];

        $this->orderRepository->store($validatedData);

        $this->assertDatabaseHas('orders', [
            'order' => 'This order for test'
        ]);

    }

    public function test_method_edit_order(): void
    {
        $order = Order::first();

        $response = $this->orderRepository->edit($order);

        // Assert that the response is not null
        $this->assertNotNull($response);

        // Assert that the response contains the order instance
        $this->assertInstanceOf(Order::class, $response);
    }



    public function test_method_update_order(): void
    {

        $order = Order::first();
        $product = Product::first();

        $validatedData = [
            'nom' => 'This order updated for test',
            'reference' => 'Sample reference',
            'productId' => $product->id,
        ];


        $updatedorder = $this->orderRepository->update($validatedData, $order);

        $this->assertInstanceOf(Order::class, $updatedorder);

        $this->assertDatabaseHas('orders', [
            'order' => 'This order updated for test'
        ]);
    }




    public function test_method_destroy_order(): void
    {
        $order = Order::first();

        // Call the destroy method
        $this->orderRepository->destroy($order);

        // Assert that the order no longer exists in the database
        $this->assertDatabaseMissing('orders', [
            'id' => $order->id,
        ]);
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Facades\DB;


class OrderController extends Controller
{

    public function index()
    {
        $orders = Order::with('items.product')->get(); // грузим заказы вместе с товарами
        return view('orders.index', compact('orders'));
    }

    // Размещение заказа для конкретного продукта
    public function placeOrder(Request $request, Product $product)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
            'customer_name' => 'nullable|string|max:255',
            'customer_email' => 'nullable|email|max:255',
        ]);

        $quantity = $request->input('quantity');

        // Проверяем наличие товара
        if ($quantity > $product->stock) {
            return redirect()->back()->with('error', 'Недостаточно товара на складе!');
        }

        DB::transaction(function () use ($product, $quantity, $request) {
            // Создаём заказ
            $order = Order::create([
                'customer_name' => $request->input('customer_name'),
                'customer_email' => $request->input('customer_email'),
                'total' => $product->price * $quantity,
            ]);

            // Создаём запись в order_items
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $product->id,
                'quantity' => $quantity,
                'price' => $product->price,
            ]);

            // Уменьшаем количество товара на складе
            $product->decrement('stock', $quantity);
        });

        return redirect()->back()->with('success', 'Заказ успешно создан!');
    }
}

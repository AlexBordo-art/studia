<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;  // Исправлено здесь

class OrderController extends Controller
{
    // Отображение списка всех заказов
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', ['orders' => $orders]);
    }

    // Создание нового заказа
    public function create()
    {
        return view('orders.create');
    }

    // Сохранение нового заказа
    public function store(Request $request)
    {
        $order = new Order();
        $order->clientId = $request->clientId;
        $order->serviceId = $request->serviceId;
        $order->status = $request->status;
        $order->orderDate = $request->orderDate;
        $order->save();

        return redirect('/orders');
    }

    // Отображение конкретного заказа
    public function show($id)
    {
        $order = Order::find($id);
        return view('orders.show', ['order' => $order]);
    }

    // Редактирование заказа
    public function edit($id)
    {
        $order = Order::find($id);
        return view('orders.edit', ['order' => $order]);
    }

    // Обновление заказа
    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->clientId = $request->clientId;
        $order->serviceId = $request->serviceId;
        $order->status = $request->status;
        $order->orderDate = $request->orderDate;
        $order->save();

        return redirect('/orders');
    }

    // Удаление заказа
    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();

        return redirect('/orders');
    }
}

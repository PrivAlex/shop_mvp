@extends('layouts.app')

@section('content')
    <h1>Список заказов</h1>

    @if($orders->isEmpty())
        <p>Заказов пока нет.</p>
    @else
        @foreach($orders as $order)
            <div style="border:1px solid #ccc; padding:1rem; margin-bottom:1rem; border-radius:5px; background:#fefefe;">
                <h3>Заказ #{{ $order->id }} — {{ $order->created_at->format('d.m.Y H:i') }}</h3>
                <p><strong>Имя клиента:</strong> {{ $order->customer_name ?? 'Не указано' }}</p>
                <p><strong>Email:</strong> {{ $order->customer_email ?? 'Не указано' }}</p>
                <p><strong>Сумма:</strong> {{ $order->total }}₽</p>

                <h4>Товары:</h4>
                <ul>
                    @foreach($order->items as $item)
                        <li>
                            {{ $item->product->name }} — {{ $item->quantity }} шт. × {{ $item->price }}₽ = {{ $item->quantity * $item->price }}₽
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    @endif
@endsection

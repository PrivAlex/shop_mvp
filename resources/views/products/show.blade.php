@extends('layouts.app')

@section('content')
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p>Цена: {{ $product->price }}₽</p>
    <p>В наличии: {{ $product->stock }}</p>

    <form action="{{ route('order.place', $product->id) }}" method="POST">
        @csrf
        <label>Количество:
            <input type="number" name="quantity" value="1" min="1" max="{{ $product->stock }}">
        </label>
        <label>Имя покупателя:
            <input type="text" name="customer_name">
        </label>
        <label>Email:
            <input type="email" name="customer_email">
        </label>
        <button type="submit">Купить</button>
    </form>

    <a href="{{ url('/products') }}">← Назад к списку</a>
@endsection

@extends('layouts.app')

@section('content')
    <h1>Список товаров</h1>

    <div style="display: flex; flex-wrap: wrap; gap: 1rem;">
        @foreach($products as $product)
            <div style="border: 1px solid #ccc; padding: 1rem; width: 250px; background: #fefefe; border-radius: 5px;">
                <h3>{{ $product->name }}</h3>
                <p>{{ $product->description }}</p>
                <p>Цена: {{ $product->price }}₽</p>
                <p>В наличии: {{ $product->stock }}</p>
                <a href="{{ url('/products/'.$product->id) }}" style="display: inline-block; margin-top: 0.5rem; padding: 0.5rem 1rem; background: #333; color: #fff; text-decoration: none; border-radius: 3px;">Посмотреть</a>
            </div>
        @endforeach
    </div>
@endsection

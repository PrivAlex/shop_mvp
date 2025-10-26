@extends('adminlte::page')

@section('title', 'Просмотр товара')

@section('content_header')
    <h1>Просмотр товара</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>{{ $product->name }}</h3>
            <p><strong>Описание:</strong> {{ $product->description }}</p>
            <p><strong>Цена:</strong> {{ $product->price }}</p>
            <p><strong>Количество:</strong> {{ $product->stock }}</p>
            <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Назад</a>
        </div>
    </div>
@stop

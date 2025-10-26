@extends('adminlte::page')

@section('title', 'Добавить товар')

@section('content_header')
    <h1>Добавить товар</h1>
@stop

@section('content')
    <form action="{{ route('admin.products.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Название:</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Описание:</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>Цена:</label>
            <input type="number" name="price" class="form-control" required step="0.01">
        </div>

        <div class="mb-3">
            <label>Количество:</label>
            <input type="number" name="stock" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Сохранить</button>
        <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Назад</a>
    </form>
@stop

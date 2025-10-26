<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Магазин</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f8f8f8;
        }
        header {
            background: #333;
            color: #fff;
            padding: 1rem;
        }
        header a {
            color: #fff;
            text-decoration: none;
            margin-right: 1rem;
        }
        main {
            padding: 2rem;
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .flash-success {
            background: #d4edda;
            color: #155724;
            padding: 0.5rem 1rem;
            margin-bottom: 1rem;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
        }
        .flash-error {
            background: #f8d7da;
            color: #721c24;
            padding: 0.5rem 1rem;
            margin-bottom: 1rem;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
        }
        form input, form button {
            margin: 0.5rem 0;
            padding: 0.5rem;
        }
        form button {
            cursor: pointer;
        }
        a.back-link {
            display: inline-block;
            margin-top: 1rem;
            text-decoration: none;
            color: #333;
        }
    </style>
</head>
<body>
<header>
    <a href="/products">Товары</a>
    <a href="/orders">Заказы</a>
</header>

<main>
    {{-- Flash-сообщения --}}
    @if(session('success'))
        <div class="flash-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="flash-error">{{ session('error') }}</div>
    @endif

    {{-- Контент страницы --}}
    @yield('content')
</main>
</body>
</html>

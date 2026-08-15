<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Music Player App' }}</title>

    <style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family:Arial, Helvetica, sans-serif;
    }

    body{
        min-height:100vh;
        display:flex;
        justify-content:center;
        align-items:center;
        gap: 50px;
        background:linear-gradient(135deg,#141e30,#243b55);
        padding: 100px 40px 40px;
        flex-wrap: wrap;
        color: white;
    }

    .floating-nav {
        position: fixed;
        top: 25px;
        left: 50%;
        transform: translateX(-50%);
        background: #1f2937;
        padding: 10px 25px;
        border-radius: 50px;
        display: flex;
        gap: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.4);
        z-index: 1000;
        border: 1px solid rgba(255,255,255,0.05);
    }

    .nav-item {
        color: #9ca3af;
        text-decoration: none;
        font-size: 20px;
        padding: 8px;
        border-radius: 50%;
        transition: .3s;
    }

    .nav-item:hover,
    .nav-item.active {
        color: white;
        background: #7f5af0;
        transform: scale(1.1);
    }

    .card {
        background: #1f2937;
        padding: 1.5rem;
        border-radius: 15px;
        text-align: center;
        max-width: 400px;
        margin: 20px auto;
        color: white;
    }
    </style>
</head>
<body>

    <nav class="floating-nav">
        <a href="/" class="nav-item {{ request()->is('/') ? 'active' : '' }}" title="Player">🎵</a>
        <a href="/about" class="nav-item {{ request()->is('about') ? 'active' : '' }}" title="About">👤</a>
        <a href="/contact" class="nav-item {{ request()->is('contact') ? 'active' : '' }}" title="Contact">✉️</a>
    </nav>

    {{ $slot }}

</body>
</html>
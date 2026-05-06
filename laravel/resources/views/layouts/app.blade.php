<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Philippines') — Discover the Pearl of the Orient</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', sans-serif; background: #f9f6f0; color: #2d2d2d; }

        nav {
            background: #0038a8;
            padding: 0 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 0.5rem;
        }
        nav .brand {
            color: #fcd116;
            font-size: 1.4rem;
            font-weight: 700;
            text-decoration: none;
            padding: 1rem 0;
        }
        nav ul {
            list-style: none;
            display: flex;
            flex-wrap: wrap;
            gap: 0.25rem;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 0.85rem;
            padding: 0.4rem 0.75rem;
            border-radius: 4px;
            transition: background 0.2s;
        }
        nav ul li a:hover { background: rgba(255,255,255,0.15); }
        nav ul li a.active { background: #fcd116; color: #0038a8; font-weight: 600; }

        .hero {
            background: linear-gradient(135deg, #0038a8 0%, #ce1126 100%);
            color: #fff;
            padding: 4rem 2rem;
            text-align: center;
        }
        .hero h1 { font-size: 2.5rem; margin-bottom: 0.75rem; }
        .hero p { font-size: 1.1rem; opacity: 0.9; max-width: 600px; margin: 0 auto; }

        .container { max-width: 1100px; margin: 0 auto; padding: 2.5rem 1.5rem; }

        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }
        .card {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            transition: transform 0.2s;
        }
        .card:hover { transform: translateY(-3px); }
        .card-img {
            width: 100%;
            height: 160px;
            object-fit: cover;
            background: #0038a8;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
        }
        .card-body { padding: 1.25rem; }
        .card-body h3 { font-size: 1.1rem; margin-bottom: 0.5rem; color: #0038a8; }
        .card-body p { font-size: 0.9rem; color: #555; line-height: 1.6; }

        .section-title {
            font-size: 1.75rem;
            color: #0038a8;
            margin-bottom: 0.5rem;
            border-left: 4px solid #fcd116;
            padding-left: 0.75rem;
        }
        .section-sub { color: #666; font-size: 1rem; margin-bottom: 1.5rem; }

        .flag-stripe {
            height: 6px;
            background: linear-gradient(to right, #0038a8 50%, #ce1126 50%);
        }

        footer {
            background: #111;
            color: #aaa;
            text-align: center;
            padding: 1.5rem;
            font-size: 0.85rem;
            margin-top: 3rem;
        }
        footer span { color: #fcd116; }

        .badge {
            display: inline-block;
            background: #fcd116;
            color: #0038a8;
            font-size: 0.75rem;
            font-weight: 700;
            padding: 2px 10px;
            border-radius: 20px;
            margin-bottom: 0.5rem;
        }

        .info-list { list-style: none; margin-top: 1rem; }
        .info-list li {
            padding: 0.6rem 0;
            border-bottom: 1px solid #eee;
            font-size: 0.95rem;
            display: flex;
            gap: 0.5rem;
        }
        .info-list li strong { min-width: 140px; color: #0038a8; }

        .btn {
            display: inline-block;
            background: #0038a8;
            color: #fff;
            padding: 0.6rem 1.4rem;
            border-radius: 6px;
            text-decoration: none;
            font-size: 0.9rem;
            margin-top: 1rem;
            transition: background 0.2s;
        }
        .btn:hover { background: #ce1126; }
    </style>
</head>
<body>

<nav>
    <a href="{{ route('home') }}" class="brand">🇵🇭 Pilipinas</a>
    <ul>
        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ route('history') }}" class="{{ request()->routeIs('history') ? 'active' : '' }}">History</a></li>
        <li><a href="{{ route('islands') }}" class="{{ request()->routeIs('islands') ? 'active' : '' }}">Islands</a></li>
        <li><a href="{{ route('culture') }}" class="{{ request()->routeIs('culture') ? 'active' : '' }}">Culture</a></li>
        <li><a href="{{ route('cuisine') }}" class="{{ request()->routeIs('cuisine') ? 'active' : '' }}">Cuisine</a></li>
        <li><a href="{{ route('festivals') }}" class="{{ request()->routeIs('festivals') ? 'active' : '' }}">Festivals</a></li>
        <li><a href="{{ route('nature') }}" class="{{ request()->routeIs('nature') ? 'active' : '' }}">Nature</a></li>
        <li><a href="{{ route('cities') }}" class="{{ request()->routeIs('cities') ? 'active' : '' }}">Cities</a></li>
        <li><a href="{{ route('people') }}" class="{{ request()->routeIs('people') ? 'active' : '' }}">People</a></li>
        <li><a href="{{ route('travel') }}" class="{{ request()->routeIs('travel') ? 'active' : '' }}">Travel</a></li>
    </ul>
</nav>

<div class="flag-stripe"></div>

@yield('content')

<footer>
    <p>Made with ❤️ for the <span>Philippines</span> — Pearl of the Orient Seas</p>
</footer>

</body>
</html>
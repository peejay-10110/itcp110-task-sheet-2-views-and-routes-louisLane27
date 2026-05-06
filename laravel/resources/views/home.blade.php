@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="hero">
    <h1>🇵🇭 Discover the Philippines</h1>
    <p>Welcome to the Pearl of the Orient Seas — an archipelago of 7,641 islands full of wonder, warmth, and culture.</p>
</div>

<div class="container">
    <h2 class="section-title">Explore the Philippines</h2>
    <p class="section-sub">Choose a topic to dive deeper into what makes the Philippines truly unique.</p>

    <div class="card-grid">
        <div class="card">
            <div class="card-img">📜</div>
            <div class="card-body">
                <h3>History</h3>
                <p>From pre-colonial kingdoms to Spanish rule, American era, and independence — a rich story of resilience.</p>
                <a href="{{ route('history') }}" class="btn">Learn More</a>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🏝️</div>
            <div class="card-body">
                <h3>Islands</h3>
                <p>7,641 islands spread across Luzon, Visayas, and Mindanao — each with its own charm.</p>
                <a href="{{ route('islands') }}" class="btn">Explore Islands</a>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🎭</div>
            <div class="card-body">
                <h3>Culture</h3>
                <p>A unique blend of Malay, Spanish, Chinese, and American influences that shaped Filipino identity.</p>
                <a href="{{ route('culture') }}" class="btn">Discover Culture</a>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🍜</div>
            <div class="card-body">
                <h3>Cuisine</h3>
                <p>Adobo, sinigang, lechon and more — Filipino food is bold, comforting, and deeply communal.</p>
                <a href="{{ route('cuisine') }}" class="btn">Try Cuisine</a>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🎉</div>
            <div class="card-body">
                <h3>Festivals</h3>
                <p>From Sinulog to Ati-Atihan, the Philippines celebrates life with color, music, and dance.</p>
                <a href="{{ route('festivals') }}" class="btn">See Festivals</a>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🌿</div>
            <div class="card-body">
                <h3>Nature</h3>
                <p>Pristine beaches, lush rainforests, active volcanoes, and UNESCO heritage sites await.</p>
                <a href="{{ route('nature') }}" class="btn">Explore Nature</a>
            </div>
        </div>
    </div>
</div>
@endsection
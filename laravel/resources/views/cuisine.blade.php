@extends('layouts.app')

@section('title', 'Cuisine')

@section('content')
<div class="hero">
    <h1>🍜 Filipino Cuisine</h1>
    <p>Bold, comforting, and deeply communal — Filipino food tells the story of a nation's history and soul.</p>
</div>

<div class="container">
    <h2 class="section-title">Iconic Filipino Dishes</h2>
    <p class="section-sub">From everyday home cooking to festive feasts.</p>

    <div class="card-grid">
        <div class="card">
            <div class="card-img">🍖</div>
            <div class="card-body">
                <span class="badge">National Dish</span>
                <h3>Adobo</h3>
                <p>Meat (usually chicken or pork) slow-cooked in vinegar, soy sauce, garlic, bay leaves, and black pepper. Every Filipino family has their own version of this beloved dish.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🍲</div>
            <div class="card-body">
                <span class="badge">Comfort Food</span>
                <h3>Sinigang</h3>
                <p>A sour tamarind-based soup with vegetables and your choice of pork, shrimp, or fish. The ultimate Filipino comfort food — especially on rainy days.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🐷</div>
            <div class="card-body">
                <span class="badge">Fiesta Staple</span>
                <h3>Lechon</h3>
                <p>A whole roasted pig with crispy skin and tender, flavorful meat inside. The centerpiece of any Filipino celebration — from birthdays to town fiestas.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🍚</div>
            <div class="card-body">
                <span class="badge">Street Food</span>
                <h3>Sisig</h3>
                <p>Chopped pork cheeks and ears, seasoned with calamansi, onion, and chili. Originally from Pampanga, now a beloved pulutan (snack) across the Philippines.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🍢</div>
            <div class="card-body">
                <span class="badge">Street Food</span>
                <h3>Isaw & BBQ</h3>
                <p>Skewered grilled chicken intestines (isaw) and pork barbecue on sticks are quintessential Filipino street food, enjoyed with spiced vinegar dipping sauce.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🧁</div>
            <div class="card-body">
                <span class="badge">Dessert</span>
                <h3>Halo-Halo</h3>
                <p>A colorful shaved ice dessert layered with sweet beans, jelly, fruit, leche flan, ube halaya, and topped with ice cream. The ultimate Filipino summer treat.</p>
            </div>
        </div>
    </div>

    <h2 class="section-title" style="margin-top:2.5rem">Food Facts</h2>
    <ul class="info-list">
        <li><strong>Staple</strong> Rice — eaten three times a day, a meal isn't complete without it</li>
        <li><strong>Souring Agent</strong> Tamarind, calamansi, green mango, or kamias</li>
        <li><strong>Signature Flavor</strong> Sweet-salty-sour combinations unique to Filipino palate</li>
        <li><strong>Food Capital</strong> Pampanga — considered the culinary capital of the Philippines</li>
        <li><strong>Global Reach</strong> Filipino cuisine is now celebrated in New York, LA, Dubai, and beyond</li>
    </ul>
</div>
@endsection
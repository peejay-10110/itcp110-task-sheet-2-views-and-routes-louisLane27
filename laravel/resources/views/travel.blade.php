@extends('layouts.app')

@section('title', 'Travel')

@section('content')
<div class="hero">
    <h1>✈️ Travel to the Philippines</h1>
    <p>Your essential guide to planning an unforgettable trip to the Pearl of the Orient Seas.</p>
</div>

<div class="container">
    <h2 class="section-title">Top Destinations</h2>
    <p class="section-sub">Where to go on your Philippine adventure.</p>

    <div class="card-grid">
        <div class="card">
            <div class="card-img">🏖️</div>
            <div class="card-body">
                <span class="badge">Beach Paradise</span>
                <h3>El Nido, Palawan</h3>
                <p>Dramatic limestone cliffs, hidden lagoons, and pristine beaches. El Nido is consistently ranked among the world's most beautiful island destinations.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🌊</div>
            <div class="card-body">
                <span class="badge">Diving Mecca</span>
                <h3>Coron, Palawan</h3>
                <p>World-class wreck diving in sunken Japanese WWII ships, crystal-clear Kayangan Lake, and stunning karst scenery make Coron a bucket-list destination.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🐠</div>
            <div class="card-body">
                <span class="badge">Marine Life</span>
                <h3>Siargao Island</h3>
                <p>The surfing capital of the Philippines. Famous for Cloud 9 surf break, coconut road, tranquil lagoons, and an increasingly vibrant travel scene.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🏛️</div>
            <div class="card-body">
                <span class="badge">History</span>
                <h3>Intramuros, Manila</h3>
                <p>The walled city built by the Spanish in the 16th century. Explore Fort Santiago, San Agustin Church (a UNESCO site), and centuries of colonial history by bamboo bike.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🌾</div>
            <div class="card-body">
                <span class="badge">Heritage</span>
                <h3>Banaue & Sagada</h3>
                <p>The ancient rice terraces of Banaue and the mystical hanging coffins of Sagada offer a window into the living culture of the Cordillera highlands.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🌅</div>
            <div class="card-body">
                <span class="badge">Boracay</span>
                <h3>White Beach, Boracay</h3>
                <p>A 4-kilometer stretch of powdery white sand with crystal-blue water. Best visited November to May. Famous for its sunsets, watersports, and vibrant beach life.</p>
            </div>
        </div>
    </div>

    <h2 class="section-title" style="margin-top:2.5rem">Travel Essentials</h2>
    <ul class="info-list">
        <li><strong>Best Time to Visit</strong> November to May (dry season) — avoid typhoon season (June–October)</li>
        <li><strong>Currency</strong> Philippine Peso (PHP) — ₱1 ≈ $0.017 USD</li>
        <li><strong>Main Entry</strong> Ninoy Aquino International Airport (NAIA), Manila; Mactan-Cebu International Airport</li>
        <li><strong>Transport</strong> Jeepney, tricycle, habal-habal, RORO ferries between islands</li>
        <li><strong>Visa</strong> Visa-free entry for most nationalities for up to 30 days</li>
        <li><strong>Language</strong> English is widely spoken — communication is easy throughout the country</li>
        <li><strong>Safety</strong> Generally safe for tourists; exercise standard precautions in crowded areas</li>
    </ul>
</div>
@endsection
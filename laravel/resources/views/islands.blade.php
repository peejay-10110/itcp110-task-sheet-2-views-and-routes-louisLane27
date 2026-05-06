@extends('layouts.app')

@section('title', 'Islands')

@section('content')
<div class="hero">
    <h1>🏝️ The Islands of the Philippines</h1>
    <p>7,641 islands divided into three major island groups — Luzon, Visayas, and Mindanao.</p>
</div>

<div class="container">
    <h2 class="section-title">Major Island Groups</h2>
    <p class="section-sub">The Philippines is the world's second-largest archipelago nation.</p>

    <div class="card-grid">
        <div class="card">
            <div class="card-img">🗺️</div>
            <div class="card-body">
                <span class="badge">Luzon</span>
                <h3>Luzon</h3>
                <p>The largest and most populous island. Home to Manila, Baguio, Batangas, and the Cordillera highlands. Contains the country's political and economic center.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🌊</div>
            <div class="card-body">
                <span class="badge">Visayas</span>
                <h3>Visayas</h3>
                <p>The central island group with Cebu, Bohol, Boracay, Leyte, and Samar. Known for stunning beaches, diving, and strong cultural heritage.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🌴</div>
            <div class="card-body">
                <span class="badge">Mindanao</span>
                <h3>Mindanao</h3>
                <p>The second-largest island group. Home to Davao, Zamboanga, and diverse indigenous cultures. Known for Mount Apo and rich agricultural lands.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">💎</div>
            <div class="card-body">
                <span class="badge">Must Visit</span>
                <h3>Palawan</h3>
                <p>Repeatedly voted the world's best island. Home to El Nido, Coron, and the Puerto Princesa Underground River — a UNESCO World Heritage Site.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🐠</div>
            <div class="card-body">
                <span class="badge">Cebu</span>
                <h3>Cebu Island</h3>
                <p>The Queen City of the South. A hub of commerce, history, and tourism — famous for whale shark encounters in Oslob and Magellan's Cross.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🏖️</div>
            <div class="card-body">
                <span class="badge">Boracay</span>
                <h3>Boracay</h3>
                <p>Famous for its powdery white sand and vibrant nightlife. One of Asia's top beach destinations, consistently ranking among the world's best beaches.</p>
            </div>
        </div>
    </div>

    <h2 class="section-title" style="margin-top:2.5rem">Island Facts</h2>
    <ul class="info-list">
        <li><strong>Total Islands</strong> 7,641 (at low tide), approximately 2,000 are inhabited</li>
        <li><strong>Longest Coastline</strong> 36,289 km — 5th longest in the world</li>
        <li><strong>Largest Island</strong> Luzon (104,688 km²)</li>
        <li><strong>Smallest Province</strong> Batanes — northernmost island group</li>
        <li><strong>Deepest Point</strong> Philippine Trench — over 10,000 meters deep</li>
    </ul>
</div>
@endsection
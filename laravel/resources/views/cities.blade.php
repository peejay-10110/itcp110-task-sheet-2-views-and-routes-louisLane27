@extends('layouts.app')

@section('title', 'Cities')

@section('content')
<div class="hero">
    <h1>🏙️ Philippine Cities</h1>
    <p>From the bustling capital Manila to the cool highlands of Baguio — each city has its own story.</p>
</div>

<div class="container">
    <h2 class="section-title">Major Cities</h2>
    <p class="section-sub">The Philippines has 145 cities, each with a unique character and culture.</p>

    <div class="card-grid">
        <div class="card">
            <div class="card-img">🌆</div>
            <div class="card-body">
                <span class="badge">Capital</span>
                <h3>Manila</h3>
                <p>The capital city and seat of government. One of the world's most densely populated cities, yet full of history from Intramuros to the modern skyline of Makati and BGC.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🌃</div>
            <div class="card-body">
                <span class="badge">Economic Hub</span>
                <h3>Quezon City</h3>
                <p>The most populous city in the Philippines and former capital. Home to the University of the Philippines, major media networks, and vibrant arts and nightlife districts.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🌊</div>
            <div class="card-body">
                <span class="badge">Queen City of the South</span>
                <h3>Cebu City</h3>
                <p>The oldest city in the Philippines, founded by the Spanish in 1565. A major economic and tourism hub with rich history, world-class malls, and gateway to Visayas diving.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🌿</div>
            <div class="card-body">
                <span class="badge">Mindanao</span>
                <h3>Davao City</h3>
                <p>The largest city in the Philippines by land area, known for being one of Asia's safest cities, home to Philippine Eagle Center, and the famous Davao durian fruit.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">❄️</div>
            <div class="card-body">
                <span class="badge">Summer Capital</span>
                <h3>Baguio City</h3>
                <p>Perched at 1,500 meters in the Cordillera mountains, Baguio is cool year-round. Famous for strawberries, pine trees, the Panagbenga Festival, and Session Road.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🏛️</div>
            <div class="card-body">
                <span class="badge">Zamboanga</span>
                <h3>Zamboanga City</h3>
                <p>The "City of Flowers," known for its unique Chavacano creole language, the pink-sailed vintas (boats), Fort Pilar, and its distinct blend of Muslim and Christian heritage.</p>
            </div>
        </div>
    </div>
</div>
@endsection
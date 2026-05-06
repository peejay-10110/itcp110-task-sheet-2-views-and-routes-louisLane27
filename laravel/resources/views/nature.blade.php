@extends('layouts.app')

@section('title', 'Nature')

@section('content')
<div class="hero">
    <h1>🌿 Philippine Nature</h1>
    <p>One of the world's biodiversity hotspots — from towering volcanoes to turquoise seas.</p>
</div>

<div class="container">
    <h2 class="section-title">Natural Wonders</h2>
    <p class="section-sub">The Philippines is home to some of the planet's most spectacular natural landscapes.</p>

    <div class="card-grid">
        <div class="card">
            <div class="card-img">🌋</div>
            <div class="card-body">
                <span class="badge">UNESCO</span>
                <h3>Mayon Volcano</h3>
                <p>The world's most perfect cone-shaped volcano, rising 2,462 meters above Albay. An active volcano that's as beautiful as it is powerful — visible for miles around.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🦅</div>
            <div class="card-body">
                <span class="badge">Palawan</span>
                <h3>Puerto Princesa Underground River</h3>
                <p>A UNESCO World Heritage Site and one of the New Seven Wonders of Nature. A subterranean river flowing through a spectacular cave system into the sea.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🌾</div>
            <div class="card-body">
                <span class="badge">UNESCO</span>
                <h3>Banaue Rice Terraces</h3>
                <p>Carved by the Ifugao people over 2,000 years ago, these terraces stretch across the Cordillera mountains and are often called the "Eighth Wonder of the World."</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🐬</div>
            <div class="card-body">
                <span class="badge">Marine Life</span>
                <h3>Tubbataha Reef</h3>
                <p>A UNESCO marine sanctuary in the Sulu Sea — one of the world's premier diving destinations, home to over 600 species of fish, sharks, manta rays, and turtles.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🏔️</div>
            <div class="card-body">
                <span class="badge">Highest Peak</span>
                <h3>Mount Apo</h3>
                <p>At 2,954 meters, it is the highest peak in the Philippines. Located in Mindanao, it is home to the endangered Philippine Eagle and unique highland ecosystems.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🐋</div>
            <div class="card-body">
                <span class="badge">Bohol</span>
                <h3>Chocolate Hills</h3>
                <p>Over 1,200 symmetrical, grass-covered conical hills that turn brown in the dry season. One of the Philippines' most iconic and geological wonders, found in Bohol.</p>
            </div>
        </div>
    </div>

    <h2 class="section-title" style="margin-top:2.5rem">Biodiversity Facts</h2>
    <ul class="info-list">
        <li><strong>Endemism</strong> Over 50% of wildlife species are found nowhere else on Earth</li>
        <li><strong>Philippine Eagle</strong> One of the world's largest and most powerful eagles — critically endangered</li>
        <li><strong>Coral Triangle</strong> The Philippines is part of the world's richest marine biodiversity zone</li>
        <li><strong>Whale Sharks</strong> Oslob, Cebu is one of the best places to swim with whale sharks</li>
        <li><strong>Tarsier</strong> One of the world's smallest primates, found in Bohol — an ancient species</li>
    </ul>
</div>
@endsection
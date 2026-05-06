@extends('layouts.app')

@section('title', 'People')

@section('content')
<div class="hero">
    <h1>👥 The Filipino People</h1>
    <p>Warm, resilient, and full of joy — the Filipino spirit is the Philippines' greatest treasure.</p>
</div>

<div class="container">
    <h2 class="section-title">Famous Filipinos</h2>
    <p class="section-sub">Filipinos who made their mark on the world stage.</p>

    <div class="card-grid">
        <div class="card">
            <div class="card-img">📚</div>
            <div class="card-body">
                <span class="badge">National Hero</span>
                <h3>José Rizal</h3>
                <p>Physician, writer, and national hero. His novels Noli Me Tangere and El Filibusterismo awakened Philippine nationalism and led to the revolution against Spain.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🥊</div>
            <div class="card-body">
                <span class="badge">Boxing Legend</span>
                <h3>Manny Pacquiao</h3>
                <p>The only eight-division world boxing champion in history. A living legend who also served as a senator — an inspiration to millions of Filipinos worldwide.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🎤</div>
            <div class="card-body">
                <span class="badge">Asia's Songbird</span>
                <h3>Regine Velasquez</h3>
                <p>Known as Asia's Songbird, she is one of the Philippines' most acclaimed and beloved vocal artists with a career spanning over three decades.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🎬</div>
            <div class="card-body">
                <span class="badge">Hollywood</span>
                <h3>Lou Diamond Phillips</h3>
                <p>Filipino-American actor known for La Bamba (1987). One of the earliest Filipino-heritage actors to achieve widespread Hollywood recognition.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🏊</div>
            <div class="card-body">
                <span class="badge">Olympic Gold</span>
                <h3>Hidilyn Diaz</h3>
                <p>The first Filipino Olympic gold medalist, winning weightlifting gold at the 2020 Tokyo Olympics. A national hero who made history for the entire nation.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">✏️</div>
            <div class="card-body">
                <span class="badge">Journalism</span>
                <h3>Maria Ressa</h3>
                <p>Co-founder of Rappler and 2021 Nobel Peace Prize laureate. A champion of press freedom and democracy, recognized globally for her courageous journalism.</p>
            </div>
        </div>
    </div>

    <h2 class="section-title" style="margin-top:2.5rem">People Facts</h2>
    <ul class="info-list">
        <li><strong>Population</strong> Approximately 115 million — one of the most populous nations in Asia</li>
        <li><strong>OFWs</strong> Over 10 million Overseas Filipino Workers worldwide</li>
        <li><strong>Major Ethnicity</strong> Tagalog, Cebuano, Ilocano, Bisaya, Bicolano among many groups</li>
        <li><strong>Literacy Rate</strong> Over 96% — one of the highest in Southeast Asia</li>
        <li><strong>Religion</strong> ~80% Roman Catholic, ~5% Muslim, ~8% Protestant, others</li>
    </ul>
</div>
@endsection
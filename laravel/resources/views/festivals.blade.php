@extends('layouts.app')

@section('title', 'Festivals')

@section('content')
<div class="hero">
    <h1>🎉 Philippine Festivals</h1>
    <p>The Philippines is a nation that celebrates life with unmatched color, music, and devotion.</p>
</div>

<div class="container">
    <h2 class="section-title">Major Festivals</h2>
    <p class="section-sub">Every month, somewhere in the Philippines, a fiesta is in full swing.</p>

    <div class="card-grid">
        <div class="card">
            <div class="card-img">🕯️</div>
            <div class="card-body">
                <span class="badge">January — Cebu</span>
                <h3>Sinulog Festival</h3>
                <p>One of the grandest festivals in the country, honoring the Santo Niño (Child Jesus). Millions join the street parade in Cebu City every third Sunday of January.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🪘</div>
            <div class="card-body">
                <span class="badge">January — Aklan</span>
                <h3>Ati-Atihan Festival</h3>
                <p>Known as the "Mother of All Philippine Festivals," this Kalibo street party involves participants painting their faces black and dancing wildly in honor of Santo Niño.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🌸</div>
            <div class="card-body">
                <span class="badge">May — Benguet</span>
                <h3>Panagbenga Festival</h3>
                <p>The Baguio Flower Festival celebrates the city's flower industry with float parades covered in blooms, street dancing, and highland culture in the cool mountain air.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🌊</div>
            <div class="card-body">
                <span class="badge">January — Iloilo</span>
                <h3>Dinagyang Festival</h3>
                <p>A religious and cultural festival in Iloilo City honoring the Santo Niño. Renowned for its elaborate tribal costumes and energetic, synchronized street dancing.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🎑</div>
            <div class="card-body">
                <span class="badge">April — Laguna</span>
                <h3>Turumba Festival</h3>
                <p>A unique religious festival in Pakil, Laguna, where devotees dance joyfully in front of Our Lady of Sorrows — a tradition dating back to the 18th century.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🎭</div>
            <div class="card-body">
                <span class="badge">August — Bulacan</span>
                <h3>Obando Fertility Festival</h3>
                <p>Couples wishing for children dance in the streets for three days to honor three saints. One of the most unusual and touching festivals in the Philippines.</p>
            </div>
        </div>
    </div>
</div>
@endsection
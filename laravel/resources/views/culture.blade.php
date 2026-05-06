@extends('layouts.app')

@section('title', 'Culture')

@section('content')
<div class="hero">
    <h1>🎭 Filipino Culture</h1>
    <p>A vibrant tapestry woven from Malay roots, Spanish tradition, Chinese influence, and American modernity.</p>
</div>

<div class="container">
    <h2 class="section-title">Core Filipino Values</h2>
    <p class="section-sub">Values that define Filipino identity and community life.</p>

    <div class="card-grid">
        <div class="card">
            <div class="card-img">🤝</div>
            <div class="card-body">
                <h3>Bayanihan</h3>
                <p>The spirit of communal unity and cooperation. Traditionally seen when neighbors literally helped carry a family's home to a new location. Today, it reflects collective support in times of need.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🙏</div>
            <div class="card-body">
                <h3>Utang na Loob</h3>
                <p>A deep sense of gratitude and debt of honor. A core social value that binds communities and families, emphasizing reciprocity and loyalty.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">😊</div>
            <div class="card-body">
                <h3>Pakikisama</h3>
                <p>The value of getting along and maintaining group harmony. Filipinos often prioritize relationships and smooth social interactions above personal differences.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">👨‍👩‍👧</div>
            <div class="card-body">
                <h3>Family First</h3>
                <p>The Filipino family is the cornerstone of society. Multi-generational households are common, and family obligations take priority in decision-making.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">⛪</div>
            <div class="card-body">
                <h3>Religion</h3>
                <p>The Philippines is the only predominantly Catholic country in Southeast Asia. Faith is deeply woven into daily life, fiestas, and national identity. About 80% are Roman Catholic.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🎵</div>
            <div class="card-body">
                <h3>Music & Arts</h3>
                <p>From the kundiman love songs of the 1930s to OPM (Original Pilipino Music) today, Filipinos have a passionate relationship with song, dance, and the performing arts.</p>
            </div>
        </div>
    </div>

    <h2 class="section-title" style="margin-top:2.5rem">Languages</h2>
    <ul class="info-list">
        <li><strong>Official Languages</strong> Filipino (Tagalog) and English</li>
        <li><strong>Regional Languages</strong> Over 170 languages including Cebuano, Ilocano, Hiligaynon, Waray</li>
        <li><strong>Most Spoken</strong> Cebuano (spoken by ~20 million in Visayas/Mindanao)</li>
        <li><strong>Script</strong> Latin alphabet; ancient Baybayin script is being revived</li>
    </ul>
</div>
@endsection
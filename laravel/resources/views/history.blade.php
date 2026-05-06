@extends('layouts.app')

@section('title', 'History')

@section('content')
<div class="hero">
    <h1>📜 Philippine History</h1>
    <p>A nation forged through centuries of colonization, revolution, and resilience.</p>
</div>

<div class="container">
    <h2 class="section-title">Timeline of the Philippines</h2>
    <p class="section-sub">Key eras that shaped the Filipino nation.</p>

    <div class="card-grid">
        <div class="card">
            <div class="card-img">🏯</div>
            <div class="card-body">
                <span class="badge">Pre-Colonial</span>
                <h3>Barangay Kingdoms (before 1565)</h3>
                <p>The Philippines was home to thriving barangay communities, kingdoms like Tondo, Maynila, and Cebu, with trade ties to China, India, and the Malay world.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">⚓</div>
            <div class="card-body">
                <span class="badge">Spanish Era</span>
                <h3>Spanish Colonization (1565–1898)</h3>
                <p>Spain colonized the Philippines for 333 years, introducing Christianity, the encomienda system, and a centralized government. The galleon trade connected Manila to the world.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">⚔️</div>
            <div class="card-body">
                <span class="badge">Revolution</span>
                <h3>Philippine Revolution (1896)</h3>
                <p>Inspired by the writings of José Rizal and led by Andres Bonifacio's Katipunan, Filipinos rose up against Spanish rule, ultimately declaring independence on June 12, 1898.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🦅</div>
            <div class="card-body">
                <span class="badge">American Era</span>
                <h3>American Period (1898–1946)</h3>
                <p>After the Spanish-American War, the Philippines came under U.S. control. This era brought public education, English as a medium of instruction, and democratic institutions.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🎌</div>
            <div class="card-body">
                <span class="badge">WWII</span>
                <h3>Japanese Occupation (1941–1945)</h3>
                <p>The Philippines suffered greatly under Japanese occupation during World War II. The Bataan Death March and the Battle of Manila remain dark chapters in Filipino memory.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">🌅</div>
            <div class="card-body">
                <span class="badge">Independence</span>
                <h3>Republic Era (1946–present)</h3>
                <p>The Philippines gained full independence on July 4, 1946. The nation has since navigated democracy, martial law under Marcos, the People Power Revolution, and ongoing development.</p>
            </div>
        </div>
    </div>

    <h2 class="section-title" style="margin-top:2.5rem">National Heroes</h2>
    <ul class="info-list">
        <li><strong>José Rizal</strong> National hero, author of Noli Me Tangere — executed by Spain in 1896</li>
        <li><strong>Andres Bonifacio</strong> Father of the Philippine Revolution, founder of the Katipunan</li>
        <li><strong>Emilio Aguinaldo</strong> First President of the Philippines, led the republic</li>
        <li><strong>Apolinario Mabini</strong> Brains of the Revolution, brilliant strategist and statesman</li>
        <li><strong>Gabriela Silang</strong> First female revolutionary leader in Philippine history</li>
    </ul>
</div>
@endsection
@extends('layouts.app')

@section('title', 'About')

@section('content')
    <section class="page-hero compact-hero">
        <div class="page-shell centered-copy">
            <span class="eyebrow"><span class="eyebrow-dot"></span> About the project</span>
            <h1>A simple POS workspace, built the <span>Laravel way.</span></h1>
            <p>LaravelPOS System demonstrates how routes, controllers, and Blade views work together to create a clean, maintainable web application.</p>
        </div>
    </section>

    <section class="section page-shell">
        <div class="about-grid">
            <div class="about-copy">
                <span class="kicker">OUR PURPOSE</span>
                <h2>Making everyday retail operations feel effortless.</h2>
                <p>LaravelPOS System is a laboratory project that reimagines a familiar point-of-sale dashboard in Laravel. The interface stays focused on the people behind every transaction: your customers and your team.</p>
                <p>While the current records come from static PHP arrays, the application is structured so a database-backed model can be added later without changing the responsibilities of each layer.</p>
                <div class="principle-list">
                    <div><span>01</span><p><strong>Clear by design</strong>Information is organized for quick scanning.</p></div>
                    <div><span>02</span><p><strong>Built to grow</strong>MVC separation makes future features easier.</p></div>
                    <div><span>03</span><p><strong>Friendly for teams</strong>Every screen is responsive and accessible.</p></div>
                </div>
            </div>
            <div class="about-visual">
                <div class="code-window">
                    <div class="window-bar"><span></span><span></span><span></span><small>routes/web.php</small></div>
                    <pre><code><span class="code-purple">Route</span>::get(<span class="code-green">'/customers'</span>, [
    CustomerController::<span class="code-blue">class</span>,
    <span class="code-green">'index'</span>
])->name(<span class="code-green">'customers.index'</span>);</code></pre>
                </div>
                <div class="floating-note"><span>✓</span><p><strong>4 routes connected</strong>Every page is ready</p></div>
            </div>
        </div>
    </section>

    <section class="mvc-section"><div class="page-shell">
        <div class="section-heading centered-heading"><div><span class="kicker">HOW IT WORKS</span><h2>One request, three clear responsibilities.</h2></div><p>The same MVC pattern used in TFA1, expressed with Laravel conventions.</p></div>
        <div class="mvc-flow">
            <div class="mvc-card"><span class="mvc-number">1</span><span class="feature-icon"><svg viewBox="0 0 24 24"><path d="M4 7h16M4 12h10M4 17h7"/></svg></span><h3>Route</h3><p>Matches the requested URL and chooses which controller method should run.</p><code>routes/web.php</code></div>
            <span class="flow-arrow">→</span>
            <div class="mvc-card"><span class="mvc-number">2</span><span class="feature-icon"><svg viewBox="0 0 24 24"><path d="m8 9-4 3 4 3m8-6 4 3-4 3m-2-9-4 12"/></svg></span><h3>Controller</h3><p>Prepares the account data and decides which view receives the response.</p><code>app/Http/Controllers</code></div>
            <span class="flow-arrow">→</span>
            <div class="mvc-card"><span class="mvc-number">3</span><span class="feature-icon"><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18M8 9v11"/></svg></span><h3>Blade view</h3><p>Loops through the supplied data and renders accessible, responsive HTML.</p><code>resources/views</code></div>
        </div>
    </div></section>
@endsection

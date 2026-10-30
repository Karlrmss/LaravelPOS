@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="hero">
        <div class="hero-orb hero-orb-one"></div><div class="hero-orb hero-orb-two"></div>
        <div class="page-shell hero-grid">
            <div class="hero-copy">
                <span class="eyebrow"><span class="eyebrow-dot"></span> Welcome to LaravelPOS System</span>
                <h1>A lovely way to keep business <span>in bloom.</span></h1>
                <p>Manage customers, coordinate your team, and follow your store's progress from one beautifully organized Laravel workspace.</p>
                <div class="hero-actions">
                    <a class="button button-primary" href="{{ route('customers.index') }}">View customers <svg viewBox="0 0 24 24" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg></a>
                    <a class="button button-secondary" href="{{ route('about') }}">Explore the system</a>
                </div>
                <div class="trust-row"><span class="avatar-stack"><span class="avatar">AN</span><span class="avatar">EG</span><span class="avatar">AR</span></span><span><strong>6 team members</strong><br>ready to serve customers</span></div>
            </div>

            <div class="dashboard-preview" aria-label="Sales summary preview">
                <div class="preview-head"><div><span>Sales summary</span><strong>October 2026</strong></div><span class="trend-badge">+12.4%</span></div>
                <div class="revenue-card"><span>Total revenue</span><strong>₱184,250.00</strong><small><span>↑ Blooming nicely</span> this month</small></div>
                <div class="preview-metrics"><div><span class="metric-icon">↗</span><p>Transactions<strong>148</strong></p></div><div><span class="metric-icon">♡</span><p>Avg. order<strong>₱1,245</strong></p></div><div><span class="metric-icon">✦</span><p>Best day<strong>Sunday</strong></p></div></div>
            </div>
        </div>
    </section>

    <section class="section page-shell">
        <div class="section-heading"><div><span class="kicker">YOUR WORKSPACE</span><h2>Run your store with confidence.</h2></div><p>A focused set of tools helps your team find the information they need without the clutter.</p></div>
        <div class="feature-grid">
            <a class="feature-card" href="{{ route('customers.index') }}"><span class="feature-icon"><svg viewBox="0 0 24 24"><path d="M16 20v-1.7c0-2-1.8-3.8-4-3.8H6c-2.2 0-4 1.8-4 3.8V20M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8Zm8-2a3 3 0 0 1 0 6m2 5v-1.7c0-1.5-.8-2.8-2-3.4"/></svg></span><div><h3>Customer accounts</h3><p>See contact details, order activity, and customer status in one clean directory.</p></div><span class="text-link">Open directory <span>→</span></span></a>
            <a class="feature-card" href="{{ route('users.index') }}"><span class="feature-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M4 21a8 8 0 0 1 16 0"/></svg></span><div><h3>User accounts</h3><p>Keep staff roles, access status, and recent activity easy to review.</p></div><span class="text-link">Manage team <span>→</span></span></a>
            <a class="feature-card" href="{{ route('about') }}"><span class="feature-icon"><svg viewBox="0 0 24 24"><path d="M4 5.5 12 2l8 3.5v6c0 4.8-3.4 8.5-8 10.5-4.6-2-8-5.7-8-10.5v-6Z"/><path d="m9 12 2 2 4-4"/></svg></span><div><h3>LaravelPOS System</h3><p>A clear MVC structure keeps routes, application logic, and presentation separated.</p></div><span class="text-link">See how it works <span>→</span></span></a>
        </div>
    </section>

    <section class="page-shell cta-panel"><div><span class="kicker kicker-light">READY TO EXPLORE?</span><h2>Your customer directory is one click away.</h2><p>Browse the sample account data rendered dynamically with Blade.</p></div><a class="button button-white" href="{{ route('customers.index') }}">Browse customers <span>→</span></a></section>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="LaravelPOS System — a modern Laravel point-of-sale account dashboard.">
    <title>@yield('title', 'Dashboard') · LaravelPOS System</title>
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Fraunces:opsz,wght@9..144,600;9..144,700&family=Manrope:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/system.css') }}">
</head>
<body>
    <div class="app-layout">
        <aside class="app-sidebar">
            <a class="brand system-brand" href="{{ route('home') }}" aria-label="LaravelPOS System home">
                <span class="brand-mark" aria-hidden="true">
                    <svg viewBox="0 0 32 32"><path d="M8 7.5h16l-1.8 17H9.8L8 7.5Z"/><path d="M12 10V6.7C12 4.7 13.8 3 16 3s4 1.7 4 3.7V10"/><path d="M13 15.5c1.8 2.4 4.2 2.4 6 0"/></svg>
                </span>
                <span class="brand-copy"><strong>Laravel<span>POS</span></strong><small>Management System</small></span>
            </a>

            <div class="sidebar-label">Workspace</div>
            <nav class="sidebar-nav" aria-label="Main navigation">
                <a href="{{ route('home') }}" @class(['active' => request()->routeIs('home')])>
                    <span class="nav-icon"><svg viewBox="0 0 24 24"><path d="M3 10.8 12 3l9 7.8v9.7a.5.5 0 0 1-.5.5h-5v-7h-7v7h-5a.5.5 0 0 1-.5-.5v-9.7Z"/></svg></span>
                    <span>Overview</span><small>⌁</small>
                </a>
                <a href="{{ route('customers.index') }}" @class(['active' => request()->routeIs('customers.*')])>
                    <span class="nav-icon"><svg viewBox="0 0 24 24"><path d="M16 20v-1.7c0-2-1.8-3.8-4-3.8H6c-2.2 0-4 1.8-4 3.8V20M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8Zm8-2a3 3 0 0 1 0 6m2 5v-1.7c0-1.5-.8-2.8-2-3.4"/></svg></span>
                    <span>Customers</span><small>13</small>
                </a>
                <a href="{{ route('users.index') }}" @class(['active' => request()->routeIs('users.*')])>
                    <span class="nav-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M4 21a8 8 0 0 1 16 0"/></svg></span>
                    <span>User accounts</span><small>6</small>
                </a>
                <a href="{{ route('about') }}" @class(['active' => request()->routeIs('about')])>
                    <span class="nav-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 11v6m0-10v.1"/></svg></span>
                    <span>About system</span><small>♡</small>
                </a>
            </nav>

            <div class="sidebar-bloom" aria-hidden="true"><span>✦</span><span>♡</span><span>✿</span></div>
            <div class="sidebar-status"><span class="status-orb"></span><p><strong>Store is online</strong><small>Everything looks lovely</small></p></div>

            <div class="sidebar-profile">
                <span class="avatar avatar-small">AN</span>
                <p><strong>Azea Natividad</strong><small>Administrator</small></p>
                <span class="profile-menu">•••</span>
            </div>
        </aside>

        <div class="app-workspace">
            <header class="workspace-header">
                <div>
                    <span class="workspace-date">{{ now()->format('l, F j') }}</span>
                    <h2>@yield('title', 'Dashboard')</h2>
                </div>
                <div class="workspace-actions">
                    <span class="live-pill"><span></span> Live workspace</span>
                    <button class="icon-button" aria-label="Notifications">
                        <svg viewBox="0 0 24 24"><path d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9ZM10 21h4"/></svg><span class="notification-dot"></span>
                    </button>
                    <span class="header-avatar">AN</span>
                </div>
            </header>

            <main class="workspace-main">@yield('content')</main>

            <footer class="site-footer">
                <p>LaravelPOS System <span>♡</span> Built with Laravel &amp; Blade</p>
                <p>© {{ date('Y') }} · MVC Laboratory Exercise</p>
            </footer>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>

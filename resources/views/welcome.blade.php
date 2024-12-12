<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- logo -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/logo.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
     <style>
    /* Global Styles */
body {
    margin: 0;
    padding: 0;
    font-family: 'Figtree', sans-serif;
    background-color: #1a1a2e; /* Dark purple background */
    color: #b56cd7; /* Soft purple text */
    transition: background-color 0.3s ease, color 0.3s ease;
}

/* Navbar Styles */
nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0.8rem 2rem;
    background: rgba(26, 26, 46, 0.95);
    border-bottom: 2px solid #9b66cc; /* Soft purple border */
    box-shadow: 0px 4px 10px rgba(155, 102, 204, 0.3);
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
    transition: background 0.3s ease;
}

nav.scrolled {
    background: rgba(26, 26, 46, 0.8); /* More transparent on scroll */
}

.logo {
    font-size: 1.5rem;
    font-weight: 700;
    color: #9b66cc; /* Soft purple logo */
}

.menu {
    display: flex;
    gap: 1rem;
    margin-right: auto; /* Align closer to the left */
    padding-left: 2rem;
}

a {
    color: #9b66cc; /* Soft purple link color */
    text-decoration: none;
    font-weight: 600;
    padding: 0.6rem 1.2rem;
    border: 2px solid transparent;
    border-radius: 8px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

a::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: rgba(155, 102, 204, 0.1); /* Soft purple hover effect */
    z-index: 0;
    transition: left 0.3s ease;
}

a:hover::before {
    left: 0;
}

a:hover {
    color: #ffffff;
    border-color: #9b66cc; /* Soft purple border on hover */
    box-shadow: 0px 0px 10px rgba(155, 102, 204, 0.6), 0px 0px 20px rgba(155, 102, 204, 0.3);
}

a:focus-visible {
    outline: 2px dashed #9b66cc; /* Soft purple focus outline */
    outline-offset: 4px;
}

/* Dark Mode Toggle Button */
.dark-mode-toggle {
    cursor: pointer;
    padding: 0.5rem 1rem;
    background-color: #9b66cc; /* Soft purple button */
    color: #1a1a2e;
    font-weight: bold;
    border: none;
    border-radius: 8px;
    transition: all 0.3s ease;
    position: absolute;
    left: 90%;
    transform: translateX(-50%); /* Center the button */
}

.dark-mode-toggle:hover {
    background-color: #ffffff;
    color: #1a1a2e;
    box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.6);
}

/* Main Content Styles */
main {
    margin-top: 5rem; /* Adjust space for fixed navbar */
    padding: 2rem;
    text-align: center;
    color: #b56cd7; /* Soft purple text color */
}

/* Footer Styles */
footer {
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%); /* Center the footer */
    padding: 1rem;
    color: #b56cd7; /* Soft purple footer text */
    text-align: center;
}

footer a {
    color: #9b66cc; /* Soft purple footer link */
    text-decoration: none;
}
</style>
</head>
<body>
<nav id="navbar">
    <div class="logo">My portfolio</div>
    @if (Route::has('login'))
        <div class="menu">
            <!-- Added Home link here -->
            <a href="{{ route('home.index') }}">Home</a>
            @auth
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            @else
                <a href="{{ route('login') }}">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
    <button class="dark-mode-toggle" onclick="toggleDarkMode()">Toggle Mode</button>
</nav>

<main>
    <h1>Welcome to My portfolio</h1>
</main>

<!-- Footer -->
<footer>
    <p>&copy; 2024 My Portfolio. All Rights Reserved.</p>
</footer>

<!-- Scripts -->
<script>
    const navbar = document.getElementById('navbar');

    // Change navbar style on scroll
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Dark Mode Toggle
    function toggleDarkMode() {
        document.body.classList.toggle('light-mode');
        if (document.body.classList.contains('light-mode')) {
            document.body.style.backgroundColor = '#ffffff';
            document.body.style.color = '#000000';
        } else {
            document.body.style.backgroundColor = '#0f0f0f';
            document.body.style.color = '#00ff88';
        }
    }
</script>
</body>
</html>

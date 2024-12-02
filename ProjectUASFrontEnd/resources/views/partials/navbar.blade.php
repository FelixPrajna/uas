<!-- resources/views/partials/navbar.blade.php -->
<div class="container">
    <nav class="main-nav">
        <img src="/img/logo.png" alt="logo" class="logo">
        <ul class="main-menu">
            <li><a href="/">Home</a></li>
            <li class="dropdown">
                <a href="#">Restaurants</a>
                <ul class="dropdown-menu">
                    <li><a href="pierre">Pierre</a></li>
                    <li><a href="altitude">Altitude Grill</a></li>
                    <li><a href="ojju">Ojju</a></li>
                    <li><a href="isshin">Isshin</a></li>
                </ul>
            </li>
            <li><a href="about">About Bite of Bliss</a></li>
            <li><a href="#">Contact Us</a></li>
            <!-- Cek apakah user sudah login -->
            <!-- Tombol Login -->
@if(session('user'))
    <li><a href="{{ route('logout') }}" class="btn-logout">Logout</a></li>
    <li><span>Welcome, {{ session('user')['name'] }}</span></li> <!-- Nama User -->
@else
    <li><a href="login" class="btn-login">Login</a></li>
@endif

        </ul>
    </nav>
</div>

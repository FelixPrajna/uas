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
            <li><a href="about">About</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="reservation" class="btn-reservation">Reservation</a></li>
            <li><a href="reservation-list" class="btn-reservation">List</a></li>
            <!-- Cek apakah user sudah login -->
            @if(session()->has('user'))
                <li><a href="{{ route('logout') }}" class="btn-logout">Logout</a></li>
            @else
                <li><a href="login" class="btn-login">Login</a></li>
            @endif
            <li><a href="settings" class="btn-reservation">Settings</a></li>
        </ul>
    </nav>
</div>

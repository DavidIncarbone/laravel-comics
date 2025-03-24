<header class="">
    <nav class="header-nav container wrapper d-flex justify-content-between align-items-center py-2 "> 
        <div class="header-img-container">
            <a href="{{route("home")}}"><img src="{{Vite::asset("resources/img/dc-logo.png")}}" alt=""></a>
        </div>
        <ul class="list-group flex-row gap-3">
    <li class="{{ request()->routeIs('characters') ? 'active' : '' }}"><a href="{{ route('characters') }}">characters</a></li>
    <li class="{{ request()->routeIs('comics') ? 'active' : '' }}"><a href="{{ route('comics') }}">comics</a></li>
    <li class="{{ request()->routeIs('movies') ? 'active' : '' }}"><a href="{{ route('movies') }}">movies</a></li>
    <li class="{{ request()->routeIs('TV') ? 'active' : '' }}"><a href="{{ route('TV') }}">tv</a></li>
    <li class="{{ request()->routeIs('games') ? 'active' : '' }}"><a href="{{ route('games') }}">games</a></li>
    <li class="{{ request()->routeIs('collectibles') ? 'active' : '' }}"><a href="{{ route('collectibles') }}">collectibles</a></li>
    <li class="{{ request()->routeIs('videos') ? 'active' : '' }}"><a href="{{ route('videos') }}">videos</a></li>
    <li class="{{ request()->routeIs('fans') ? 'active' : '' }}"><a href="{{ route('fans') }}">fans</a></li>
    <li class="{{ request()->routeIs('news') ? 'active' : '' }}"><a href="{{ route('news') }}">news</a></li>
    <li class="{{ request()->routeIs('shop') ? 'active' : '' }}"><a href="{{ route('shop') }}">shop</a></li>
</ul>

         </nav>
</header>
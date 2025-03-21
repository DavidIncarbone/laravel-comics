<header class="">
    <nav class="header-nav container wrapper d-flex justify-content-between align-items-center py-2 "> 
        <div class="header-img-container">
            <a href="{{route("home")}}"><img src="{{Vite::asset("resources/img/dc-logo.png")}}" alt=""></a>
        </div>
        <ul class="list-group flex-row gap-3 ">
            <li class=""><a href="{{route("characters")}}">characters</a></li>
            <li class=""><a href="{{route("home")}}">comics</a></li>
            <li class=""><a href="{{route("movies")}}">movies</a></li>
            <li class=""><a href="{{route("TV")}}">tv</a></li>
            <li class=""><a href="{{route("games")}}">games</a></li>
            <li class=""><a href="{{route("collectibles")}}">collectibles</a></li>
            <li class=""><a href="{{route("videos")}}">videos</a></li>
            <li class=""><a href="{{route("fans")}}">fans</a></li>
            <li class=""><a href="{{route("news")}}">news</a></li>
            <li class=""><a href="{{route("shop")}}">shop</a></li>
        </ul>
         </nav>
</header>
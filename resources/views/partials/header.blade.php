<header class="">
    <nav class="header-nav container wrapper d-flex justify-content-between align-items-center py-2 "> 
        <div class="header-img-container">
            <a href="{{route("home")}}"><img src="{{Vite::asset("resources/img/dc-logo.png")}}" alt=""></a>
        </div>
        <ul class="list-group flex-row gap-3">
            @foreach ($routes as $route)
    <li class={{ request()->routeIs($route) ? 'active' : '' }}><a href={{ route($route) }}>{{$route}}</a></li>
    @endforeach

</ul>

         </nav>
</header>

{{-- {{dd($routes)}} --}}
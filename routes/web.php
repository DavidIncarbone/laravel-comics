<?php

use Illuminate\Support\Facades\Route;

$routes = config("routes");

Route::get('/', function(){
   return redirect("comics");
})->name("home");

foreach ($routes as $route){
   
Route::get('/' . $route, function() use($route, $routes){
   $comics = config("comics");
   return view($route, compact(["comics","routes"]));
})->name($route);

}


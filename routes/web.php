<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;

Route::get('/', function(){
   return redirect("comics");
})->name("home");

Route::get('/comics', function(){
   $comics = config("comics");
   return view("comics", compact("comics"));
})->name("comics");


Route::get('/characters', function(){
   return view("characters");
})->name("characters");

Route::get('/movies', function(){
   return view("movies");
})->name("movies");

Route::get('/TV', function(){
   return view("TV");
})->name("TV");

Route::get('/games', function(){
   return view("games");
})->name("games");

Route::get('/collectibles', function(){
   return view("collectibles");
})->name("collectibles");

Route::get('/videos', function(){
   return view("videos");
})->name("videos");

Route::get('/fans', function(){
   return view("fans");
})->name("fans");

Route::get('/news', function(){
   return view("news");
})->name("news");

Route::get('/shop', function(){
   return view("shop");
})->name("shop");

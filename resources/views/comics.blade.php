{{-- Questa pagina utilizza il layout master --}}

{{-- Dichiaro le mie variabili --}}

{{-- @php
    $comics = config("comics");
    // dd($comics);
    
@endphp --}}

@extends("layouts.master")

@section("contenuto")

@include("partials.jumbotron")

@include("partials.comicsList")

@endsection
    

   




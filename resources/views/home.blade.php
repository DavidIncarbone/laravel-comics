{{-- Questa pagina utilizza il layout master --}}

{{-- Dichiaro le mie variabili --}}

@php
    $comics = config("comics");
    // dd($comics);
    
@endphp

@extends("layouts.master")

@section("titolo")

Laravel Comics

@endsection


@section("contenuto")

@include("partials.jumbotron")


<section class="comics-list pt-5 pb-3">

<div class="container wrapper">


<div class="row row-cols-6 g-3">

    @foreach ($comics as $comic)

<div class="col">
<div class="comic-card">
    <div class="d-flex justify-content-center">
    <div class="img-container">
        <img src={{$comic["thumb"]}} alt="">
    </div>
    </div>
        <div class="card-body text-white pt-2" style={{"height:50px"}}>
            <h5 class="text-start">{{$comic["title"]}}</h5>  
        </div>
    </div>
</div>

@endforeach

</div>

</div>
<div class="d-flex justify-content-center">
    
 <button class="py-1 px-5"> load more</button>
 </div>
       
</section>

    @endsection
    

   




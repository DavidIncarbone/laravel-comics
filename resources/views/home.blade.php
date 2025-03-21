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
<section class="comics-list py-5">

<div class="container wrapper">


<div class="row row-cols-6">

    @foreach ($comics as $comic)

<div class="col">
<div class="card"style={{"height:250px"}}>
    <div class="img-container h-75">
        <img src={{$comic["thumb"]}} alt="" class="h-100">
    </div>
        <div class="card-body h-25">
            {{-- <h5 class="overflow-y-hidden">{{$comic["title"]}}</h5>  --}}
        </div>
    </div>
</div>

@endforeach

</div>

</div>
</section>

    @endsection
    

   




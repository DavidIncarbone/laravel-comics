<section class="comics-list pt-5 pb-3">

<div class="container wrapper">
<div class="row row-cols-6 g-3">

    @foreach ($comics as $comic)

<x-card>

<x-slot:img>
{{$comic["thumb"]}}</x-slot>

<x-slot:title>{{$comic["title"]}}</x-slot>

</x-card>

@endforeach

</div>
</div>
<div class="d-flex justify-content-center">
    
 <button id="comics-list-btn" class="py-1 px-5">load more</button>
 </div>
       
</section>
<section class="comics-list pt-5 pb-3">

<div class="container wrapper">
<div class="row row-cols-6 g-3">
    

    @foreach ($comics as $comic)

    {{-- imposto un attributo $comic nella classe padre (App\Views\Components\card) che riceverà con sintassi seguente: --}}


<x-card :comic="$comic" />

   {{-- Alle key di ogni array associativo accedo dal file dove ho l'html del singolo componente (resources/views/components/card) --}}


@endforeach

</div>
</div>
<div class="d-flex justify-content-center">
    
 <button id="comics-list-btn" class="py-1 px-5">load more</button>
 </div>
       
</section>
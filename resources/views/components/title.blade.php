
<div class="p-3">

{{-- Creo lo slot per inserire il titolo --}}

<h1>
    {{$title}}
</h1>

{{-- Uso la variabile di default di Blade $slot per racchiudere dentro questo <p> tutto ciò che nel mio componente non sarà inserito all'interno di un componente x-slot(default di Blade) --}}

<p>{{$slot}}</p>

   {{-- Uso il mio componente button --}}

<x-button>

    {{-- Popolo lo slot "btn_text" usando il componente di default di Blade x-slot --}}

   <x-slot:btn_text>Back To Comics</x-slot>

</x-button>
</div>
<x-layout>

<x-back/>

    <x-slot:title>Articolo | Dettaglio</x-slot>


    <div class="container" >
        <div class="row">
                <x-cardDettaglio 
                        :titolo="$article->title"
                        :categoria="$article->category"
                        :descrizione="$article->description" 
                        :id="$article->id"
                        :image="$article->image">
                </x-cardDettaglio>
        </div>
    </div>

</x-layout>
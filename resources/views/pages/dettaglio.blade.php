<x-layout>

    <x-slot:title>Articolo | Dettaglio</x-slot>


    <div class="container" >
        <div class="row">
                <x-cardDettaglio 
                        :titolo="$article->title"
                        :categoria="$article->category->name"
                        :descrizione="$article->description" 
                        :id="$article->id"
                        :image="$article->image">
                </x-cardDettaglio>
        </div>
    </div>

</x-layout>
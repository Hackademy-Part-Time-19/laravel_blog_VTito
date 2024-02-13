<x-layout>

    @vite(['resources/css/articoli-categorie.css'])

    <x-slot:title> Articoli </x-slot>


    <div class="container">
        <div class="row">
            @foreach ($articoli as $articolo)
                <x-card :titolo="$articolo['title']"
                        :categoria="$articolo['category']"
                        :descrizione="$articolo['description']" 
                        :id="$articolo['id']"
                        :image="$articolo['image']">
                </x-card>
               
            @endforeach
        </div>
    </div>

</x-layout>

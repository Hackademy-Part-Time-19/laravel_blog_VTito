<x-layout>

    <x-slot:title>Articolo | Dettaglio</x-slot>


    <div class="container" >
        <div class="row">
                <x-cardDettaglio 
                        :titolo="$articolo['title']"
                        :categoria="$articolo['category']"
                        :descrizione="$articolo['description']" 
                        :id="$articolo['id']"
                        :image="$articolo['image']">
                </x-cardDettaglio>
        </div>
    </div>

</x-layout>
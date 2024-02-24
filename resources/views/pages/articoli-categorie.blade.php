<x-layout>

    @vite(['resources/css/articoli-categorie.css'])
<x-back/>
    <x-slot:title> Articoli </x-slot>


    <div class="container">
        <div class="row">
            @foreach ($category->articles as $article)
                <x-card :titolo="$article['title']"
                        :categoria="$category->name"
                        :descrizione="$article['description']" 
                        :id="$article['id']"
                        :image="$article['image']">
                </x-card>
               
            @endforeach
        </div>
    </div>

</x-layout>

<x-layout>

    @if (session()->has('success'))
        <h4 class="alert alert-success">{{ session('success') }}</h4>
    @endif

    @if (session()->has('error'))
        <h4 class="alert alert-danger">{{ session('error') }}</h4>
    @endif

    <x-slot:title> Articoli </x-slot>

    <div class="container">
        <div class="row">
            @foreach ($articles as $article)
                <x-card :titolo="$article['title']" :categoria="$article->category->name" :descrizione="$article['description']" :id="$article['id']" :image="$article['image']">
                </x-card>
            @endforeach
        </div>
    </div>

</x-layout>

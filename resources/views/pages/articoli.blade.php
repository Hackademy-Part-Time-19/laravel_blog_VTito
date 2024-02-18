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
            @foreach ($articoli as $articolo)
                <x-card :titolo="$articolo['title']" :categoria="$articolo['category']" :descrizione="$articolo['description']" :id="$articolo['id']" :image="$articolo['image']">
                </x-card>
            @endforeach
        </div>
    </div>

</x-layout>

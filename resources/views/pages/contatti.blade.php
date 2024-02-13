<x-layout>


    <x-slot:title> Contatti </x-slot>

    <h1 style="margin-top: 20px" class="text-center">Il mio Blog</h1>
    <p style="margin-top: 20px" class="text-center">{{ $descrizione }}</p>

    @if (session()->has('success'))
        <h4 class="alert alert-success">{{ session('success') }}</h4>
    @endif

    @if (session()->has('error'))
        <h4 class="alert alert-danger">{{ session('error') }}</h4>
    @endif

    <div class="form">
        <h3 style="margin-top: 20px" class="text-center">Contattaci per saperne di più</h3>
        <form style="padding: 20px" action="{{ route('contact.send') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input name="name" type="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <input name="description" type="text" class="form-control" id="description">
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>

</x-layout>
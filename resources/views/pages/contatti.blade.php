<x-layout>
<x-back/>

    <x-slot:title> Contatti </x-slot>

    <h1 style="margin-top: 20px; color:white; text-shadow:2px 2px 2px black; margin-top:20px;" class="text-center">
        {{ $descrizione }}</h1>

    @if (session()->has('success'))
        <h4 class="alert alert-success">{{ session('success') }}</h4>
    @endif

    @if (session()->has('error'))
        <h4 class="alert alert-danger">{{ session('error') }}</h4>
    @endif

    <div class="form">
        <h4 style="margin-top: 20px; color:white; text-shadow:2px 2px 2px black;"  class="text-center">
            Contattaci per saperne di più</h4>
        <div class="col-lg-4 mx-auto">
            <form style="padding:10px"  action="{{ route('contact.send') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label style="color:white; text-shadow:2px 2px 2px black; margin-top:20px;" for="name"
                        class="form-label">Nome</label>
                    <input name="name" type="name" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label style="color:white; text-shadow:2px 2px 2px black; margin-top:20px;" for="email"
                        class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="email">
                </div>
                <div class="mb-3">
                    <label style="color:white; text-shadow:2px 2px 2px black; margin-top:20px;" for="description"
                        class="form-label">Descrizione</label>
                    <input name="description" type="text" class="form-control" id="description">
                </div>
                <button style="background: #202020;" type="submit" class="btn btn-secondary">Invia</button>
            </form>
        </div>
    </div>

</x-layout>

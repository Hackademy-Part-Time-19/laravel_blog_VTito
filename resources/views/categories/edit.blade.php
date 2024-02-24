<x-layout>
<x-back/>
    <div style="margin-top:10px" class="col-lg-4 mx-5">
        @if (session()->has('success'))
            <h4 class="alert alert-success">{{ session('success') }}</h4>
        @endif

        @if (session()->has('error'))
            <h4 class="alert alert-danger">{{ session('error') }}</h4>
        @endif
        <div style="margin-top:10px" class="col-lg-4 mx-5">
            <form action="{{ route('category.update', compact('category')) }}" method="POST">
                @csrf
                @method('PUT')
                <label style="color: white; font-weight:600;text-shadow:2px 2px 2px black;" for="name">Nome
                    Categoria</label>
                <input type="text" name="name" id="name">
                <button style="color: white; font-weight:600; margin-top:20px" class="btn btn-secondary" type="submit">Salva</button>
            </form>
        </div>
</x-layout>

<x-layout>

    @if (session()->has('success'))
        <h4 class="alert alert-success">{{ session('success') }}</h4>
    @endif

    @if (session()->has('error'))
        <h4 class="alert alert-danger">{{ session('error') }}</h4>
    @endif

    @if (session()->has('deleted'))
        <h4 class="alert alert-success">{{ session('deleted') }}</h4>
    @endif

    <x-back />

    <div class="justify-content-start" style="margin: 15px;">
        <button style="font-weight:800;" class="btn btn-secondary">
            <a style="color:white;" href="{{ route('category.create') }}">Crea Categoria</a>
        </button>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <th>{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td>
                        <div style="display:flex;" class="col-lg-4 mx-5">
                            <button style="font-weight: 600; height:38px; margin-right:20px;" class="btn btn-secondary">
                                <a style="color: white"
                                    href="{{ route('category.edit', ['category' => $category->id]) }}">Modifica</a>
                            </button>

                            <form action="{{ route('category.destroy', ['category' => $category->id]) }}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button style="font-weight: 600;" class="btn btn-danger">
                                    Elimina
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-layout>

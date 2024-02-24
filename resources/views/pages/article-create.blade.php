<x-Layout>
    <x-back />

    <x-slot:title>Articolo
        | Crea</x-slot>

    <h2 style="color:white; text-shadow:2px 2px 2px black; margin-top:20px;" class="text-center">Crea il tuo Articolo</h2>
    @if (session()->has('success'))
        <h4 class="alert alert-success">{{ session('success') }}</h4>
    @endif

    @if (session()->has('error'))
        <h4 class="alert alert-danger">{{ session('error') }}</h4>
    @endif
    <div class="col-lg-8 mx-auto">
        <form style=" padding:10px; margin-top:4px;" action="{{ route('articles.store') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label style="color:white; text-shadow:2px 2px 2px black;" for="name"
                    class="form-label">Title</label>
                <input type="text"name='title' class="form-control" id="title" value="{{ old('title') }}">
                @error('title')
                    <div><span class="text-danger">{{ $message }}</span></div>
                @enderror
            </div>
            <div class="mb-3">
                <label style="color:white; text-shadow:2px 2px 2px black;" for="category_id"
                    class="form-label">Category</label>
                {{--  <select name="category_id" id="category_id" class="form-select" aria-label="Default select example">
                    <option selected value="">--scegli una categoria--</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select> --}}
                {{--   @error('category_id')
                <div><span class="text-danger">{{ $message }}</span></div>
            @enderror --}}
                @foreach ($categories as $category)
                    <div class="form-check form-check m-3">
                        <input name="categories[]" class="form-check-input" type="checkbox" id="{{ $category->id }}"
                            value="{{ $category->id }}">
                        <label style="color:white; text-shadow:2px 2px 2px black;" class="form-check-label"
                            for="{{ $category->id }}">{{ $category->name }}</label>
                    </div>
                @endforeach
            </div>
            <div class="mb-3">
                <label style="color:white; text-shadow:2px 2px 2px black;" for="description"
                    class="form-label">Description</label>
                <input type="text" name="description" class="form-control" id="description"
                    value="{{ old('description') }}">
                @error('description')
                    <div><span class="text-danger">{{ $message }}</span></div>
                @enderror
            </div>
            <div class="mb-3">
                <label style="color:white; text-shadow:2px 2px 2px black;" for="image"
                    class="form-label">Image</label>
                <input type="file" name="image" class="form-control" id="image"
                    value="{{ old('description') }}">
                @error('image')
                    <div><span class="text-danger">{{ $message }}</span></div>
                @enderror
            </div>
            <button style="background: #202020" type="submit" class="btn btn-secondary">Crea</button>
        </form>
    </div>
</x-Layout>

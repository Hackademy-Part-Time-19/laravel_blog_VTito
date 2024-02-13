<x-Layout>


    <h3 class="text-center">Crea il tuo Articolo</h3>
    @if (session()->has('success'))
        <h4 class="alert alert-success">{{ session('success') }}</h4>
    @endif

    @if (session()->has('error'))
        <h4 class="alert alert-danger">{{ session('error') }}</h4>
    @endif
    <form style="padding: 30px" action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Title</label>
                <input type="text"name='title' class="form-control" id="title" value="{{old('title')}}">
                @error('title') <div><span class="text-danger">{{$message}}</span></div> @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <input type="text" name="category" class="form-control" id="category" value="{{old('category')}}">
                @error('category') <div><span class="text-danger">{{$message}}</span></div> @enderror

            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" class="form-control" id="description" value="{{old('description')}}">
                @error('description') <div><span class="text-danger">{{$message}}</span></div> @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" class="form-control" id="image" value="{{old('description')}}">
                @error('image') <div><span class="text-danger">{{$message}}</span></div> @enderror
            </div>
            <button type="submit" class="btn btn-primary">Crea</button>
        </form>
    </form>

</x-Layout>

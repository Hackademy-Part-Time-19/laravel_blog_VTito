<div class="card" style="width: 20rem; margin:10px;">
    <div class="card-body">
        <img style="border-radius:5px;" class="img-fluid" src="{{ Storage::url($image) }}" alt="immagine">
        <h3 class="card-title text-center">{{ $titolo }}</h3>
        <h5 class="card-title text-center">{{ $categoria }}</h5>
        <p class="card-text">{{ Str::limit($descrizione), 20 }}</p>
        <div style="display: flex">
            <a href="{{ route('articles.show', ['article' => $id]) }}" class="card-link ">
                <button style="background: #202020" type="submit" class="btn btn-secondary">Dettagli</button>
                <a href="{{ route('articles.edit', ['article' => $id]) }}" class="card-link ">
                    <button style="background: #202020" type="submit" class="btn btn-secondary">Modifica</button>
                </a>
                <form style="margin-left:15px;" action="{{ route('articles.destroy', ['article' => $id])}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger">Elimina</button>
                </form>
            </a>
        </div>
    </div>
</div>

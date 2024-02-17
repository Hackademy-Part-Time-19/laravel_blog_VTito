<div class="card" style="width: 16rem; margin:10px;">
    <div class="card-body">
        <img style="border-radius:5px;" class="img-fluid" src="{{ Storage::url($image) }}" alt="immagine">
        <h3 class="card-title text-center">{{ $titolo }}</h3>
        <h5 class="card-title text-center">{{ $categoria }}</h5>
        <p class="card-text">{{ $descrizione }}</p>
        <a href="{{ route('articoli.show', ['id' => $id]) }}" class="card-link ">
            <button style="background: #202020" type="submit" class="btn btn-secondary">Dettagli</button>
        </a>
    </div>
</div>

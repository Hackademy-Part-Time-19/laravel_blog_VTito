<div class="card" style="width: 20rem; margin:10px">
    <div class="card-body">
        <img class="img-fluid" src="{{Storage::url($image)}}" alt="immagine">
        <h3 class="card-title text-center">{{$titolo}}</h3>
        <h5 class="card-title text-center">{{$categoria }}</h5>
        <p class="card-text">{{$descrizione}}</p>
    </div>
</div>
<div class="card" style="width: 25rem; margin:35px">
    <div class="card-body">
        <img style="border-radius: 8px; width:100%;" class="img-fluid" src="{{Storage::url($image)}}" alt="immagine">
        <h3 class="card-title text-center">{{$titolo}}</h3>
        <h5 class="card-title text-center">{{$categoria }}</h5>
        <p class="card-text">{{$descrizione}}</p>
    </div>
</div>
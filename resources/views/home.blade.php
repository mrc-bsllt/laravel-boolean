@extends("layouts.layout-main")

@section("content")
  <main>

    <div class="cars">
      @foreach ($cars as $car)
        <div class="car">
          <img src="https://www.publicdomainpictures.net/pictures/280000/velka/not-found-image-15383864787lu.jpg" alt="foto">
          <h2>{{ $car["brand"] }} - {{ $car["model"] }}</h2>
          <p>Numero di targa: <strong>{{ $car["number_plate"] }}</strong></p>
          <a href="{{ route("detail", ["id" => $car['id']-1]) }}">Vai al dettaglio</a>
        </div>
      @endforeach
    </div>

  </main>
@endsection

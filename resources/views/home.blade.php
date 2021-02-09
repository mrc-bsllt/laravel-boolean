<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <title>Home Cars</title>
  </head>
  <body>

    @include("template/header");

    <main>

      <div class="cars">
        @foreach ($cars as $car)
          <div class="car">
            <img src="https://www.publicdomainpictures.net/pictures/280000/velka/not-found-image-15383864787lu.jpg" alt="foto">
            <h2>{{ $car->brand }} - {{ $car->model }}</h2>
            <p>Numero di targa: <strong>{{ $car->number_plate }}</strong></p>
            <a href="{{ route("detail", ["id" => $car['id']-1]) }}">Vai al dettaglio</a>
          </div>
        @endforeach
      </div>

    </main>

  </body>
</html>

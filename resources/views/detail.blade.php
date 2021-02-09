<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <title>Detail</title>
  </head>
  <body>
    @include("template/header");

    <main>
      <h2>{{ $car->brand }}-{{ $car->model }}</h2>
      <h3>Targa: <small>{{ $car->number_plate }}</small></h3>
    </main>
  </body>
</html>

@extends("layouts.layout-main")

@section("content")
  <main>
    <h2>{{ $car->brand }}-{{ $car->model }}</h2>
    <h3>Targa: <small>{{ $car->number_plate }}</small></h3>
  </main>
@endsection

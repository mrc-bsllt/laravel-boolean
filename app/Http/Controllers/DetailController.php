<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class DetailController extends Controller
{
    public function show($id) {
      $cars = Car::all();
      $car = $cars[$id];

      return view("detail", compact("car"));
    }
}

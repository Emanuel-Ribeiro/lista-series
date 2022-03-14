<?php

namespace App\Http\Controllers;

class MaquinasController extends Controller
{
    public function index() {
      $maquinas = [
          '50ws006',
          '70ws229',
          '60ws032'
      ];

      return view('Maquinas.index', [
        'maquinas' => $maquinas
      ]);
  }

  public function create()
  {
    return view('maquinas.create');
  }
}
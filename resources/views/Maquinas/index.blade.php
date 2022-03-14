@extends('layout')

@section('cabecalho')
Maquinas
@endsection

@section('conteudo')
<ul class="list-group">
  @foreach ($maquinas as $maquina)
    <li class="list-group-item"><?= $maquina; ?></li>
  @endforeach
</ul>

<p class="text-center">
  <a href="/maquinas/adicionar" class="btn btn-dark mt-2">Adicionar</a>
</p>
@endsection
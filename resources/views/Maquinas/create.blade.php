@extends('layout')

@section('cabecalho')
Adicionar Maquina
@endsection

@section('conteudo')
    <form method="post">
      <div class="form-group">
        <label for="Numero da maquina" class="mb-2">Numero da maquina</label>
        <input type="text" class="form-control" name="Numero da maquina">
      </div>

      <button class="btn btn-primary mt-2">Adicionar</button>

    </form>
@endsection
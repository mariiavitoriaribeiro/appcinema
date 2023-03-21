@extends('padrao')

@section('content')

<form class="row g-3">
    <div class="col-md-6">
      <label for="inputSala" class="form-label">Sala</label>
      <input type="text" class="form-control" id="inputSala">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Número de Poltronas</label>
      <input type="text" class="form-control" id="inputSala">
    </div>
    <div class="col-12">
      <label for="inputAddress" class="form-label">Código do Filme</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="col-12">
      <label for="inputAddress2" class="form-label">Filme</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">Preço</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="col-md-4">
      <label for="inputState" class="form-label">da</label>
      <select id="inputState" class="form-select">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="col-md-2">
      <label for="inputZip" class="form-label">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Check me out
        </label>
      </div>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </form>


@endsection 
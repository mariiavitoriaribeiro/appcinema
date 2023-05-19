@extends('padrao')
@section('content')


<div class="container mt-5">
<form method="get" action="{{route('gerenciar-poltrona')}}">
  <div class="mb-3 row">
    <label for="inputPesquisar" class="col-sm-2 col-form-label">Pesquisar:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="numpol" id="inputPesquisar" placeholder="Digite o número da poltrona ou o nome" >
    </div>
    <div class="col-sm-2"> <button type="submit" class="btn btn-outline-primary">Pesquisar</button> </div>
  </div>
</form>

<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome do cliente</th>
      <th scope="col">Número da poltrona</th>
      <th scope="col">Alterar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>


     
    @if(empty($_GET['numpol']))
   
    @else
    
    @foreach($dadospoltrona as $dadospoltronas)
    

    
    <tr>
    
      <th scope="row">{{$dadospoltronas->id}}</th>
      <td>{{$dadospoltronas->nomeclie}}</td>
      <td>{{$dadospoltronas->numpol}}</td>

      <td>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAlterarPol-{{$dadospoltronas->id}}">Alterar</button>
      @include('modal.poltronaAlterar')
      </td>
        
      <td>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDeletePol-{{$dadospoltronas->id}}">Excluir</button>
        @include('modal.poltronaDeletar')
      </td>  

    </tr>

    

<!-- Modal -->

   @endforeach
  </tbody>
</table>

</div>
@endif







@endsection
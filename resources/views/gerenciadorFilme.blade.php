@extends('padrao')

@section('content')

<div class="container mt-5">

<form method="get" action="{{route('gerenciar-filme')}}">
  <div class="mb-3 row">
    <label for="inputPesquisar" class="col-sm-2 col-form-label">Pesquisar:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="nomefilme" id="inputPesquisar" placeholder="Digite o nome do filme" >
    </div>
    <div class="col-sm-2"> <button type="submit" class="btn btn-outline-primary">Pesquisar</button> </div>
  </div>

</form>

<table class="table table-dark table-hover">
  <thead>
    <tr>
      <td>Codígo</td>
      <td>Nome filme</td>
      <td>Atores Filme  </td>
      <td>Alterar</td>
      <td>Excluir</td>
    </tr>
  </thead>
  <tbody>
    @if(empty($_GET['nomefilme']))
    @else
    @foreach($dadosfilme as $dadosfilme)
    
    <tr>
      <th scope="row">{{$dadosfilme->id}}</th>
      <td>{{$dadosfilme->nomefilme}}</td>
      <td>{{$dadosfilme->atoresfilme}}</td>
      <td><a href="{{route('mostrar-filme',$dadosfilme->id)}}">Alterar</a></td>
      <td>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Excluir
</button>
      </td>
    </tr>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Cuidado!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Deseja mesmo excluir?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <form method="post" action="{{route('apagar-filme',$dadosfilme->id)}}">
        @method('delete')
        @csrf 
        <button type="submit" class=" btn btn-danger">Excluir</button>
      </form>
      </div>
    </div>
  </div>
</div>


   @endforeach
  </tbody>
</table>
</div>
@endif
@endsection
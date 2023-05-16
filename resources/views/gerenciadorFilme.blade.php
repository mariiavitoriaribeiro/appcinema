@extends('padrao')
@section('content')

<div class="container mt-5">
<form method="get" action="{{route('gerenciar-filme')}}">
  <div class="mb-3 row">
    <label for="inputPesquisar" class="col-sm-2 col-form-label">Pesquisar:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="nomefilme" id="inputPesquisar" placeholder="Digite o nome do funcionário" >
    </div>
    <div class="col-sm-2"> <button type="submit" class="btn btn-outline-primary">Pesquisar</button> </div>
  </div>
</form>

<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome filme</th>
      <th scope="col">Atores</th>
      <th scope="col">Data lançamento</th>
      <th scope="col">Sinopse</th>
      <th scope="col">Capa</th>
      <th scope="col">Alterar</th>
      <th scope="col">Excluir</th>
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
      <td>{{$dadosfilme->dtlancamentofilme}}</td>
      <td>{{$dadosfilme->sinopsefilme}}</td>
      <td>{{$dadosfilme->capa}}</td>
      <td>
        <!-- <a href="{{route('mostrar-filme',$dadosfilme->id)}}">Alterar</a> --> 
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalAlterarfilme-{{$dadosfilme->id}}">
          Alterar
        </button>
        @include('modal.filmeAlterar')  
      </td>
      <td>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDeleteFil-{{$dadosfilme->id}}">
          Excluir
        </button>
        @include('modal.filmeDeletar')
      </td>  
    </tr>
   @endforeach
  </tbody>
</table>
</div>
@endif
@endsection

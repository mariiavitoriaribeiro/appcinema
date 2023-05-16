<div class="modal fade" id="modalDeleteFil-{{$dadosfilme->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Excluir Filme</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-dark">
      Deseja excluir o(a) filme(a): {{$dadosfilme->id}} ?</br>
      Esta operação não podera ser revertida.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <form method="post" action="{{route('apagar-filme',$dadosfilme->id)}}">
        @method('delete')
        @csrf 
        <button type="submit" class=" btn btn-danger">Excluir</button>
      </form>
      </div>
    </div>
  </div>
</div>

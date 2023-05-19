<!-- Modal -->
<div class="modal fade" id="modalAlterarPol-{{$dadospoltronas->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Alterar Funcionário</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-dark">
      <form method = "post" action="{{route('alterar-banco-poltrona',$dadospoltronas->id)}}">
    @method('PUT')
    @csrf
            <div class="mb-3 form-check">
                <label for="nomeInput" class="form-label">Nome do cliente:</label>
                <input type="text" name="nomeclie" value="{{$dadospoltronas->nomeclie}}" class="form-control" id="nomeInput" >
            </div>

            <div class="mb-3 form-check">
                <label for="emailInput" class="form-label">Número da poltrona</label>
                <input type="text" name="numpol" class="form-control" value="{{$dadospoltronas->numpol}}" id="polInput">
            </div>
           
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>

      
    
    
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>
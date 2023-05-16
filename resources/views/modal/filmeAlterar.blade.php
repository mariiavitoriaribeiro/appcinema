<!-- Modal -->
<div class="modal fade" id="modalAlterarfilme-{{$dadosfilme->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Alterar filme</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-dark">

      <form method = "post" action="{{route('alterar-banco-filme',$dadosfilme->id)}}" enctype = "multipart/form-data">

        @method('PUT')
        @csrf 

            <div class="Verificação de formulário mb-3">
                <label for="nomeInput" class="form-label">Nome:</label>
                <input type="text" name="nomefilme" value="{{$dadosfilme->nomefilme}}" class="form-control" id="nomeInput" >
            </div>

            <div class="mb-3 form-check">
                <label for="AtorInput" class="form-label">Atores:</label>
                <input type="text" name="atoresfilme" class="form-control" id="atorInput">
            </div>

            <div class="mb-3 form-check">
                <label for="datalancamentoInput" class="form-label">Data lançamento:</label>
                <input type="date" name="dtlancamentofilme"class="form-control" id="datalancamentoInput" >
            </div>

            <div class="mb-3 form-check">
                <label for="sinopseInput" class="form-label">Sinopse:</label>
                <input type="text" name="sinopsefilme" class="form-control" id="sinopseInput">
            </div>

            <div class="mb-3 form-check">
                <label for="capaInput" class="form-label">Capa:</label>
                <input type="text" name="capa"class="form-control" id="capaInput">
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
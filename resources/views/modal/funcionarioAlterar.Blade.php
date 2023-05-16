<!-- Modal -->
<div class="modal fade" id="modalAlterarFun-{{$dadosfuncionarios->id}}" tabindex="-1" aria-labelledby="LabelDeleteFun" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Alterar Funcionário</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-dark">
      <form method = "post" action="{{route('alterar-banco-funcionario',$dadosfuncionarios->id )}}">
      @method('PUT')
      @csrf
            <div class="mb-3 form-check">
                <label for="nomeInput" class="form-label">Nome:</label>
                <input type="text" name="nomefun" value="{{$dadosfuncionarios->nomefun}}" class="form-control" id="nomeInput" >
            </div>

            <div class="mb-3 form-check">
                <label for="emailInput" class="form-label">Email:</label>
                <input type="email" name="emailfun"  value="{{$dadosfuncionarios->emailfun}}" class="form-control" id="emailInput">
            </div>

            <div class="mb-3 form-check">
                <label for="whatsappInput" class="form-label">Whatsapp:</label>
                <input type="text" name="whatsappfun" value="{{$dadosfuncionarios->whatsappfun}}" class="form-control" id="whatsappInput" >
            </div>
            
            <div class="mb-3 form-check">
                <label for="cpfInput" class="form-label">CPF:</label>
                <input type="text" name="cpffun" value="{{$dadosfuncionarios->cpffun}}" class="form-control" id="cpfInput">
            </div>

            <div class="mb-3 form-check">
                <label for="senhaInput" class="form-label">Senha:</label>
                <input type="password" name="senhafun" value="{{$dadosfuncionarios->senhafun}}" class="form-control" id="senhaInput">
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
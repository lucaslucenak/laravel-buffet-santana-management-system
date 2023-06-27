<div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmar Exclusão</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>{{$description}}</p>
        </div>
        <div class="modal-footer">
          <a href="{{$href}}" class="btn btn-danger confirm-delete">Excluir</a>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
<div class="modal fade" id="delModal{{ $nome->id }}" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel{{ $nome->id }}">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title text-center" id="myModalLabel{{ $nome->id }}">
                    Deseja deletar o usuário {{$nome->name}} ?
                </h4>
            </div>
            <div class="modal-body text-center">
                Lembre-se com isso será apagada todas as informações e solicitações
                pendentes ou
                em andamento desse
                usuário.
            </div>
            <div class="modal-footer">
                <div class="text-center">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        <i class="fa fa-bash"></i> Não
                    </button>
                    <a href="{{ route('url_delete_user', $nome->id) }}"
                       class="btn btn-success">
                        <i class="fa fa-check"></i>
                        Sim
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

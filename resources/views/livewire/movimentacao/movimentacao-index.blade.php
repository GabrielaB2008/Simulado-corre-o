<div>
    <div class="card">
            <div class="card-header">
                <h5>Movimentações</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="mb-3">
                        <input type="text" wire:model.live='search' placeholder="Pesquisar..." class="form-control">
                    </div>
                    <table class="table table-stripes">
                        <thead>
                            <tr>
                                <th>Tipo</th>
                                <th>Produto</th>
                                <th>Quantidade</th>
                                <th>Usuário</th>
                                <th>Data Movimentação</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($movimentacaos as $m)
                            <tr>
                                <td>{{ $m->tipo }}</td>
                                <td>{{ $m->produto_id }}</td>
                                <td>{{ $m->quantidade}}</td>
                                <td>{{ $m->user_id }}</td>
                                <td>{{ $m->data_movimentacao }}</td>
                                <td><button wire:click='delete({{ $m->id }})' class="btn btn-sm btn-danger">Excluir</button></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>

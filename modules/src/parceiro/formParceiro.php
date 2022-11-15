<h1>Cadastrar Parceiro</h1>
<form action="?page=salvarParceiro" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="">Nome do Parceiro*</label>
        <input required type="text" name="nome_parceiro" class="form-control">
    </div>
    <label for="">Porcentagem de Comissão*</label>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">%</span>
        <input required type="number" name="percent_parceiro" class="form-control" >
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>


</form>
<h1>Cadastrar Vendedor</h1>
<form action="?page=salvarVendedor" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="">Nome do Vendedor*</label>
        <input required type="text" name="nome_vendedor" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>


</form>
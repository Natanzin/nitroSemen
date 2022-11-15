<h1>Cadastrar Rota</h1>
<form action="?page=salvar-rota" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="">Nome da Rota*</label>
        <input required type="text" name="desc_racaProduto" class="form-control">
    </div>
    
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>


</form>
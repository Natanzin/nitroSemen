<h1>Cadastrar Raça</h1>
<form action="?page=salvarRaca" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="">Descrição da Raça*</label>
        <input required type="text" name="desc_racaProduto" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Abreviação*</label>
        <input required type="text" maxlength="3" name="abrev_racaProduto" class="form-control">
    </div>
    
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>


</form>
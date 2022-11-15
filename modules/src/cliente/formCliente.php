<h1>Cadastrar Cliente</h1>
<form action="?page=salvarCliente" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="">Nome do Cliente*</label>
        <input required type="text" name="nome_cliente" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">E-mail do Cliente*</label>
        <input required type="mail" name="email_cliente" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Telefone do Cliente*</label>
        <input required type="text" maxlength="11" name="fone_cliente" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>


</form>